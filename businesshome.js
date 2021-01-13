$(document).ready(function() {
    var mail = "admin";
    var cardno = 0;
    $.ajax(
          {
              url: 'getrequests.php',
              type: 'POST',
              dataType : 'json',
              data: {admin:mail},
              success: successfn,
              error: function(err,errt){
                  console.log(errt);
              }
          }
      );
          
  function successfn(data) {
    cardno = 0;
      var req = data["req"];
      var club = data["user"];
      var prod = data["product"];
      $("#fillcards").empty();
      req.forEach(function (arrayItem, index) {
          
        var strVar="";
            strVar += "<div class=\"card col-sm-12 col-md-10 rounded mb-2 justify-content-center\">";
            strVar += "                    <div class=\"card-header\"  data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#collapse"+cardno+"\" aria-controls=\"collapse"+cardno+"\"><h5 class=\"mb-0 justify-content-between\">";
            strVar += "                        <a class=\"text-left  text-dark\">";
            strVar += "                        "+prod[index]["product_name"]+"' – '"+club[index]["club_name"];
            strVar += "                        <\/a>";
            strVar += "                        <i class=\"fa fa-caret-down d-inline float-right\" style=\"font-size:24px\"><\/i>";
            strVar += "";
            strVar += "                    <\/h5>";
            strVar += "                    <\/div>";
            strVar += "                    <div aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\" class=\"collapse border-top border-light\" id=\"collapse"+cardno+"\">";
            strVar += "                    <div class=\"card-body col-12\">";
            strVar += '                            <div class="row pl-2" id="text-wrap request-2">'+
            '                            <p class="pl-4 row col-12">No of '+prod[index]["product_name"]+':         '+ arrayItem["quantity"]+'</p>'+
            '                            <p class="pl-4 row col-12">Size of '+prod[index]["product_name"]+':       '+arrayItem["size"]+'</p>'+
            '                            <p class="pl-4 row col-12">Color of '+prod[index]["product_name"]+':      '+arrayItem["color"]+'</p>'+
            '                            <p class="pl-4 row col-12">Additional Information:<br><pre class="d-inline ml-4">'+ arrayItem["description"]+'</pre></p>'+
            '                            </div><hr><div class="messages" clubid="'+club[index]["club_id"]+'" reqid="'+arrayItem["request_id"]+'"></div>';
            strVar += "                            <div class=\"row msg-div m-2 col-12 border-light\">";
            strVar += "                                <textarea rows=\"5\" class=\"tarea row col-10\" clubid="+club[index]["club_id"]+" reqid="+arrayItem["request_id"]+" id=\"off"+cardno+"-msg\" placeholder=\"Write your offer\"><\/textarea>";
            strVar += "                                <div class=\"d-flex row col-10 justify-conter-end\"><button class=\"ml-auto mt-1 px-4 send-btn\">Send<\/button><\/div>";
            strVar += "                            <\/div>";
            strVar += "                        <\/div>";
            strVar += "                    <\/div>";
            strVar += "                <\/div>";
            strVar += "";

        $("#fillcards").append(strVar);
        cardno+=1;

      });
      addmessages();
      }

    $(document).on('click','.send-btn',function(){
        var msg = $(this).parent().siblings("textarea").val();
        var rid = $(this).parent().siblings("textarea").attr("reqid");
        var cid = $(this).parent().siblings("textarea").attr("clubid");
        var data = {
            "msg": msg,
            "rid": rid,
            "cid": cid };

        $.ajax(
            {
                url: 'sendmsg.php',
                type: 'POST',
                dataType : 'text',
                data: {mdata:data},
                success: sent,
                error: function(err,errt){
                    console.log(errt);
                }
            }
        );
    $(this).parent().siblings("textarea").val("");
    function sent(data) {
        addmessages();
    }
    });






    function addmessages() {
        $(".messages").each(function(i, object) {
            var rid = $(this).attr("reqid");
            var cid = $(this).attr("clubid");
            var data = {
                "rid": rid,
                "cid": cid };
            $.ajax(
                {
                    url: 'getbusinessmsg.php',
                    type: 'POST',
                    dataType : 'json',
                    data: {mdata:data},
                    context: this,
                    success: getmsg,
                    error: function(err,errt){
                        console.log(errt);
                    }
                });
        });
        }
        function getmsg(data) {

            var msg = data["msg"];
            var club = data["club"];
            $(this).empty();
            myvar = this;
            msg.forEach(function (arrayItem, index) {
                if (arrayItem["sentby"]=="1") {
                $(myvar).append("<pre> "+arrayItem["datetime"]+"    You:    "+arrayItem["message"]+"</pre>");                 
                }
                else{
                $(myvar).append("<pre> "+arrayItem["datetime"]+"   "+club[index]["club_name"]+":    "+arrayItem["message"]+"</pre>");
                }
            });
        }

});
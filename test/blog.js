//todo

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    
    $(document).on('click', '.news-start',function()
    {
        var imgsrc = $(this).find("img").attr("src");
        var hdline = $(this).find("h5").text();
        if(hdline=="")
        {
            hdline = $(this).find("h3").text();
        }

        var para = $(this).find("p").text();
        if(imgsrc.split(".")[1]=="png")
        {
            $(".modal-body").find("img").addClass("bg-white");
        }
        $(".modal-body").find("img").attr("src", imgsrc);
        $(".modal-body").find("p").text(para);
        if($(this).find("h5").find("span").text()=="New" || $(this).find("h3").find("span").text()=="New")
        {
            hdline = hdline.slice(0,-3);
            $(".modal-body").find("h3").html(hdline);
            $(".modal-body").find("h3").append('<pre class = "d-inline"> </pre>');
            $(".modal-body").find("h3").append('<span class="badge badge-success">New</span>');
        }
        else{
            $(".modal-body").find("h3").html(hdline);
        }

    })


});
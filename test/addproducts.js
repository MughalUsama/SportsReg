$(document).ready(function() {


    $('#remcategory').on('change', function()  {
        if($('#remcategory').val()!=-1)
        {
            var cat = $('#remcategory').val();
            $.ajax(
                {
                    url: 'getproducts.php',
                    type: 'POST',
                    dataType : 'json',
                    data: {category:cat},
                    success: displayproducts,
                    error: function(err,errt){
                        console.log(errt);
                    }
                }
            );
        }
    });

    function displayproducts(data)
	{
        $('#prod').empty();
        var item=  "<option  val = '' selected>Choose Product/Service </option>";
        $('#prod').append(item);

        for (var prod of data) {
            var item=  "<option value = \""
            + prod['product_id']+"\">"+prod['product_name']+"</option>";
			$('#prod').append(item);
		}
    }

});
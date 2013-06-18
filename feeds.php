<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(document).ready(function () {
	var GetJSONResult ='http://graph.facebook.com/matthewd.higley';

	//$.getJSON('http://graph.facebook.com/matthewd.higley',
    // function(data){
    //   $.each(data.products, function(i,product){
    //     content = '<p>' + product.product_title + '</p>';
    //     content += '<p>' + product.product_short_description + '</p>';
    //     content += '<img src="' + product.product_thumbnail_src + '"/>';
    //     content += '<br/>';
    //     $(content).appendTo("body");
    //   });
    // });
    $.getJSON(GetJSONResult,
    function(data){
    	$.each(data.user, function(key, val){
    		content = '<p>'+user."first_name"+'</p>';
    	});
    	$(content).appendTo('body');
    });

});
</script>
</head>
<body>



</body>
</html>
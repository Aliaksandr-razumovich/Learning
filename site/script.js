$(document).ready(function(){
   $("#news_link").click(function(){
        $.ajax({
			    url:"rss.php",
	            type:"POST",
				 success:function(data){
			        $("#left_slidebar").html(data);
				}
	            
	    });
   });
});
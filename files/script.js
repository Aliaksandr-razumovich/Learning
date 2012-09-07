$(document).ready(function(){
    $('#disk_c').click(function(){
	var url = "c:/";
		$.ajax({
		    url: "script.php",
			type:"post",
			data:({
			        url:url
			     }),
		    success: function(data){
			       $("#col1").html(data); 
            }			
		});
    });
	
	
	
	$('#disk_d').click(function(){
	var url = "d:/";
		$.ajax({
		    url: "script.php",
			type:"post",
			data:({
			        url:url
			     }),
		    success: function(data){
			       $("#col1").html(data); 
            }			
		});
    });
	
	
	
    // $('#link').click(function(){
	  // alert('ss');
    // });
});	
	
$(document).ready(function(){
	$('#reg_link').click(function(){
		document.regform.submit();
    });
});
$(document).ready(function(){
  $('#ok_link').click(function(){
     //document.addPhotoForm.submit();
  	 Add_Photo();
  }); 
})


function Add_Photo(){
    var userfile    = $('#file').val();
	var description = $('#description').val(); 
	//alert(fileName);
    $.ajax({
	         url: "newPhoto.php",
			type: "POST",
			name : 'userfile',
			data:({
			        userfile:userfile,
			     description:description
				 }),
				 success:function(data){
        	       	     //if(data == 'true'){
        	       	      	//document.location.href = 'galery.php';
							$("#out").html(data);
                         //}
        	       	        
                       }
               });
			
	           
}
	    

$(document).ready(function(){
	$('#reg_link').click(function(){
		document.regform.submit();
    });
	
	$('#ok_link').click(function(){
        //document.addPhotoForm.submit();
		Upload_Picture();
    });
	
	$('.album').click(function(){
          //document.location.href = 'photo_preview.php';
    });
	
	$("#edit_photo").click(function(){
        //alert('ok');
		Update_Description();
    });
});
 



$(document).ready(function(){
        $("#register_link").click(function(){
						   
          popupCenter(); 
          ShowPopup();
		   
          resizeCalculation();
          $('#main').attr("disabled", "disabled");
          
          $("#close_popup").click(function(){
              $("#button").removeAttr("disabled");
              $("#register_popup").fadeOut(3);
			  $("#main").fadeOut(3);
            });  
       });     
}); 

$(document).ready(function(){
        $("#new_photo").click(function(){
               
          popupCenter(); 
          ShowPopup();
       
          resizeCalculation();
          $('#main').attr("disabled", "disabled");
          
          $("#close_popup").click(function(){
              $("#button").removeAttr("disabled");
              $("#register_popup").fadeOut(3);
        $("#main").fadeOut(3);
            });  
       });     
}); 

function Upload_Picture(){
 var value = $("#file").val();
 if(value == ''){
    alert('Please, select a file');
 }
 else{
     if(value.match('/.img|.png|.jpg|.jpeg|.gif/')){
	    document.addPhotoForm.submit();
	 }else{
	    alert("It's not a picture");
	 }
	 
 }
}

// function Update_Description(){
   // var description = $("#description").html();
   // var textarea = $("#textarea");
   // var value = $("#text");
   // textarea.css({ "display":"inline"});
   // value.val(description);
// }




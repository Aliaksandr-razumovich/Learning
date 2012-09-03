$(document).ready(function(){
  $('#ok_link').click(function(){
     document.addPhotoForm.submit();
  	 //AddPhoto();
  }); 
});

//$(document).ready(function(){
//  $('.album').click(function(){
//     window.open('photo_preview.php?photoID=".$photoID."');
//  	 //AddPhoto();
//  }); 
//});








//$(document).ready(function(){
//  $('.album').click(function(){
//    alert('ok');
//  });
//});
//						   

//$(document).ready(function(){
//        $('.album').click(function(){
//						   
//          popupCenter(); 
//          ShowPopup();
//		   
//          resizeCalculation();
//          //$('#main').attr("disabled", "disabled");
//          
//          $("#close_photo_preview").click(function(){
//              //$("#button").removeAttr("disabled");
//              $("#photo_preview").fadeOut(3);
//			  $("#main").fadeOut(3);
//            });  
//       });     
//}); 
//
////$(document).ready(function(){
////        $("#new_album").click(function(){
////               
////          popupCenter(); 
////          ShowPopup();
////       
////          resizeCalculation();
////          $('#main').attr("disabled", "disabled");
////          
////          $("#close_popup").click(function(){
////              $("#button").removeAttr("disabled");
////              $("#register_popup").fadeOut(3);
////        $("#main").fadeOut(3);
////            });  
////       });     
////}); 
//
//function resizeCalculation()
//{
//    $(window).resize(function(){
//        popupCenter();
//     });
//}   
//        
//        
//function ShowPopup()
//{
//    $("#photo_preview").fadeIn(3);
//	$("#main").fadeIn(3);
//}
//
//function popupCenter()
//{
//
//var windowWidth =    document.documentElement.clientWidth;//document.body.offsetWidth;//window.innerWidth;//document.body.clientWidth;
//var windowHeight =   document.documentElement.clientHeight;//window.innerHeight;//document.body.clientHeight;  
//var popupHeight = $("#photo_preview").height();  
//var popupWidth = $("#photo_preview").width();   
//$("#photo_preview").css({  
//"position": "absolute",  
//"top": windowHeight/2 - popupHeight/2,  
//"left": windowWidth/2 - popupWidth/2   
//});
//}
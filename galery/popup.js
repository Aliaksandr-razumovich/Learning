// JavaScript Document

//Show register user popup
$(document).ready(function(){
        $("#register_link").click(function(){
						   
          popupCenter(); 
          ShowPopup();
		  resizeCalculation();
		  
          //close the popup
          $("#close_popup").click(function(){
              $("#register_popup").fadeOut(3);
			  $("#main").fadeOut(3);
          });  
       });     
}); 

//Show add new album popup
$(document).ready(function(){
        $("#new_album").click(function(){
          popupCenter(); 
          ShowPopup();
          resizeCalculation();
		  
          //close the popup
          $("#close_popup").click(function(){
              $("#register_popup").fadeOut(3);
              $("#main").fadeOut(3);
          });  
       });     
}); 

//Make popup in center of the screen if browser is resized
function resizeCalculation()
{
    $(window).resize(function(){
        popupCenter();
     });
}   
        
//Showing popup       
function ShowPopup()
{
    $("#register_popup").fadeIn(3);
	$("#main").fadeIn(3);
}

//Makes popup in center of the screen 
function popupCenter()
{
    //get coordinates of the popup
    var windowWidth =    document.documentElement.clientWidth;
    var windowHeight =   document.documentElement.clientHeight;
    var popupHeight = $("#register_popup").height();  
    var popupWidth = $("#register_popup").width();

    //calculate new coordinates and write them in css	
    $("#register_popup").css({  
         "position": "absolute",  
         "top": windowHeight/2 - popupHeight/2,  
         "left": windowWidth/2 - popupWidth/2   
    });
}


// JavaScript Document
//Call RegisterUser() after a click on #reg_link
$(document).ready(function(){
  $("#reg_link").click(function(){						
	RegisterUser();					   		
  });	
  
  $("#login_link").click(function(){						
	VerifyUserExists();					   		
  });
});

//Call VerifyUserExists() after a click on #reg_link
// $(document).ready(function(){
  // $("#login_link").click(function(){						
	// VerifyUserExists();					   		
  // });	
// });

//Registration users
function RegisterUser()
{       
        //Getting user and password from text fields and crypting it to md5
		var login    = calcMD5($('#reg_login_id').val());
		var password = calcMD5($('#reg_password_id').val());
		var name     = $('#reg_name_id').val();
		var lastname = $('#reg_lastname_id').val();

        //Send user and password to server(file 'registration.php') 
        if(login != '' && password != '' && name != '' && lastname != ''){		
		    $.ajax({
			    url:"registration.php",
	            type:"POST",
	            data: ({
	        	        login: login,
	                 password: password,
					     name: name,
					 lastname: lastname	 
	                  }),
			
			    //Getting the response from the server (if registration was successfull or not)
			    success:function(data){
			        $("#message").html(data);
				}
		    });
		}else{
		   $("#message").html('No blank field allowed');
		}
}


//Authentification users
function VerifyUserExists(){
        //Getting user and password from text fields and crypting it to md5 
		var login    = calcMD5($('#login_id').val());
		var password = calcMD5($('#password_id').val());
		
		//Send user and password to server(file 'checkLogin.php') to verify if user exists in the database
        $.ajax({
        	       url:"checkLogin.php",
        	       type:"POST",
        	       //dataType:"JSON",
        	       data:({
        	       	        login: login,
        	       	     password: password
        	       	     }),
						 
				   //if user exists go to galery.php	 
        	       success:function(data){
        	       	      if(data == 'true'){
        	       	      	document.location.href = 'galery.php';
                          }
        	       	        
                        }
        	  });
}        	       	      
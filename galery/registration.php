<?php
  //The following code provides registration of new users in the application
  
  //Connecting to the database
  include("db_connect.php");
  
  //Getting user and password that user entered
  $login = $_POST['login'];
  $password = $_POST['password'];
		  
  //Verifying if the user exists in the database  
  $query = "SELECT * FROM `users`";
  $result = mysql_query($query);
  while($myrow = mysql_fetch_array($result)){
  	    if($login == $myrow['login']){
             $isUserExists = true;
             $id = $myrow['id'];
             break;
        }else{
             $isUserExists = false;
        }  
  }
			
  //if the user doesn't exists - add it to the database
  if($isUserExists == false){
     $query = "INSERT INTO `users`(`login`, `password`) VALUES('$login', '$password')";
     mysql_query($query); 
     $message = 'The user is succesfully created';
  }else{
       $message = 'The user is already exists';
  }
     
   //return the message
   echo $message; 
?>
    

      


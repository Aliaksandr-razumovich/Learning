<?php
//The following code provides registration of new users in the application
  
  //Connecting to the database
  include("db_connect.php");
  
  //Getting user data
  $login      = $_POST['login'];
  $password   = $_POST['password'];
  $name       = $_POST['name'];
  $last_name  = $_POST['lastname'];
		  
  //Make a query to the database to verify if the user exists or not 
  $query = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
  $query_result = mysql_query($query);
  $line = mysql_fetch_array($query_result);
  
  //If user the exists - write it's data in the database
  if($login != $line['login']){
	 $query = "INSERT INTO `users`(`login`, `password`, `name`, `last_name`) VALUES('$login', '$password', '$name', '$last_name')";
     mysql_query($query); 
	 
	 //Create folder where user pictures will be located
	 //$dir = mkdir('img/'.$name, 0777);
	 $message = "The user is succesfully created";
  }else{
     $message = "The user is already exists";
  }  
		
   //return the message
   echo $message; 
?>
    

      


<?php 
//The following code provides authentification of users

  //Connecting to the database
  include("db_connect.php");
  
  //Getting user and password that user entered
  $login = $_POST['login'];
  $password = $_POST['password'];
  
  //Checking if the user exists in the database
  $query = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
  $query_result = mysql_query($query);
  $line = mysql_fetch_array($query_result);
         if($login == $line['login'] && $password == $line['password']){
             $isValid = 'true';
			 $id = $line['id'];
             session_start();
		     $_SESSION['id'] = $id;
         }else{
               $isValid = 'false';
         }  
  echo $isValid;
?>
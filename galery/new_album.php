<?php
  //Connecting to the database
  include("db_connect.php");

  //Get name and description of the album
  $albumName = $_POST['album_name'];
  $description = $_POST['album_description'];
  
  //Start session and get id of the user
  session_start();
  $id = $_SESSION['id'];
  
  //Add data to the database
  $query = "INSERT INTO `album`(`id`, `name`, `description`) VALUES('$id', '$albumName', '$description')"; 
  mysql_query($query);
  Header('Location: galery.php');
?>
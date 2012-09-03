<?php
  //Connecting to the database
  include("db_connect.php");

  //Start session and get id of the user
  session_start();
  $id = $_SESSION['id'];

  //Draw a list of albums on the page
  function ShowAlbum(){
     global $id;
     $vyvod = '';
     $query = "SELECT * FROM `album` WHERE `id` = '$id'";
     $result = mysql_query($query);
           
     while($myrow = mysql_fetch_array($result)){
           if($myrow['name'] != ''){
              $albumID = $myrow['albumID'];
              $vyvod = $vyvod."<div class = 'album' style = 'float:left'><a href = 'album.php?albumID=".$albumID."'><img src = '001.jpg' width='150' height='150'></a></div>";
           }
     }
     echo $vyvod; 
  }

?>
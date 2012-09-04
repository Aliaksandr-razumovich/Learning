<?php
  //Connecting to the database
  include("db_connect.php");

  //Start session and get id of the user
  session_start();
  $id = $_SESSION['id'];

  //Draw a list of albums on the page
  function ShowPhoto(){
     global $id;
     $vyvod = '';
     $query = "SELECT * FROM `photo` WHERE `id` = '$id'";
     $result = mysql_query($query);
           
     while($myrow = mysql_fetch_array($result)){
           //if($myrow['name'] != ''){
              $photoID = $myrow['photoID'];
			  $url = $myrow['url'];
              $vyvod = $vyvod."<div class = 'album' style = 'float:left'><a href = 'galery.php?photoID=".$photoID."'><img src = '$url' width='150' height='150'></a></div>";
			  //echo 'vyvod';
          //}
     }
    echo $vyvod; 
  }
?>
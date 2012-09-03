<?php
  //Connecting to the database
  include("db_connect.php");

  //Start session and get id of the user
  session_start();
  $id = $_SESSION['id'];
  
  //Draw a list of photo on the page
  function ShowPhoto(){
  global $id;
     $albumID = $_GET['albumID'];
     $vyvod = '';
     //$text = "<div class = 'album' style = 'float:left'><a href = 'album.php'><img src = '001.jpg' width='150' height='150'></a></div>";
     //$query = "SELECT * FROM `photo` WHERE `id` = '$id'";
     $query = "SELECT * FROM photo WHERE albumID ='$albumID'";
     $result = mysql_query($query);
           
     while($myrow = mysql_fetch_array($result)){
           if($myrow['url'] != '' && $myrow['name'] != ''){
              $photoID = $myrow['photoID'];
		      $url = $myrow['url'];
              $name = $myrow['name'];
              $vyvod = $vyvod."<div name = '$photoID' class = 'album' style = 'float:left'><a id = 'photo_link' href = '' onclick = window.open('photo_preview.php?photoID=".$photoID."')><img src = '".$url."' width='150' height='150'></a></div>";
           }
     }
     echo $vyvod;  
}	 
	 
 
       
?>
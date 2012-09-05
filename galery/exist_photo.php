<?php
  //Connecting to the database
  include("db_connect.php");

  //Start session and get id of the user
  session_start();
  $id = $_SESSION['id'];

  //Draw a list of albums on the page
  function ShowPhoto(){
     global $id;
     $output = "";
     $query = "SELECT * FROM `photo` WHERE `id` = '$id'";
     $result = mysql_query($query);
           
     while($myrow = mysql_fetch_array($result)){
              $photoID = $myrow['photoID'];
			  $url = $myrow['url'];
              $output = $output."<div class = 'album'>
			                        <a href = 'photo_preview.php?photoID=".$photoID."'>
			                           <img src = '$url' width='150' height='150'>
								    </a><br>
									<div align = 'center'><a id = 'delete_photo' class = 'link' href = 'delete_photo.php?photoID=$photoID'>Delete</a></div>
								 </div>";
     }
    echo $output; 
  }
?>
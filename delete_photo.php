<?php
   include("db_connect.php");
   $photoID = $_GET['photoID'];
   $query = "DELETE FROM `photo` WHERE `photoID` = '$photoID'";
   mysql_query($query);
   Header('Location: galery.php');
?>
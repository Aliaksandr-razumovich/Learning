<?php 
   include("db_connect.php");
   //session_start();

   //$id = $_POST['user'];
   $albumID = $_GET['albumID'];
   echo $albumID;
   // $query = "SELECT `id` FROM `photo` WHERE `albumID` = '$albumID'";
   // $result = mysql_query($query);
   // $myrow = mysql_fetch_array($result);
   // $id = $myrow['id'];
   

   // $description = $_POST['photo_description'];
   // $fileName = $_FILES['userfile']['name']; 
   // $tempFileName = $_FILES['userfile']['tmp_name'];
   // $uploaddir = "/server/www/galery/".$id."/";

   // $finalURL = "/galery/".$id."/".$fileName;
   // $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
   // mkdir($id, 0777);
   


   // if (move_uploaded_file($tempFileName, $uploaddir.$fileName)) {
        // $query = "INSERT INTO `photo`(`id`, `name`, `description`, `url`, `albumID`) VALUES('$id', '$fileName','$description', '$finalURL', '$albumID')";
        // mysql_query($query);
        // Header("Location: album.php?albumID=$albumID");
   // } else {
             // echo "Possible file attack!";
          // }
  
?>

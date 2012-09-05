<?php 
   include("db_connect.php");
   session_start();
   $id = $_SESSION['id'];
   $user_name = $_SESSION['id'];
   
   $fileName     = basename($_FILES['userfile']['name']);
   $tempFileName = $_FILES['userfile']['tmp_name'];   
   $description  = $_POST['photo_description'];
   
   @mkdir("img/".$user_name, 0777);
   
   $url = "img/".$user_name."/".$fileName;
   //$uploaddir = "img/";

   //$uploaddir = $uploaddir.$fileName;
   //$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
   //mkdir($id, 0777);
   


   if (move_uploaded_file($tempFileName, $url)) {
        $query = "INSERT INTO `photo`(`id`, `description`, `url`) VALUES('$id', '$description', '$url')";
        mysql_query($query);
		Header("Location: galery.php");
		
   } else {
             echo "Possible file attack!";
          }
  
?>

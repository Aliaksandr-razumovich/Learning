<?php 
   //Connecting to the database
   include("db_connect.php");
   
     session_start();
     $id = $_SESSION['id'];
	 $user_name = $_SESSION['name'];
   //Get data from the form - file name and it's description
   
   $fileName    = preg_replace("#C:\\\\fakepath\\\\#", '',$_POST['userfile']);
   $description = $_POST['description'];
   
   //Create a directory where user's pictures will be placed
   //$dir = mkdir('img/'.$user_name, 0777);
    
   $uploaddir = 'img/'.$user_name.'/';
   $uploadfile = $uploaddir.$fileName;
   //move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)
   
   //Check if the picture is uploaded
   if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
         $query = "INSERT INTO `photo`(`id`, `description`, `url`) VALUES('$id','$description', '$image_url')";
         mysql_query($query);
		 $message = 'true';
   }else{
         $message = "Error! File is not uploaded.";
		 $message = 'false';
		 
   }
   echo $message;
   //echo $uploadfile;
  
?>

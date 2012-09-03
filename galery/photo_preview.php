<html>
   <head>
      <title>Photo preview</title>
   </head>
   <body bgcolor = 'gray'>   
      <?php 
         include("db_connect.php");
         $photoID = $_GET['photoID'];
         $query = "SELECT `url` FROM `photo` WHERE `photoID` = '$photoID'";
         $result = mysql_query($query);
         $myrow = mysql_fetch_array($result);
         $url = $myrow['url'];
         echo "<div align = 'center'><img src = '".$url."' height = '400' width = '400'></div>";
      ?>
    </body>
</html>    
      

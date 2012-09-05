<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <title>Photo preview</title>
	  <script src = 'jquery.js'></script>
	  <script src = 'galery.js'></script>
	  <link href="galery_style.css" rel="stylesheet" type="text/css" />
   </head>
   <body bgcolor = 'gray'>   
   <div>
         <?php
            include("db_connect.php");
            $photoID = $_GET['photoID'];
            $query = "SELECT * FROM `photo` WHERE `photoID` = '$photoID'";
            $result = mysql_query($query);
            $myrow = mysql_fetch_array($result);
            $url = $myrow['url'];
		    $description = $myrow['description'];
			
            echo "<div align = 'center'><img src = '".$url."' height = '400' width = '400'></div>";
			//echo "<div align = 'center'><a href = ''>Edit description</a></div>";
		    echo "<div id = 'description' align = 'center'>".$description."</div>";
         ?>	
   <div align = 'center' id = 'textarea'><textarea align = 'center' id = 'text'></textarea></div>
   <div align = 'center'><a id = 'edit_photo' href = ''>Edit description</a></div>	 
   </div>	 
    </body>
</html>    
      

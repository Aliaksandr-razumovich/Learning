<?php include('exist_album.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>galery</title>
<script src = 'jquery.js'></script>
<script src = 'galery.js'></script>
<script src = 'popup.js'></script>
<link href="galery_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
     <div>
        <a id = 'new_album' class = 'link' href = 'javascript: void(0);'>New album</a>&nbsp;
        <a class = 'link' href = ''>Edit album</a>&nbsp;
        <a class = 'link' href = ''>Delete album</a>&nbsp;
     </div>
     <div id = 'album_list'>
     <?php ShowAlbum();?>
     </div>
     <div id = 'register_popup'>
      <form name = 'regform' action = 'new_album.php' method = 'POST'>
         <div align = 'center'>Create new album</div>
         <div align = 'center'><a id = 'close_popup' class = 'link' href = 'javascript: void(0);'>Close</a></div>
         <div align = 'center'>Name of the album</div>
         <div align = 'center'><input type = 'text' id = 'reg_login_id' name = 'album_name' ></div>
         <div align = 'center'>Description</div>
         <div align = 'center'><textarea id = 'description' name = 'album_description' rows='3' cols='45' name='text'></textarea></div>
         <div align = 'center'><a id = 'reg_link' class = 'link' href = 'javascript: void(0);'>Register</a></div>
         <div align = 'center' id = 'message'></div>
      </form>
    </div>
    <!--dark background-->
    <div  style="filter: alpha(opacity=50);" id = 'main'>
    </div>
</body>
</html>

<?php include('exist_photo.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>galery</title>
<script src = 'jquery.js'></script>
<script src = 'galery.js'></script>
<script src = 'popup.js'></script>
<script src = 'jquery.form.js'></script>
<link href="galery_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
     <div align = 'center' class = 'header'>
        |<a id = 'new_photo' class = 'link' href = 'javascript: void(0);'>Add photo</a>|
	 </div>
    
     <div id = 'album_list'>
        <?php ShowPhoto(); ?>
     </div>
     <div id = 'register_popup'>
      <form name = 'addPhotoForm'  enctype = 'multipart/form-data' action="newPhoto.php" method = 'POST'>
         <div align = 'center'>Add new photo</div>
         <div align = 'center'><a id = 'close_popup' class = 'link' href = 'javascript: void(0);'>Close</a></div>
         <div align = 'center'><input type = 'file' id = 'file' name = 'userfile'></div>
         <div align = 'center'>Description</div>
         <div align = 'center'><textarea id = 'description' name = 'photo_description' rows='3' cols='45' name='text'></textarea></div>
         <div align = 'center' id = 'out'></div>
         <div align = 'center'><a id = 'ok_link' class = 'link' href = 'javascript: void(0);'>Ok</a></div>
         <div align = 'center' id = 'status'></div>
      </form>
    </div>
    <div id = 'photo_preview'>
       <div align = 'center'><a id = 'close_photo_preview' class = 'link' href = 'javascript: void(0);'>Close</a></div>
       <div id = 'res'></div>
    </div>
    <!--dark background-->
    <div  style="filter: alpha(opacity=50);" id = 'main'>
    </div>
	<div id = 'show_photo'>
	</div>
</body>
</html>
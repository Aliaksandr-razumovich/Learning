<?php
   $db = mysql_connect("localhost", "readge", "k5em-h4gy");
   $db_select = mysql_select_db("galery", $db);
   if(!$db || !$db_select){
     $message = 'There are some problems with connection to database';
   } 
?>
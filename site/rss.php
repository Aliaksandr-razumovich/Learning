<?php
   include("main_class.php");
   $rss = new RSSReader();
   echo $rss -> get_news("news.php");
   
?>
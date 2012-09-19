<?php

Class text_field{
   var $field;
   var $message;
   
   function check_not_blank($field){
      if(!preg_match("/^[a-z0-9]$/",$field)){
	     $message = "The field should contain only characters and numbers";
		 return $message;
	  }
   }
}


class RSSReader {
    var $url;
    
	function get_news($url){
	   $rss = simplexml_load_file($url); 
	   foreach ($rss->channel->item as $item) {
          echo '<div id = "news_title">'.$item->title.'</div>';       //выводим на печать заголовок статьи 
          echo $item->description;        //выводим на печать текст статьи
		  echo "<a href = '".$item -> link."'>Link</a><br><br>";
       }
	}
}

?>
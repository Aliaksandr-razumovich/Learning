<?php
//This function is searching requested data in all files of all directories

 //function SearchData($path){
      
 	//Getting data from the text field
 	//$expression = $_POST['expression'];  

 	//Getting all elements in a directory 
    $path = $_POST['url'];	
 	$element = @array_splice(scandir($path), 2);
    $data = "";	
   //Checking each element in the loop
   for($i = 0; $i < count($element); $i++){
 		$url =$path.$element[$i];
		if(is_dir($url)){
	      $data .= "<div>
				      <img src = 'ico/folder.jpg'>
					  <a href = 'javascript: void(0);'>".$element[$i]."</a>
				  </div>";
		}else{
		    $data .= "<div>
			        <div>
			          <a href = 'javascript: void(0);'>".$element[$i]."</a>
				    </div>
				  </div>";
		}
   }
echo $data;   
 //}
//SearchData($path);
?> 
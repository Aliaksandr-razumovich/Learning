<?php
//Check that 'new.xml' file exists
if(file_exists('new.xml')){
   importXML();
}

//The following code gets data from 'new.xml' file and puts it to the fields
function importXML(){
   $xmlDoc = new DOMDocument(); 
   $xmlDoc->load( 'new.xml' ); 
   
   //Get <users> tag
   $searchNode = $xmlDoc->getElementsByTagName( "users" ); 
   foreach( $searchNode as $searchNode ) 
   { 
       //Get <name> tag 
       $xmlName = $searchNode->getElementsByTagName( "name" ); 
       $name = $xmlName->item(0)->nodeValue;

       //Get <lastname> tag	   
       $xmlLastName = $searchNode -> getElementsByTagName( "lastname" );
       $last_name = $xmlLastName -> item(0)->nodeValue;

       //Get <age> tag	   
	   $xmlAge = $searchNode -> getElementsByTagName( "age" );
       $age = $xmlAge -> item(0) -> nodeValue; 
    
       //Creating array from the XML data

	   $result[0] = $name;
	   $result[1] = $last_name;
	   $result[2] = $age;
	   $result = implode(';', $result);
	   echo $result;
	  
   }
}
?>
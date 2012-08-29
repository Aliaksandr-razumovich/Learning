<?php
//The following code creates 'new.xml' file and writes in it the data from the form
   
   $message;
   $name      = $_POST['name'];
   $last_name = $_POST['last_name'];
   $age       = $_POST['age']; 
   
//Checking 'name' field. Allowed values - only string    
   if(!preg_match('/[a-z-]\S/', $name)){
      echo $message = '"Name" must contain only characters<br>';
   }

//Checking 'last name' field. Allowed values - only string  
   if(!preg_match('/[a-z-]\S/', $last_name)){
      echo $message = '"Last name" must contain only characters<br>';
   }

//Checking 'age' field. Allowed values - only numbers   
   if(!preg_match('/[0-9]+\S/', $age)){
      echo $message = '"Age" must contain only numbers<br>';
   }
//If all data is correct - do export   
   if($message == NULL){
      export();
   }
 
//The function for export XML 
function export(){   
   global $name, $last_name, $age, $message;
   $xmlDoc = new DOMDocument();
   $root = $xmlDoc->appendChild($xmlDoc->createElement('users'));
   $root->appendChild($xmlDoc->createElement('name', $name));
   $root->appendChild($xmlDoc->createElement('lastname', $last_name));
   $root->appendChild($xmlDoc->createElement('age', $age));
   
   if($xmlDoc ->save('new.xml')){
      echo $message = 'XML file is created';
   }
}
?>
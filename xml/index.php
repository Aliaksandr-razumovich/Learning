<html>
   <head>
      <title>User data</title>
	  <script src = '\xml\js\jquery.js'></script>
	  <script src = '\xml\js\script.js'></script>
   </head>
   <body>
       <div id = 'message'></div>
      <form name = 'form1' method = 'post' action = 'export_data.php'>
	     <div>Name</div>
		 <div><input type = 'text' name = 'name' id = 'name'></div>
		 <div>Last name</div>
		 <div><input type = 'text' name = 'last_name' id = 'last_name'></div>
		 <div>Age</div>
		 <div><input type = 'text' name = 'age' id = 'age'></div>
		 <div><input type = 'submit' value = 'submit'></div>
		 <div><input type = 'button' id = 'button1' value = 'Export data to XML'></div>
		 <div><input type = 'button' id = 'button2' value = 'Import data from XML'></div>
	  </form>
   </body>
</html>   
$(document).ready(function(){
  $('#button1').click(function(){
     ShowMessage();
  });
  
   $('#button2').click(function(){
     PutData();
  });
});

//The function show message according the result in 'export.php' script 
function ShowMessage(){
  var name = $('#name').val();
  var last_name = $('#last_name').val();
  var age = $('#age').val();
  $.ajax({
          type: "POST",
		  url:  "export_data.php",
		  data: {name:name, 
		         last_name:last_name, 
				 age:age
				},
		  success: function(data){
		             $('#message').html(data);
				   }		  
         });  
}	

//The function is fill the fields with the data from 'new.xml' file
function PutData(){
  var name = $('#name').val();
  var last_name = $('#last_name').val();
  var age = $('#age').val();
  $.ajax({
          type: "POST",
		  url:  "import_data.php",
          success: function(data){
		                   if(data){
		                     data = data.split(';');
		                     $('#name').val(data[0]);
					         $('#last_name').val(data[1]);
					         $('#age').val(data[2]);
						   }else {
						     $('#message').html('File does not exists');
						   }
					}		  
         });  
}		

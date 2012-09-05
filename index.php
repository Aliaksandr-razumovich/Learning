<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>galery</title>
<script src = 'jquery.js'></script>
<script src = 'popup.js'></script>
<script src = 'request.js'></script>
<script src = 'md5.js'></script>
<link href="main_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class = 'labelPic'>
       <a href ''><img src = '001.jpg'></a>
    </div><br>
    <div id = 'lform'>
      <form name = 'login_form' method = 'POST' action = 'checkLogin.php'>
        <div>
           <label class = 'titles'>Login</label>
           <input name = 'login' type = 'text' id = 'login_id'>&nbsp
           <label class = 'titles'>Password</label>
           <input name = 'password' type = 'text' id = 'password_id'>&nbsp
           <a id = 'login_link' class = 'link' href = 'javascript: void(0);'>Log In</a>&nbsp
           <a id = 'register_link' class = 'link' href = 'javascript: void(0);'>Registration</a>
        </div>
      </form>
    </div> 
    <!--Register popup-->
    <div id = 'register_popup'>
      <form name = 'regform'>
         <div align = 'center'>Registration of the user</div>
         <div align = 'center'><a id = 'close_popup' class = 'link' href = 'javascript: void(0);'>Close</a></div>
         <div align = 'center'>Login</div>
         <div align = 'center'><input type = 'text' id = 'reg_login_id' name = 'log' ></div>
         <div align = 'center'>Password</div>
         <div align = 'center'><input type = 'text' id = 'reg_password_id' name = 'pas' ></div>
		 <div align = 'center'>Name</div>
         <div align = 'center'><input type = 'text' id = 'reg_name_id' name = 'name' ></div>
		 <div align = 'center'>Last Name</div>
         <div align = 'center'><input type = 'text' id = 'reg_lastname_id' name = 'lastname' ></div>
         <div align = 'center'><a id = 'reg_link' class = 'link' href = 'javascript: void(0);'>Register</a></div>
         <div align = 'center' id = 'message'></div>
      </form>
    </div>
    <!--dark background-->
    <div  style="filter: alpha(opacity=50);" id = 'main'>
    </div>
</body>
</html>

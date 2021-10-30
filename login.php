<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
<style type="text/css">
/*CSS*/ 
#body-color{ background-color:#BFBAE5; } 

#Sign-In{
    margin-top:50px; margin-bottom:150px; 
    margin-right:150px; margin-left:450px; 
    border:3px solid #a1a1a1; padding:9px 35px;
    background:#0C7FB4; width:400px;
    border-radius:20px; box-shadow: 7px 7px 6px; }
#button{ 
   border-radius:10px; width:100px;
   height:40px; background:#1f568b;
   color:#f1f1f1;
   font-weight:bold; font-size:15px;
margin-left:50px; 
}
#button:hover{ 
   height:40px; background: #f1f1f1;
		color:#333;
}
#button1{ 
   border-radius:10px; width:166px;
   height:40px; background:#1f568b;
   color:#f1f1f1;
   font-weight:bold; font-size:15px;
	margin-left:25px;
}
#button1:hover{ 
   height:40px; background: #f1f1f1;
		color:#333;
}
#button2{ 
   border-radius:10px; width:166px;
   height:40px; background:#1f568b;
   color:#f1f1f1;
   font-weight:bold; font-size:15px;
	margin-left:213px;
	margin-top:-41px;
}
#button2:hover{ 
   height:40px; background: #f1f1f1;
		color:#333;
}
</style>
</head>
<body>
</body>
<body id="body-color"> 
    <div id="Sign-In"> 
	<form method="POST" action="login.php">
	<fieldset>
	    <legend style="font-weight:bold; font-size:15px">Form đăng nhập</legend>
	    	<table>
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" value='value' size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input id="button" name="btn_submit" type="submit" value="Đăng nhập"></td>
				
	    		</tr>
	    	</table>
  </fieldset>
  </form>
<a href="register.php" style='margin-left:60px;color: white;font-weight: bold;'>Đăng ký</a>
<a href="forget.php" style='width:166px;margin-left:25px;color: white;font-weight: bold;'>Quên mật khẩu?</a>
</div>
</body>
</html>
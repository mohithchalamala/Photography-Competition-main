<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="stylesheet" href="../css/default.css">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/default.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif">
<div class="topnav">
  <a href="usersignup.php">Sign Up</a>
  <a href="userlogin.php">Login</a>
  <a href="main.php">Winner</a>
  <a href="main.php">About Us</a>
	<a class="active" href="main.php">Home</a>
	<p style="float: left;">PIXELS</p>

</div>
<br><br><br>


<div class="logintitle">
<h2 id="Login">Admin Login</h2><br/><br/>
<form name="login" method="POST" action="admin.php">
	Admin ID:
	<input type="text" name="adminName" size="20" maxlength="8" required/><br/><br/>
	Password:	
	<input type="password" name="adminPassword" size="20" maxlength="16" required/><br/><br/>
	<br>
	<input style="width:50%;border-radius:15px;background-color:#4CAF50;color:white" type="submit" value="Log In as Admin">
	<br>
</form><br/><br/>

<a href="userlogin.php">  
	<button type="button" class="btn btn-primary">Back</button>  
</a><br/><br/>
</div><br/><br/><br>

<!-- footer -->
<div class="footer" style="font-size:14px" >
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left;font-size:14px">
	<div style="padding-top:20px">
				<img class="logo" style="width:120px; height:100px" src="https://t3.ftcdn.net/jpg/05/00/09/00/360_F_500090048_Vwr47TpMANq2xG8YHmOo4mFtw0PPkXAt.jpg"></br></br>
			</div>
			<div>
            <p><b>PIXELS</b></p>
            SRM university, </br>
            neerukonda,</br>
            guntur,andhrapradesh</br>
          </div></br>
</div></br>

</body>

</html>
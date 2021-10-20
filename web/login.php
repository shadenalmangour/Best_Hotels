<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['name'])){
header("location: controlpanel.php"); // Redirecting To Profile Page
}
?> 

<!DOCTYPE>
	<html>
		<head>
			<meta charset ="utf-8">
			<title>Login</title>
			<link rel="stylesheet" href="C:\Users\user\Desktop\webProject\css\style.css" type="text/css"/> 
			
			
		</head>
		<body>
			<img src ="C:\Users\user\Desktop\webProject\image\logo1.png" width ="200" height="200" alt="logo" /> 
				<div class="menu">
					<div class="dropdown">                                                                                   
					<span><img src ="C:\Users\user\Desktop\webProject\image\icon3.png" width ="40" height="40" alt="icon" /></span> 
						<div class="dropdown-content">
							<a href="index.html">Home</a>
							<a href="about.html">about us</a>
							<a href="hotel1.html">Novotel hotel</a>
							<a href="hotel2.html">Ascott Rafal hotel</a>
						</div>
					</div> 
				</div>		
				<div class="right">
					<form action=""  method="post" >
					<input type="search" name="search" placeholder="search"> 
					</form>
				</div> 
				<div class="box2">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a> ></li>
						<li><a href="login.html">Admin login</a> </li>
					</ul>
				</div>
				<center>
					<div>
						<div class="test1">
							<fieldset>
								<legend >log-in</legend>
								<div align="center">
									<label><b>Username</b><br></label>
									<input type="text" placeholder="Enter email or Username" name="uname" class="l" required>
									<br><br>
									<label><b>Password</b><br></label>
									<input type="password" placeholder="Enter your Password" name="psw" class="l" required>
									<br><br>
									<a href="control.html"><input type="submit" value="Login"></a>
								</div>
							</fieldset>
						</div>
					</div>
				</center>
			
					<div class="box3">
						<center>
							<footer>
								<p>Contact us<img src="C:\Users\user\Desktop\webProject\image\icon4.png"width ="30" height="30"/> 
								<a href="mailto:saraalrfa3i@gmail.com"><img src="C:\Users\user\Desktop\webProject\image\icon6.png"width ="30" height="30"/></a>    <!-- الايقونات -->
								<img src="C:\Users\user\Desktop\webProject\image\icon4.png" width ="30" height="30"/>
								<a href="www.twitter.com"><img src="C:\Users\user\Desktop\webProject\image\icon5.png"width ="30" height="30"/></a></p>
							</footer>
						</center>
					</div>
		</body>
</html>
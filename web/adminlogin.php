<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
      
      $sql = "SELECT id FROM admin WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $active = $row['active'];
$count = mysqli_num_rows($result);

	// $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
	// $mypassword = $_POST['psw'];
	// $result = mysqli_query($conn,"SELECT id FROM admin WHERE name = '$myusername' and password = '$mypassword'");
	// $count = mysqli_num_rows($result);
 
      // If result matched $myusername and $mypassword, table row must be 1 row
		
    //   if($count == 1) {
		if(isset($count)==1) {
  
         $_SESSION['login_user'] = $myusername;
         
         header("location: control.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE>
	<html>
		<head>
			<meta charset ="utf-8">
			<title>Login</title>
			<link rel="stylesheet" href="..\..\phase3\css\style.css" type="text/css"/> 
			
			
		</head>
		<body>
			<img src ="..\..\phase3\image\logo1.png" width ="200" height="200" alt="logo" /> 
				<div class="menu">
					<div class="dropdown">                                                                                   
					<span><img src ="..\..\phase3\image\icon3.png" width ="40" height="40" alt="icon" /></span> 
						<div class="dropdown-content">
							<a href="index.php">Home</a>
							<a href="about.html">about us</a>
			    	<!--	<a href="hotel2.php">Novotel hotel</a> -->
					<!--	<a href="hotel2.php">Ascott Rafal hotel</a> -->
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
						<li><a href="index.php">Home</a> ></li>
						<li><a href="adminlogin.php">Admin login</a> </li>
					</ul>
				</div>
				<center>
					<div>
						<div class="test1">
							<fieldset>
								<legend >log-in</legend>
								<div align="center">
								    <form method="post" action="" autocomplete="on" >
									<label><b>Username</b><br></label>
									<input type="text" placeholder="Enter email or Username" name="uname" class="l" required>
									<br><br>
									<label><b>Password</b><br></label>
									<input type="password" placeholder="Enter your Password" name="psw" class="l" required>
									<br><br>
									<input type="submit" name="submit" value="Login">
									</form>
								</div>
							</fieldset>
						</div>
					</div>
				</center>
			
					<div class="box3">
						<center>
							<footer>
								<p>Contact us<img src="..\..\phase3\image\icon4.png"width ="30" height="30"/> 
								<a href="mailto:saraalrfa3i@gmail.com"><img src="..\..\phase3\image\icon6.png"width ="30" height="30"/></a>    <!-- الايقونات -->
								<img src="..\..\phase3\image\icon4.png" width ="30" height="30"/>
								<a href="www.twitter.com"><img src="..\..\phase3\image\icon5.png"width ="30" height="30"/></a></p>
							</footer>
						</center>
					</div>
		</body>
</html>
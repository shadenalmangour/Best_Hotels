
<?php


include('session.php');
 ?>
 
<!DOCTYPE>
<html>
	<head>
		<meta charset ="utf-8">
		<title>Control panel</title>
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
					<a href="add.html">Add hotels</a>
					<a href="delete.php">Delete hotels</a>
					<a href="edit.php">Edit hotels</a>
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
				<li><a href="adminlogin.php">Admin login</a> ></li>
				<li><a href="control.php">Control panel</a> </li>
			</ul>
		</div>
		<div>
			<div style="height:20% "class="test2" >
				<div align="center">
					<h4>Control panel</h4>
					<a href="add.html">Add item page</a><img src="..\..\phase3\image\icon4.png" width ="30" height="30">
					<a href="Delete.php">Delete item page</a><img src="..\..\phase3\image\icon4.png" width ="30" height="30">
					<a href="edit.php">Edit item page</a> <br>
					<h2><button><a href = "logout.php">Sign Out</a></h2></button>
				</div>
			</div>
		</div>
		<center>
			<div class="box3">
				<footer>
					<p>Contact us<img src="..\..\phase3\image\icon4.png"width ="30" height="30"/> 
					<a href="mailto:saraalrfa3i@gmail.com"><img src="..\..\phase3\image\icon6.png"width ="30" height="30"/></a>    <!-- الايقونات -->
					<img src="..\..\phase3\image\icon4.png" width ="30" height="30"/>
					<a href="www.twitter.com"><img src="..\..\phase3\image\icon5.png"width ="30" height="30"/></a></p>
				</footer>
			</div>
		</center>
	</body>
</html>
<!DOCTYPE>
<html>
	<head>
		<meta charset ="utf-8">
		<title>Edit Hotels</title>
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
					<a href="control.php">Control panel</a>
					<a href="add.html">Add hotels</a>
					<a href="delete.php">Delete hotels</a>
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
				<li><a href="control.php">Control panel</a> ></li>
				<li><a href="edit.php">Edit hotels</a></li>
			</ul>
		</div>				
		<br><br>
		<center>
			<div>
				<div class="test1">
				
					<h4>Edit Item</h4>
					 <form method="post" action="editform.php" autocomplete="on" enctype="multipart/form-data">
					 <p><label> select name of hotels you want to edit:
								 <select name ="rating">
					 <?php

								$servername="localhost";
								$uesrname="root";
								$password="";
								$DB_DATABASE="test";

								$conn=mysqli_connect($servername , $uesrname ,$password , $DB_DATABASE);

								$query= mysqli_query($conn,"SELECT * FROM  hotels");

							
								while($row=mysqli_fetch_array($query)){
									$name = $row['name_h'];
                                
								?>
								 
                    
								 <option> <?php echo $name ?> </option>
							
						 
								<?php
                                     }"<br><br>";
								?>
								 <br><br>
								<p><input type="submit" name="edit_h" value="edit"  >
								 <input type="reset" name="clear" value="Clear" > </p>
								  </form>
								
								
							<!--<input type="radio" name="hotel" value="h1">Novotel hotel<br>
							<input type="radio" name="hotel" value="h1">Ascott Rafal hotel<br><br>
							<input type="submit" value="Edit">
						</form>-->
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
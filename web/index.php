<!DOCTYPE>

<html>
		<head>
			<meta charset ="utf-8">
			<title>Best Hotels</title>
			<link rel="stylesheet" href="..\..\phase3\css\style.css" type="text/css"/> 
		</head>
	<body>
		<img src ="..\..\phase3\image\logo1.png" width ="200" height="200" alt="logo" /> 
			<div class="menu">
				<div class="dropdown">                                                                                   
					<span><img src ="..\..\phase3\image\icon3.png" width ="40" height="40" alt="icon" /></span> 
					<div class="dropdown-content">
						<a href="about.html">about us</a>
						<a href="adminlogin.php">Admin login</a>
					<!-- <a href="hotel2.php">Novotel hotel</a> -->
					<!-- <a href="hotel2.php">Ascott Rafal hotel</a> -->
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
					<li><a href="index.php">Home</a></li> 
				</ul>
			</div>
			<div>
				<div class="test2">
					<center>
						<table>
							<tbody>
								
								
								
								<?php

								$servername="localhost";
								$uesrname="root";
								$password="";
								$DB_DATABASE="test";

								$conn=mysqli_connect($servername , $uesrname ,$password , $DB_DATABASE);

								$query= mysqli_query($conn,"SELECT * FROM  hotels");

						
								while($row=mysqli_fetch_array($query)){
									$image=$row['logo_h'];

								echo  "<tr>"; 
								echo  "<td><a href='hotel2.php?id={$row['id_h']}'><img src='data:image/png;base64,".base64_encode($image)."' width='150' height='150'></a></td>";
								echo  "<td><a href='hotel2.php?id={$row['id_h']}' style='text-decoration: none ; color : black'  class='none'><h3>
								     ".$row['name_h']."</h3></a></td>";
								echo  "</tr>"; 
								
								}

								?>
	
									
							</tbody>
						</table>
					</center>
				</div>
			</div>
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
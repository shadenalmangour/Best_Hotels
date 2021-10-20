<?php

$servername="localhost";
$uesrname="root";
$password="";
$DB_DATABASE="test";

$conn=mysqli_connect($servername , $uesrname ,$password , $DB_DATABASE);

	 
	 
	 $query= mysqli_query($conn,"SELECT * FROM hotels ");
	 $result=mysqli_num_rows($query);
	 
	 if(isset($_POST['delete'])){
		 $checkr=$_POST['checkbox'];
		 foreach($checkr as $id){
			 mysqli_query($conn,"Delete from hotels where id_h=".$id);
			 header("refresh:1; url=delete.php");
		 
		 }
		 
		 
		 
	 }
	?>
	<html>
	<head>
		<meta charset ="utf-8">
		<title>Delete Hotels</title>
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
					<li><a href="control.php">Control panel</a> ></li>
					<li><a href="delete.php">Delete hotels</a></li>
				</ul>
			</div>
			<br><br>
			
			
			
			<center>
				<div>
					<div class="test1">
						<h4>Delete hotels</h4>
						<form method="post">
						<table>
						
						<?php
						while($row = mysqli_fetch_array($query)){
						echo "<tr>";
						echo "<td><input type='checkbox' name='checkbox[]' value='".$row['id_h']."'></td><td>".$row['name_h']."</td>";
                        echo "</tr>";
						}
					
						?>
                        </table>
						<p><label><input type = "checkbox" value="phonecall" required>I'm sure to make these delet</label></p>
						<input type="submit" name="delete" id="delete" value="DELETE ">
						</form>


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
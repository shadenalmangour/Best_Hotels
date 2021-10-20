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
						<?php
							$conn = mysqli_connect("localhost","root","","test");
						  
							if(isset($_POST['edit_h'])){

									$name_h = $_POST['rating'];
									$select_posts = "select * from hotels
									where name_h like '$name_h'";


							if($run_posts = mysqli_query($conn,$select_posts)){

							while($row=mysqli_fetch_array($run_posts)){
								$name = $row['name_h'];
								$logo_h = $row['logo_h'];
								$description_h = $row['description_h'];
								$price = $row['price'];
								$Dprice = $row['Dprice'];
							
							
					 ?>
 
<h1>Edit hotels</h1>

<form method="post" action="Edit1.php" autocomplete="on" enctype="multipart/form-data">


<p><?php echo "<img src='data:image/png;base64,".base64_encode($logo_h)."' width='150' height='150'>" ?></p>
 
 <p><label> Logo : <input type="file"  name="Logo" id="Logo" value="<?php $logo_h;?>" ></label> </p>

<p><label>Hotel's name:
<input type = "text" name ="name" placeholder = "hotels name" value="<?php echo $name;?>" /></label> </p>

<p><label>Hotel's description:
<input type = "text" name ="Information" placeholder = "hotel's description"  value="<?php echo $description_h;?>" /></label> </p>

<p><label>price:
<input type = "text" name ="price" placeholder = "price" value="<?php echo $price;?>" /></label> </p>

<p><label>The price After Discount :
<input type = "text" name ="Dprice" placeholder = "The price After Discount"  value="<?php echo $Dprice;?>" /></label> </p>


<?php
        }
    }
}

?>

<p><label><input type = "checkbox" value="phonecall" required>I'm sure to make these edits.</label></p>
<input type="submit"  name="Edit" value="Edit" />
<input type="reset" value = "Clear" />
</form>


				</div>
			</div>
		</center>
		<div class="box3">
			<center>
				<footer>
					<p>Contact us<img src="..\..\phase3\image\icon4.png"width ="30" height="30"/> 
					<a href="mailto:saraalrfa3i@gmail.com"><img src="..\..\phase3\image\icon6.png"width ="30" height="30"/></a><!-- الايقونات -->
					<img src="..\..\phase3\image\icon4.png" width ="30" height="30"/>
					<a href="www.twitter.com"><img src="..\..\phase3\image\icon5.png"width ="30" height="30"/></a></p>
				</footer>
			</center>
		</div>
	</body>
</html>
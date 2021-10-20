<?php
				$conn = mysqli_connect("localhost","root","","test");


				if(isset($_GET['id']))
                 $page_id = $_GET['id'];


								$query= mysqli_query($conn,"SELECT * FROM  hotels where id_h='$page_id' ");

							
								while($row=mysqli_fetch_array($query)){
									$name = $row['name_h'];
									$image =  $row['logo_h'];
									$information = $row['description_h'];
									$price = $row['price'];
									$Dprice = $row['Dprice'];
									
								}
				
			

			
				

		?>

<!DOCTYPE>
<html>
	<head>
		<meta charset ="utf-8">
		<title> <?php echo $name ?></title>
		<link rel="stylesheet" href="..\..\phase3\css\style.css" type="text/css"/> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<style>
				.checked {color: orange;}
			</style>
	</head>
	<body>
	
	<img src ="..\..\phase3\image\logo1.png" width ="200" height="200" alt="logo" /> 
		<div class="menu">
			<div class="dropdown">                                                                                   
			<span><img src ="..\..\phase3\image\icon3.png" width ="40" height="40" alt="icon" /></span> 
				<div class="dropdown-content">
					<a href="index.php">Home</a>
					<a href="about.html">about us</a>
					<a href="adminlogin.php">Admin login</a>

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
				<li><a href="hotel2.php"><?php echo $name ?></a></li>
			</ul>
		</div>
		<div>
			<div class="test2">
			<fieldset>
			<table>
				<thead>
					<tr>
						<th><?php echo '<img src="data:image/png;base64,'.base64_encode($image).'">' ?></th>
						<th><p><h2><?php echo $name ?> </h2><br>
						<div style="text-align: left">
							<?php echo $information ?>
						</div>
						</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>
							<p> <?php

								

								
								$query= mysqli_query($conn,"SELECT raiting FROM  review ");

							
								while($row=mysqli_fetch_array($query)){
									$raiting = $row['raiting'];
								}
									
										
									if ($raiting=='1'){
										
									echo"<span class='fa fa-star checked'></span>
										 <span class='fa fa-star '></span>
										 <span class='fa fa-star '></span>
										 <span class='fa fa-star '></span>
										 <span class='fa fa-star'></span><br>";
									}		
									elseif ($raiting=='2'){
										
										echo"<span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span>
										     <span class='fa fa-star '></span>
										     <span class='fa fa-star '></span>
										     <span class='fa fa-star'></span><br>";
									}
									
									
									elseif ($raiting=='3'){
										
										echo"<span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span>
										     <span class='fa fa-star '></span>
										     <span class='fa fa-star'></span><br>";
									}
									
									elseif ($raiting=='4'){
										
										echo"<span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span>
									     	 <span class='fa fa-star'></span><br>";
									}
								
									elseif ($raiting=='5'){
										
										echo"<span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span>
										     <span class='fa fa-star checked'></span><br>";
									}
									
									
					                
								
                                
								?>
								 
							    
								<div style ="text-decoration : line-through; color :red;"><?php echo $Dprice ?></div>
								<div><?php echo $price ?></div>
						    </p>
						</th>
					</tr>
				</tfoot>
			</table>
			</fieldset>
			</div>
		</div>
		<div class="box1">
		<form method="post" action="comments.php">
		<input type="hidden" name="page_id" id="page_id" value="<?php echo $page_id ?>" >
			<p><label><h3>Comments:</h3><br><img src="..\..\phase3\image\pic.png" width="40" height="40" alt="pic" />
			Enter your name: <br><input type="text" placeholder="Enter your name" name="Name"/><br><br>
			Enter your rating: <br><input type="number" min="1" max="5" placeholder="Enter your rating" name="raiting"/><br><br>
			<textarea name ="body" rows="6" cols="80" placeholder="Write your comment here"></textarea><br>
			<br><input type="submit" name="commentSubmit" value="Send"/></label></p>
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
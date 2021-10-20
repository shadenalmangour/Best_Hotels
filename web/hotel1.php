<!DOCTYPE>
<html>
	<head>
		<meta charset ="utf-8">
		<title>Novotel hotel</title>
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
				<li><a href="hotel1.html">Novotel hotel</a></li>
			</ul>
		</div>
		<div>
		<?php
				$conn = mysqli_connect("localhost","root","","test");


				if(isset($_GET['id'])){

				$page_id = $_GET['id'];


				$select_posts = "select * from hotels where id_h = '$page_id'";
				//ordering

				if($run_posts = mysqli_query($conn,$select_posts)){

				while($row=mysqli_fetch_array($run_posts)){
				$name = $row['name_h'];
				$logo_h = $row['logo_h'];
				$description_h = $row['description_h'];
				

		?>
		<div class="test2">
			<fieldset>
				<table>
					<thead>
						<tr>
							<th><img src="..\..\phase3\image\<?php echo 'data:image/png;base64,".base64_encode($row["logo_h"])."'?>" width="200" height="300" alt="<?php echo $name ?>" /></th>
							<th><h2><?php echo $name ?></h2><br>
							
								<div style="text-align: left">
									<ul>
										<li><h3>The most popular services<h3></li>
											<ul>
												<li>Free Wi-Fi</li>
												<li>Free parking</li>
												<li>Swimming pool</li>
												<li>Fitness center</li>
												<li>Airport shuttle</li>
												<li>Family rooms</li>
											</ul><br><br>
										<li><h3>Room Type<h3></li>
											<ul>
												<li>Superior room with 1 queen-size bed and sofa</li>
												<li>Junior suite with 1 queen-size bed and sofa</li>
												<li>Deluxe room with 1 queen-size bed and sofa</li>
												<li>Superior suite with 1 Double bed & living room with sofa bed</li>
												<li>Royal suite with double bed</li>
											</ul>
									</ul>
								</div>
							</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>
								<p>
								
									<div style ="text-decoration : line-through; color :red;">$500</div>
									<div>$250</div>
								</p>
							</th>
						</tr>
					</tfoot>
				</table>
			</fieldset>
			</div>
		</div>
		
		
		<div class="box1">
		<form method='POST' action='".setComments($conn)."'>
			<p><label><h3>Comments:</h3><br><img src="..\..\phase3\image\pic.png" width="40" height="40" alt="pic" />
			Enter your name: <br><input type="text" placeholder="Enter your name" name="cname"/><br><br>
			<textarea name ="Comments" rows="6" cols="80" placeholder="Write your comment here"></textarea><br>
			<input type='submit' name='commentSubmit' value='Submit'></label>
            <label><input type='reset' value='Clear'> </label></p>
			</form>
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
		
<?php

}
}
				}

?>
	</body>
</html>  
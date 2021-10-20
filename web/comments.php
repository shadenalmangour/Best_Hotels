<?php 

$servername="localhost";
$uesrname="root";
$password="";
$DB_DATABASE="test";

$conn=mysqli_connect($servername , $uesrname ,$password , $DB_DATABASE);




	if(isset($_POST['commentSubmit'])){
		$raiting = $_POST['raiting'];
		$Name = $_POST['Name'];
		$body = $_POST['body'];
		$page_id = $_POST['page_id'];
      


		$sql= "INSERT INTO review (raiting , Name , body ,item_id) VALUES ( '$raiting' , '$Name' , '$body' , '$page_id' )" ;
		$result=$conn->query($sql);
		header("location:hotel2.php?id=$page_id"); 
	}



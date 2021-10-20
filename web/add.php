<?php
$conn = mysqli_connect("localhost","root","","test");

if(isset($_POST['Add'])){
    $post_name = $_POST['Name'];
    $image =  $_POST['Logo'];
	$information = $_POST['Description'];
	$price = $_POST['price'];
    $Dprice =  $_POST['Dprice'];
	

	if($post_name=='' or $information==''){

	echo "<script>alert(' All fields must be completed')</script>";

	exit();
	}



	  $insert_query = "insert into hotels (name_h, description_h, logo_h ,price, Dprice) values ('$post_name', '$information', '$image','$price' ,'$Dprice')";

	if(mysqli_query($conn,$insert_query)){

	echo "<script>alert('done add new hotel')</script>";

    echo "<script>window.open('add.html','_self')</script>";



	}

}




?>

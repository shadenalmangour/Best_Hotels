<?php
$conn = mysqli_connect("localhost","root","","test");



if(isset($_POST['Edit'])){
    $post_name = $_POST['name'];
    $s_n = $_POST['name'];
	$information = $_POST['Information'];
	$price = $_POST['price'];
    $Dprice =  $_POST['Dprice'];
	$image = $_POST['Logo'];
	
	
	$c_image= $_FILES['Logo']['name'];
    $c_image_temp=$_FILES['Logo']['tmp_name'];

  //  move_uploaded_file($c_image_temp , "logo_h/$c_image");
	
	 
	$insert_query = "update hotels set
	  name_h= '$post_name', description_h = '$information', logo_h='$c_image' , price = '$price' , Dprice = '$Dprice'
      WHERE name_h like '$s_n'";



	if(mysqli_query($conn,$insert_query)){

	echo "<script>alert('done edit hotels  ')</script>";
				

    echo "<script>window.open('edit.php','_self')</script>";
					 //return into edit page.


	
  }
}
	


?>

<!--create.php-->


<?php 

require 'db.php';


if(isset($_POST['submit'])){

	$name=$_POST['username'];
	$cn=$_POST['CN'];
	$address=$_POST['address'];
	$image=$_FILES['image']['name'];

	$query= "INSERT INTO employeepersonaldetails(Image,Name,contact,Address) VALUES ('$image','$name','$cn','$address')";
	$run= mysqli_query($connection,$query);



	 if($run){
			
			header('Location:create.php');
		}

		else{
			echo "error";
		}
		


}

 ?>
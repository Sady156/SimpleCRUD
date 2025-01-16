<!-- edit.php-->
<?php 
require 'db.php';
if(isset($_POST['submit'])){
	$name=$_POST['username'];
	$cn=$_POST['CN'];
	$address=$_POST['address'];
	$image=$_FILES['image']['name'];
	$id= $_POST['id'];

	$query = "UPDATE employeepersonaldetails SET Image='$image', Name='$name', contact='$cn', Address='$address' WHERE ID='$id'";			
	$run= mysqli_query($connection,$query);

	 if($run){			
			header('Location:index.php');
		}
		else{
			echo "error";
		}
		
}

 ?>
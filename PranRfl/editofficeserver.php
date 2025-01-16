<!--editoffice-->
<?php 
require 'db.php';
if(isset($_POST['submit'])){
	$dept=$_POST['dept'];
	$desig=$_POST['desig'];
	$salary=$_POST['salary'];
	$id= $_POST['id'];
	$query = "UPDATE employeeofficedetalis SET Department='$dept', Designation='$desig', Salary='$salary' WHERE EmployeeID='$id'";			
	$run= mysqli_query($connection,$query);
	 if($run){
			header('Location:index.php');
		}

		else{
			echo "error";
		}
		


}

 ?>
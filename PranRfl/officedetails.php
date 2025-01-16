<!-- employee.php-->
<?php 
require 'db.php';
if(isset($_POST['Submit'])){
	$department=$_POST['dept'];
	$designation=$_POST['desig'];
	$salary=$_POST['salary'];
	$NID=$_POST['nid'];
	$EID= $_POST['eid'];
	$query1="INSERT INTO employeeofficedetalis(Department, Designation,Salary, NID,EmployeeID) 
			VALUES ('$department','$designation','$salary','$NID','$EID')";

	 $run1= mysqli_query($connection,$query1);
	 if($run1){		
			header('Location:employee.php');
		}
		else{
			echo "error";
		}

}

?>






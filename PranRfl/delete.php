<?php 

require 'db.php';


if(isset($_GET["ID"])){
	echo "string";

$id= $_GET["ID"];



$sql = "DELETE e FROM employeepersonaldetails e 
        INNER JOIN employeeofficedetalis o ON e.ID = o.EmployeeID 
        WHERE e.ID = $id";


$run= mysqli_query($connection,$sql);


 if($run){
			
			header('Location:index.php');
		}

		else{
			echo "error";
		}


}

?>


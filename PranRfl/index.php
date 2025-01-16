<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pran-Rfl</title>
	<link rel="stylesheet"  href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
	<div class="container my-5">
		<h2>List of employees</h2>
		<a class= 'btn btn-primary btn-sm'  href="create.php" role="button">Add Personal Details</a>
		<a class= 'btn btn-primary btn-sm'  href="employee.php" role="button">Add official Details</a>

		<a class= 'btn btn-primary btn-sm'  href="department.php" role="button">Department </a>

		<table>	
			<thead style="background-color:gray;">
				<tr>

					<th> Employee Image</th>
					<th> ID</th>
					<th> Name</th>
					<th> Contact No.</th>
					<th> Department</th>
					<th> Desigantion</th>
					<th> Salary</th>
					<th> Address</th>
					<th> NID</th>
					<th> Action</th>
	
				</tr>
				
			</thead>
			<tbody>
<?php 
require 'db.php';

$q= "SELECT * FROM employeepersonaldetails Left JOIN  employeeofficedetalis ON employeepersonaldetails.ID=employeeofficedetalis.EmployeeID
Group BY employeepersonaldetails.ID";
$result= mysqli_query($connection,$q);

$num=mysqli_num_rows($result);

if($num> 0){
foreach($result as $row){
?>

<tr>
	
	<td><img 
           src="data:image/jpeg,webp,jpg;base64,<?= base64_encode($row['Image']); ?>" 
           width="75" 
           height="75"
                    >
                      
	<td><?= $row['ID']; ?> </td>
	<td><?= $row['Name']; ?> </td>
	<td><?= $row['contact']; ?> </td>
	<td><?= $row['Department']; ?> </td>
	<td><?= $row['Designation']; ?> </td>
	<td><?= $row['Salary']; ?> </td>
	<td><?= $row['Address']; ?> </td>
	<td><?= $row['NID']; ?> </td>
	<td>
		<a class='btn btn-primary btn-sm' href="edit.php">Edit</a>
		<a class='btn btn-danger btn-sm' href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a>

		
	</td>

</tr>
</tbody>
<?php 
}
	}
 ?>
	</table>
	</div>

</body>
</html>
<!--offcedetails.php-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container my-5">
		<h2 align="center"> Employee Office Details</h2>
<form action="officedetails.php" method="POST">
	Employee Department: <input type="text" name="dept"><br><br>
	Designation: <input type="text" name="desig"><br><br>
	Salary: <input type="text" name="salary"><br><br>
	NID: <input type="text" name="nid"><br><br>
	Employee ID: <input type="text" name="eid"><br><br>
	<input type="submit" value="Submit" name="Submit" />

	<a class='btn btn-primary btn-sm' href="index.php">Go To Employee Table</a><br><br>
	<a class='btn btn-primary btn-sm' href="create.php">Add Employee personal Details</a>

</form>
</div>

</body>
</html>


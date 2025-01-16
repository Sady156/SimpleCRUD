
<!-- editserver.php -->

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
		<h2 align="center"> Edit Personal Details</h2>

	<form action="editserver.php" method="POST" enctype="multipart/form-data">
	Employee Name: <input type="text" name="username"><br><br>
	Contact Number: <input type="text" name="CN"><br><br>
	Address: <input type="text" name="address"><br><br>
	<input type="file" name="image"><br><br>
	ID: <input type="text" name="id"><br><br>
	<input type="submit" value="submit" name="submit" />

	<a class='btn btn-primary btn-sm' href="index.php">Go to employee tabe</a><br><br>
	<a class='btn btn-primary btn-sm' href="editoffice.php">Edit Office Details</a>
	</div>






</body>
</html>



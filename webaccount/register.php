<?php
include("./connection.php");
$query = mysqli_query($con, "INSERT INTO students (studID, lname, fname, MI,course,yearlevel) VALUES ('$_POST[studID]','$_POST[lname]','$_POST[fname]','$_POST[MI]','$_POST[course]','$_POST[yearlevel]')") or die('Connection Failed'. mysqli_connect_error());;
if (!$query) {
	echo "Registration Not Successful";
} else {
	echo "  ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .center{
            text-align: center;
			font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
	<h1 style="font-family: 'Courier New', Courier, monospace;">Registered Successfully</h1>
	<div class = "center">
        <br><br>
		<a href='login.php' class="btn btn-success">Login</a>	
		<br><br>		
		<a href='index.php' class="btn btn-success">Back</a>
        </div>
</body>

</html>
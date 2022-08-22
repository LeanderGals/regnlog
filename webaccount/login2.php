<?php
include("connection.php");
$query = mysqli_query($con,"SELECT studID, lname, userlevel FROM students WHERE studID='".$_POST['uname']."'") or  die('Connection Failed'. mysqli_connect_error());;

if($query)
{
	while($row = mysqli_fetch_array($query))
	{		
		if($row['lname'] == $_POST['pwd'])
		{
		
		// echo $row['user_level'];
			if($row['userlevel'] == "Admin")
			{
				header("Location:admin_dashboard.php");
			}
			else{
				header("Location:user_dashboard.php");
			}
		}
		else
		{
			echo "<script>alert('The username or password you have entered is incorrect!'); window.location.href='login.php'</script>";	
		}
	}
}

?>
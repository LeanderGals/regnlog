<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        h1{
            font-family: 'Courier New', Courier, monospace;
        }
        .required:after {
            content: " *";
            color: red;
        }
        .input{
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
        }
        .required{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <?php include("./connection.php") ?>
    <h1>Registration</h1>
   
    <div class=input>
        <form method="POST" action="register.php">
            
                <label class="required">ID:</label>
                <input type="text" placeholder="Enter Student ID" name="studID" required>
            
                <label class="required">Last Name:</label>
                <input type="text" placeholder="Enter Last Name" name="lname" required>
            
                <label class="required">First Name</label>
                <input type="text" placeholder="Enter First Name" name="fname" required>
           
                <label class="required">MI</label>
                <input type="text" placeholder="Enter Middle Initial" name="MI" required>
            
                <label class="required">Course</label>
                <input type="text" placeholder="Enter Course" name="course" required>
            
                <label class="required">Year Level</label>
                <input type="text" placeholder="Enter Year Level" name="yearlevel" required>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            
                <button type='submit' class='registerbtn' name="register_btn">Register</button>
            <div class= "con signin">
            <p>
                Already have an account? <a href="Login.php">Sign in</a>
            </p>
            </div>
        </form>
    </div>
    
</body>

</html>
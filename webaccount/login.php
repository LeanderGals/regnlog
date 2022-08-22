<!DOCTYPE html>
<html lang="en">
<?php include("./connection.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="mystyle.css">
    <style>
        .required:after {
            content: " *";
            color: red;
        }
        .required{
            font-family: 'Courier New', Courier, monospace;
        }
        .loginbtn {
            background-color: #04aa6d;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .loginbtn:hover {
            opacity: 50;
        }

        input[type="password"]::placeholder {
            text-align: center;           
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <div class="input" style="font-family: 'Courier New', Courier, monospace;">
        <form method="POST" action="login2.php">
            <label class="required">Username:</label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label class="required">Password:</label>
            <input type="password" placeholder="Enter Password" name="pwd" required>
            <button type='submit' class='loginbtn' style="font-family: 'Courier New', Courier, monospace;" name="login_btn">Login</button>
            <p>Not yet registered? <a href="index.php">Sign up</a></p>
        </form>
    </div>
</body>

</html>
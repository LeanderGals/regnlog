<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {

            background-image: url("./images/bg5.gif");
            background-size: cover;
        }
        .row{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
    <title>Add Users</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div style="text-align: left; color:white;">
                    <div class="card-header border-secondary">
                        <h4>Add Users
                            <a href="admin_dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Student ID</label>
                                <input type="text" name="studID" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>MI</label>
                                <input type="text" name="MI" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Year Level</label>
                                <input type="text" name="yearlevel" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
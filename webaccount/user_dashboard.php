<?php
session_start();
require 'connection.php';
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
    <title>User Dashboard</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div style="text-align: left; color:white;">
                    <div class="card-header border-secondary">
                        <h4>Welcome User!
                            <a href="user-student-viewall.php" class="btn btn-primary float-end">View All</a>
                        </h4>
                    </div>
                    <div class="card-body" style="text-align: center;">

                        <table class="table table-bordered" style="color:white;">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>MI</th>
                                    <th>Course</th>
                                    <th>Year Level</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM students  WHERE userstatus = 'Active' || userstatus = 'Updated'";
                                $query_run = mysqli_query($con, $query);

                                
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $student) {
                                        if ($student['userlevel'] == 'Admin'){
                                ?>
                                        <tr>
                                            <td><?= $student['studID']; ?></td>
                                            <td><?= $student['lname']; ?></td>
                                            <td><?= $student['fname']; ?></td>
                                            <td><?= $student['MI']; ?></td>
                                            <td><?= $student['course']; ?></td>
                                            <td><?= $student['yearlevel']; ?></td>
                                            <td><?= $student['userstatus']; ?></td>
                                            <td>
                                                <div style="text-align: center;">
                                                    <a href="user-student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>                                                                    
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                        }else{
                                            ?>
                                            <tr>
                                            <td><?= $student['studID']; ?></td>
                                            <td><?= $student['lname']; ?></td>
                                            <td><?= $student['fname']; ?></td>
                                            <td><?= $student['MI']; ?></td>
                                            <td><?= $student['course']; ?></td>
                                            <td><?= $student['yearlevel']; ?></td>
                                            <td><?= $student['userstatus']; ?></td>
                                            <td>
                                                <div style="text-align: center;">
                                                    <a href="user-student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="user-student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?= $student['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                       

                                
                                <?php
                                        } 
                                    }
                                } else {
                                    echo "<h5> Data Doesn't Exist </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="all" style="text-align: center; margin:10px; font-family: 'Courier New', Courier, monospace;">
        <a href="login.php" class="btn btn-success" style="text-align:center ;">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
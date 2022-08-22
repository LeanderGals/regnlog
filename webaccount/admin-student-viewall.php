<?php
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
            text-align: center;
            background-image: url("./images/bg5.gif");
            background-size: cover;
        }
        .row{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
    <title>Student View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div style="text-align: left; color:white;">
                    <div class="card-header border-secondary">
                        <h4>All User Details
                            <a href="admin_dashboard.php" class="btn btn-danger float-end">BACK</a>
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

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM students";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $student) {
                                ?>
                                        <tr>
                                            <td><?= $student['studID']; ?></td>
                                            <td><?= $student['lname']; ?></td>
                                            <td><?= $student['fname']; ?></td>
                                            <td><?= $student['MI']; ?></td>
                                            <td><?= $student['course']; ?></td>
                                            <td><?= $student['yearlevel']; ?></td>
                                            <td><?= $student['userstatus']; ?></td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
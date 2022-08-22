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
                        <h4>Student Details
                            <a href="admin_dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>Student ID</label>
                                    <p class="form-control">
                                        <?= $student['studID']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Last Name</label>
                                    <p class="form-control">
                                        <?= $student['lname']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>First Name</label>
                                    <p class="form-control">
                                        <?= $student['fname']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Middle Initial</label>
                                    <p class="form-control">
                                        <?= $student['MI']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Course</label>
                                    <p class="form-control">
                                        <?= $student['course']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Year Level</label>
                                    <p class="form-control">
                                        <?= $student['yearlevel']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Status</label>
                                    <p class="form-control">
                                        <?= $student['userstatus']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>User Level</label>
                                    <p class="form-control">
                                        <?= $student['userlevel']; ?>
                                    </p>
                                </div>

                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
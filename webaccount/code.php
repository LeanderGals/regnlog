<?php
session_start();
require 'connection.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    
    $query = "UPDATE students SET userstatus='Deleted' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: user_dashboard.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: user_dashboard.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $studID = mysqli_real_escape_string($con, $_POST['studID']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $MI = mysqli_real_escape_string($con, $_POST['MI']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $yearlevel = mysqli_real_escape_string($con, $_POST['yearlevel']);
    
    
    $query = "UPDATE students SET studID='$studID', lname='$lname', fname='$fname', MI='$MI', course='$course', yearlevel='$yearlevel', userstatus = 'Updated'
    WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: user_dashboard.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: user_dashboard.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    
    $studID = mysqli_real_escape_string($con, $_POST['studID']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $MI = mysqli_real_escape_string($con, $_POST['MI']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $yearlevel = mysqli_real_escape_string($con, $_POST['yearlevel']);


    

    $query = "INSERT INTO students (studID,lname,fname,MI,course,yearlevel) VALUES ('$studID','$lname','$fname','$MI','$course','$yearlevel')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>
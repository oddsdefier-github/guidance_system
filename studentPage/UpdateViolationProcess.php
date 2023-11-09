<?php
session_start();
include('../connection/connection.php');

if (isset($_POST['update'])) 
{
    $report_no = $_POST['report_no'];
    $teacher = $_POST['teacher'];
    $reasons = $_POST['reasons'];
    $involved_students = $_POST['involved_students'];
    $date_time = $_POST['date_time'];


    $query = "UPDATE `student_report` SET teacher='$teacher', reasons='$reasons', involved_students='$involved_students', date_time='$date_time' 
                    WHERE report_no='$report_no'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) 
    {
        $_SESSION['message'] = "Updated Successfully";
        header("location: ViolationReport.php");
        exit(0);
    }
    
}
?>

    
<?php

session_start();
include('../connection/connection.php');

if (isset($_POST['update'])) {
    $report_no = $_POST['report_no'];
    $teacher = $_POST['teacher'];
    $reasons = $_POST['reasons'];
    $involved_students = $_POST['involved_students'];
    $date_time = $_POST['date_time'];

    $query = "UPDATE student_report SET teacher=?, reasons=?, involved_students=?, date_time=? WHERE report_no=?";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "ssssi", $teacher, $reasons, $involved_students, $date_time, $report_no);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        $_SESSION['message'] = "Updated Successfully";
        header("location: ViolationReport.php");
        exit(0);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

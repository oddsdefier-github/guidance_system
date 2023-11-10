<?php

include('includes/header.php');
include('includes/sidebar.php');
include('../connection/connection.php');

session_start();
if (!isset($_SESSION['user_id'])) {
    session_unset();
    session_destroy();
    echo '<script>window.location.href = "../login.php";</script>';
}
if (!isset($_SESSION["user_type"]) || $_SESSION["user_type"] != "admin") {
    echo '<script>alert("You\'re not allowed here!");</script>';
    $_SESSION = array();
    session_unset();
    session_destroy();
    echo '<script>window.location.href = "../login.php";</script>';
}

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Welcome Admin</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    NUMBER of STUDENTS
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <?php

                            $dash_students_query = "SELECT * FROM `students` ";
$dash_students_query_run = mysqli_query($conn, $dash_students_query);

if ($students_total = mysqli_num_rows($dash_students_query_run)) {
    echo '<h3 class="mb-0">' . $students_total . '</h3>';
} else {
    echo '<h3 class="mb-0">No Data found</h3>';
}
?>
                    <a class="small text-white stretched-link" href="viewEnrolledStudents.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    NUMBER of REGISTER USERS
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">

                    <?php

    $dash_user_query = "SELECT * FROM `users` ";
$dash_user_query_run = mysqli_query($conn, $dash_user_query);

if ($user_total = mysqli_num_rows($dash_user_query_run)) {
    echo '<h3 class="mb-0">' . $user_total . '</h3>';
} else {
    echo '<h3 class="mb-0">No Data found</h3>';
}
?>

                    <a class="small text-white stretched-link" href="view_user.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    COMPLETED COMPLAIN or REPORT
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <?php

    $dash_pending_query = "SELECT * FROM student_report WHERE status = 'Approved' ORDER BY report_no ASC";
$dash_pending_query_run = mysqli_query($conn, $dash_pending_query);

if ($pending_total = mysqli_num_rows($dash_pending_query_run)) {
    echo '<h3 class="mb-0">' . $pending_total . '</h3>';
} else {
    echo '<h3 class="mb-0">No Data found</h3>';
}
?>
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    PENDING COMPLAIN or REPORT
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">

                    <?php

    $dash_pending_query = "SELECT * FROM student_report WHERE status = 'pending' ORDER BY report_no ASC";
$dash_pending_query_run = mysqli_query($conn, $dash_pending_query);

if ($pending_total = mysqli_num_rows($dash_pending_query_run)) {
    echo '<h3 class="mb-0">' . $pending_total . '</h3>';
} else {
    echo '<h3 class="mb-0">No Data found</h3>';
}
?>

                    <a class="small text-white stretched-link" href="view_pending_report.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');

?>
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
if (!isset($_SESSION["user_type"]) || $_SESSION["user_type"] != "user") {
    echo '<script>alert("You\'re not allowed here!");</script>';
    $_SESSION = array();
    session_unset();
    session_destroy();
    echo '<script>window.location.href = "../login.php";</script>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    //input from forms
    $n_student = $_POST['n_student'];
    $teacher = $_POST['teacher'];
    $reasons = $_POST['reasons'];
    $involved_students = $_POST['involved_students'];
    $contact_no = $_POST['contact_no'];
    $date_time = $_POST['date_time'];
    //input from forms

    $user_id = $_SESSION['user_id'];
    $timestamp = time();
    $random_number = mt_rand(1000, 9999);
    $report_id = $timestamp . $random_number;


    $query = "INSERT INTO student_report (report_id, user_id, n_student, teacher, reasons, involved_students, contact_no, date_time, status) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'pending')";
    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        die("Connection failed: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssssssss", $report_id, $user_id, $n_student, $teacher, $reasons, $involved_students, $contact_no, $date_time);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Your request is under process!')</script>";

        // Clearing POST data and redirecting to prevent accidental resubmission
        $_POST = array();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<script>alert('Something went wrong!')</script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Welcome Guidance Management System</h1>
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="" class="form-horizontal form-material mx-2">

                                <div class="form-group">
                                    <label class="col-md-12"> Name of Students</label>
                                    <div class="col-md-12">
                                        <input type="text" required name="n_student" placeholder="Juan G. Dela Cruz" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Name of Teacher/Adviser</label>
                                    <div class="col-md-12">
                                        <input type="text" required name="teacher" placeholder="Sir/Ma'am" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">State Reasons/Concerns</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" required name="reasons" placeholder="Bullying" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Name of Involved Student/s</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" required name="involved_students" placeholder="Juan Dela Cruz" class="form-control form-control-line"></textarea>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Contact No.</label>
                                    <div class="col-md-12">
                                        <input type="text" required name="contact_no" placeholder="09*********" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date_time" class="col-md-12">Please report at the Guidance Office at selected Time</label>
                                    <div class="col-md-12">
                                        <input type="datetime-local" value="2017-06-01T08:30" id="date_time" name="date_time" placeholder="" class="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success text-white" name="submit">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
include('includes/scripts.php');
?>




</body>

</html>
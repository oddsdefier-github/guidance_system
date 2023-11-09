<?php
session_start();
include('../connection/connection.php');


if(isset($_POST['approve_report']))
{

	$report_no = $_POST['report_no'];
	$select = "UPDATE student_report SET status = 'Approved' WHERE report_no = '$report_no' ";
	$resut = mysqli_query($conn,$select);

    $_SESSION['message'] = "Approved Successfully";
        header("location: view_pending_report.php");
        exit();
}


if(isset($_POST['delete_report']))
{

	$report_no = $_POST['report_no'];
	$select = "DELETE  FROM student_report  WHERE report_no = '$report_no' ";
	$resut = mysqli_query($conn,$select);
	
    $_SESSION['message'] = "Deleted Successfully";
        header("location: view_pending_report.php");
        exit();
}



if (isset($_POST['delete_newStudent'])) 
{
    $student_id = $_POST['delete_newStudent'];

    $query = "DELETE FROM `students` WHERE student_id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) 
    {
        $_SESSION['message'] = "User/Admin Deleted Successfully";
        header("location: viewEnrolledStudents.php");
        exit();
    }
    else 
    {
        $_SESSION['message'] = "Something went wrong";
        header("location: viewEnrolledStudents.php");
        exit();
    }
}

if (isset($_POST['edit_student'])) 
{
    $id = $_POST['id'];
    $student_id = $_POST['student_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $Y_level = $_POST['Y_level'];
    $contact_no = $_POST['contact_no'];

    $query = "UPDATE `students` SET `student_id`='$student_id',`first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`gender`='$gender',`Y_level`='$Y_level',`contact_no`='$contact_no' WHERE id=$id ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) 
    {
        $_SESSION['message'] = "Updated Successfully";
        header("location: viewEnrolledStudents.php");
        exit(0);
    }
    else 
    {
        $_SESSION['message'] = "Something went wrong";
        header("location: viewEnrolledStudents.php");
        exit(0);
    }
    
}

if (isset($_POST['add_student'])) 
{
    $id = $_POST['id'];
    $student_id = $_POST['student_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $Y_level = $_POST['Y_level'];
    $contact_no = $_POST['contact_no'];

    $query = "INSERT INTO `students`(`student_id`, `first_name`, `middle_name`, `last_name`, `gender`, `Y_level`, `contact_no`) VALUES ('$student_id','$first_name','$middle_name','$last_name','$gender','$Y_level','$contact_no') ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) 
    {
        $_SESSION['message'] = "Added Successfully";
        header("location: viewEnrolledStudents.php");
        exit(0);
    }
    else 
    {
        $_SESSION['message'] = "Something went wrong";
        header("location: viewEnrolledStudents.php");
        exit(0);
    }
    
}

if (isset($_POST['delete_user'])) 
{
    $user_id = $_POST['delete_user'];

    $query = "DELETE FROM `users` WHERE user_id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) 
    {
        $_SESSION['message'] = "User/Admin Deleted Successfully";
        header("location: view_user.php");
        exit();
    }
    else 
    {
        $_SESSION['message'] = "Something went wrong";
        header("location: view_user.php");
        exit();
    }
}


if (isset($_POST['add_user']))
{
    $Student_id = $_POST['Student_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $Y_level = $_POST['Y_level'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $C_password = $_POST['C_password'];
    $user_type = $_POST['user_type'];

    $query = "INSERT INTO `users`(`Student_id`, `first_name`, `middle_name`, `last_name`, `gender`, `Y_level`, `user_name`, `password`, `C_password`, `user_type`) VALUES ('$Student_id','$first_name','$middle_name','$last_name','$gender','$Y_level','$user_name','$password','$C_password','$user_type')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) 
    {
        $_SESSION['message'] = "Admin/User Added Successfully";
        header("location: view_user.php");
        exit();
    }
    else 
    {
        $_SESSION['message'] = "Something went wrong";
        header("location: view_user.php");
        exit();
    }
}



if (isset($_POST['update_user'])) 
{
    $user_id = $_POST['user_id'];
    $Student_id = $_POST['Student_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $Y_level = $_POST['Y_level'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $C_password = $_POST['C_password'];
    $user_type = $_POST['user_type'];

    $query = "UPDATE `users` SET `Student_id`='$Student_id',`first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`gender`='$gender',`Y_level`='$Y_level',`user_name`='$user_name',`password`='$password',`C_password`='$C_password',`user_type`='$user_type' WHERE user_id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) 
    {
        $_SESSION['message'] = "Updated Successfully";
        header("location: view_user.php");
        exit(0);
    }
    
}
?>

    
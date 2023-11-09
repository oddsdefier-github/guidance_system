<?php
session_start();
include('../connection/connection.php');

if (isset($_POST['update_profile'])) 
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
        header("location: viewProfile.php");
        exit(0);
    }
    
}
?>

    
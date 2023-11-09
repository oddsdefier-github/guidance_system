<?php
session_start();
include('connection/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $Student_id = $_POST["Student_id"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
    $Y_level = $_POST["Y_level"];
    $user_name =$_POST["user_name"];
    $password = $_POST["password"];
    $C_password = $_POST["C_password"];

    if ($password != $C_password)
    {
        echo "Password does not match.";
    }
    else 
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO `users`(`Student_id`, `first_name`, `middle_name`, `last_name`, `gender`, `Y_level`, `user_name`, `password`, `C_password`) VALUES ('$Student_id','$first_name','$middle_name','$last_name','$gender','$Y_Level','$user_name','$password','$C_password')";

        $result = mysqli_query($conn, $query);

        if ($result) 
        {
            header("location: login.php");
        }
    }
}
?>
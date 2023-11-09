<?php
session_start();

include('connection/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE user_name=? AND password=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $user_name, $password);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $user_id = $row['user_id'];
        $username = $row["user_name"];
        $password = $row["password"];
        $user_type = $row['user_type'];

        $usernameInput = $_POST["user_name"];
        $passInput = $_POST['password'];

        if ($username == $usernameInput && $password == $passInput) {

            $_SESSION["user_name"] = $username;
            $_SESSION['user_id'] = $user_id;

            if ($user_type == "admin") {
                echo '<script> alert("Welcome Admin!") </script>';
                header("location: admin/AdminIndex.php");

            } elseif ($user_type == "user") {
                echo '<script> alert("Welcome ' . $username . '! ") </script>';
                header("location: studentPage/index.php");
            }

        } else {
            echo "<script>alert('Username or Password is incorrect. Please try again.')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            display: grid;
            place-items: center;
        }

        #text {
            height: 35px;
            padding: 20px;
            border-radius: 20px;
            width: 100%
        }

        #button {
            padding: 10px;
            width: 100px;
            color: black;
            background-color: lightblue;
            border: none;
            border-radius: 20px;
        }

        #button:hover {
            background: #434d53;
        }

        #box {
            background-color: #E5E7E8;
            margin: auto;
            width: 300px;
            padding: 20px;
            border-radius: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div id="box">
        <form method="POST" action="login.php">
            <div style="font-size: 35px; margin: 5px; color: black;">Login</div>

            <input id="text" required type="text" name="user_name" placeholder="   username"><br><br>
            <input id="text" required type="password" name="password" placeholder="   password"><br><br>

            <input id="button" type="submit" name="login_btn" value="Login"><br><br>
        </form>
    </div>
</body>

</html>
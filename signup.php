<?php

include('connection/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Form</title>
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel=”stylesheet” integrity=”sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3” crossorigin=”anonymous”>
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    
    <link rel="stylesheet" href="signup.css">
</head>
<body>
        <div class="container">
            <form method="POST" action="signupProcess.php">

                    <h2>Registration Form</h2>

                    <label for="student id">Student I.D</label><br>
                    <input required type="text" placeholder="Student id" name="Student_id"> <br>

                    <label for="first name">First Name</label><br>
                    <input required type="text" placeholder="First Name" name="first_name"><br>

                    <label for="middle name">Middle Name</label><br>
                    <input required type="text" placeholder="Middle Name" name="middle_name"><br>

                    <label for="last name">Last Name</label><br>
                    <input required type="text" placeholder="Last Name" name="last_name"><br>

                    <label for="gender">Gender</label>
                    <div class="custom select">
                    <select required name="gender" id="">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <label for="Y_level">Year Level</label>
                    <div class="custom select">
                    <select required name="Y_level" id="">
                            <option value="">Select</option>
                            <option value="Grade 7">Grade 7</option>
                            <option value="Grade 8">Grade 8</option>
                            <option value="Grade 9">Grade 9</option>
                            <option value="Grade 10">Grade 10</option>
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>

                        </select>
                    </div>

                    
                    <label for="user name">User Name</label><br>
                    <input required type="text" placeholder="Username" name="user_name"><br>

                    <label for="password">Password</label><br>
                    <input required type="password" placeholder="Password" name="password"><br>

                    <label for="password">Confirm Password</label><br>
                    <input required type="password" placeholder="Password" name="C_password"><br>

                    <button type="submit" name="register_btn" class="registerbtn">Register</button>
            </form>
        </div>
</body>
</html>
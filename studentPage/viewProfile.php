<?php

include('includes/header.php');
include('includes/sidebar.php');

include('../connection/connection.php');

$user_id = $_SESSION["user_id"];

$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE user_id = ? ");

mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$info = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Profile</h3>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                        <?php include('message.php'); ?>
                    </div>
                    <div class="card-body">

                        <form action="profile_update_process.php" method="POST">
                            <input type="hidden" name="user_id" value="<?php echo "{$info['user_id']}"?>">
                            <div classs="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Student ID</label>
                                    <input type="text" name="Student_id" value="<?php echo "{$info['Student_id']}"?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name" value="<?php echo "{$info['first_name']}"?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Middle Name</label>
                                    <input type="text" name="middle_name" value="<?php echo "{$info['middle_name']}"?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Last name</label>
                                    <input type="text" name="last_name" value="<?php echo "{$info['last_name']}"?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="">-select-</option>
                                        <option value="male" <?php echo $info['gender'] == 'male' ? 'selected' : ''?> >Male</option>
                                        <option value="female" <?php echo $info['gender'] == 'female' ? 'selected' : ''?> >Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Year Level</label>
                                    <select name="Y_level" class="form-control">
                                        <option value="">Select Year Level</option>
                                        <option value="Grade 7" <?php echo $info['Y_level'] == 'Grade 7' ? 'selected' : ''?> >Grade 7</option>
                                        <option value="Grade 8" <?php echo $info['Y_level'] == 'Grade 8' ? 'selected' : ''?> >Grade 8</option>
                                        <option value="Grade 9" <?php echo $info['Y_level'] == 'Grade 9' ? 'selected' : ''?> >Grade 9</option>
                                        <option value="Grade 10" <?php echo $info['Y_level'] == 'Grade 10' ? 'selected' : ''?> >Grade 10</option>
                                        <option value="Grade 11" <?php echo $info['Y_level'] == 'Grade 11' ? 'selected' : ''?> >Grade 11</option>
                                        <option value="Grade 12" <?php echo $info['Y_level'] == 'Grade 12' ? 'selected' : ''?> >Grade 12</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">UserName</label>
                                    <input type="text" name="user_name" value="<?php echo "{$info['user_name']}"?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Password</label>
                                    <input type="text" name="password" value="<?php echo "{$info['password']}"?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Confirm Password</label>
                                    <input type="text" name="C_password" value="<?php echo "{$info['C_password']}"?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Role As</label>
                                    <select name="user_type" class="form-control">
                                        <option value="">Select Role</option>
                                        <option value="user" <?php echo $info['user_type'] == 'user' ? 'selected' : ''?> >User</option>
                                        <option value="admin" <?php echo $info['user_type'] == 'admin' ? 'selected' : ''?> >Admin</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="update_profile" class="btn btn-primary">Update Profile</button>
                                </div>
                            </div>
                        </form>

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
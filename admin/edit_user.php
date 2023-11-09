<?php

include('includes/header.php');
include('includes/sidebar.php');

?>

<div class="container-fluid px-4">
    <h3 class="mt-4">Register Users</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Register Users</li>
        </ol>
        <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                      <h4>Edit User</h4>
                  </div>
                  <div class="card-body">

                    <?php
                    include('../connection/connection.php');

                    if (isset($_GET['id']))
                    {
                        $user_id = $_GET['id'];
                        $users = "SELECT * FROM `users` WHERE user_id='$user_id' ";

                        $users_run = mysqli_query($conn, $users);
                        
                        if (mysqli_num_rows($users_run) > 0) 
                        {
                            foreach($users_run as $user)
                            {
                            ?>
                            
                                <form action="UpdateProcess_user.php" method="POST">
                                    <input type="hidden" name="user_id" value=" <?=$user['user_id'];?> ">
                                    <div classs="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Student ID</label>
                                            <input type="text" name="Student_id" value="<?= $user['Student_id'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" name="first_name" value="<?= $user['first_name'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Middle Name</label>
                                            <input type="text" name="middle_name" value="<?= $user['middle_name'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Last name</label>
                                            <input type="text" name="last_name" value="<?= $user['last_name'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="">-select-</option>
                                                <option value="male" <?= $user['gender'] == 'male'? 'selected':''?> >Male</option>
                                                <option value="female" <?= $user['gender'] == 'female'? 'selected':''?> >Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Year Level</label>
                                            <select name="Y_level" class="form-control">
                                                <option value="">-select-</option>
                                                <option value="Grade 7" <?= $user['Y_level'] == 'Grade 7'? 'selected':''?> >Grade 7</option>
                                                <option value="Grade 8" <?= $user['Y_level'] == 'Grade 8'? 'selected':''?> >Grade 8</option>
                                                <option value="Grade 9" <?= $user['Y_level'] == 'Grade 9'? 'selected':''?> >Grade 9</option>
                                                <option value="Grade 10" <?= $user['Y_level'] == 'Grade 10'? 'selected':''?> >Grade 10</option>
                                                <option value="Grade 11" <?= $user['Y_level'] == 'Grade 11'? 'selected':''?> >Grade 11</option>
                                                <option value="Grade 12" <?= $user['Y_level'] == 'Grade 12'? 'selected':''?> >Grade 12</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">UserName</label>
                                            <input type="text" name="user_name" value="<?= $user['user_name'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Password</label>
                                            <input type="text" name="password" value="<?= $user['password'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Confirm Password</label>
                                            <input type="text" name="C_password" value="<?= $user['C_password'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Role As</label>
                                            <select name="user_type" class="form-control">
                                                <option value="">-select-</option>
                                                <option value="user" <?= $user['user_type'] == 'user'? 'selected':''?> >User</option>
                                                <option value="admin"<?= $user['user_type'] == 'admin'? 'selected':''?> >Admin</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
                                        </div>
                                    </div>
                                </form>

                            <?php

                            }
                        }
                        else 
                        {
                            ?>
                            <h4>No Record found</h4>
                            <?php
                        }
                
                    }
                        
                    ?>

                  </div>
                </div>
              </div>
        </div> 
</div> 
<?php
include('includes/footer.php');
include('includes/scripts.php');

?>
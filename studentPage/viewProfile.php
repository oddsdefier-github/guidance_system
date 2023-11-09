<?php

include('includes/header.php');
include('includes/sidebar.php');

?>

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
                    <?php
                    include('../connection/connection.php');

                         $user_name = $_SESSION["user_name"];

                         $query = "SELECT * FROM `users` WHERE user_name='$user_name' ";
                         $query_run = mysqli_query($conn, $query);
                            
                         $info = mysqli_fetch_assoc($query_run);

                    ?>
                                  <form action="ProfileUpdateProcess.php" method="POST">
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
                                                  <option value="male" <?= $info['gender'] == 'male'? 'selected':''?> >Male</option>
                                                  <option value="female" <?= $info['gender'] == 'female'? 'selected':''?> >Female</option>
                                              </select>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                              <label for="">Year Level</label>
                                              <select name="Y_level" class="form-control">
                                                  <option value="">-select-</option>
                                                  <option value="Grade 7" <?= $info['Y_level'] == 'Grade 7'? 'selected':''?> >Grade 7</option>
                                                  <option value="Grade 8" <?= $info['Y_level'] == 'Grade 8'? 'selected':''?> >Grade 8</option>
                                                  <option value="Grade 9" <?= $info['Y_level'] == 'Grade 9'? 'selected':''?> >Grade 9</option>
                                                  <option value="Grade 10" <?= $info['Y_level'] == 'Grade 10'? 'selected':''?> >Grade 10</option>
                                                  <option value="Grade 11" <?= $info['Y_level'] == 'Grade 11'? 'selected':''?> >Grade 11</option>
                                                  <option value="Grade 12" <?= $info['Y_level'] == 'Grade 12'? 'selected':''?> >Grade 12</option>
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
                                                  <option value="">-select-</option>
                                                  <option value="user" <?= $info['user_type'] == 'user'? 'selected':''?> >User</option>
                                                  <option value="admin" <?= $info['user_type'] == 'admin'? 'selected':''?> >Admin</option>
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
<?php

include('includes/header.php');
include('includes/sidebar.php');

?>

<div class="container-fluid px-4">
    <h3 class="mt-4">Enrolled Students</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Edit Enrolled Students</li>
        </ol>
        <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                      <h4>Edit Student</h4>
                  </div>
                  <div class="card-body">

                    <?php
                    include('../connection/connection.php');

                    if (isset($_GET['id'])) 
                    {
                        $student_id = $_GET['id'];
                        $query = "SELECT * FROM `students` WHERE student_id='$student_id' ";

                        $query_run = mysqli_query($conn, $query);
                        if (mysqli_num_rows($query_run) > 0) 
                        {
                            foreach($query_run as $user)
                            {
                               ?>

                                    <form action="UpdateProcess_user.php" method="POST">
                                    <input type="hidden" name="id" value=" <?=$user['id'];?> " class="form-control">
                                        <div classs="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Student ID</label>
                                                <input type="text" name="student_id" value="<?=$user['student_id'];?>" class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">First Name</label>
                                                <input type="text" name="first_name" value="<?=$user['first_name'];?>" class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Middle Name</label>
                                                <input type="text" name="middle_name" value="<?=$user['middle_name'];?>" class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Last name</label>
                                                <input type="text" name="last_name" value="<?=$user['last_name'];?>" class="form-control">
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
                                                <label for="">Contact Number</label>
                                                <input type="text" name="contact_no" value="<?=$user['contact_no'];?>" class="form-control">
                                            </div>
                                
                                            <div class="col-md-12 mb-3">
                                                <button type="submit" name="edit_student" class="btn btn-primary">Edit Student</button>
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
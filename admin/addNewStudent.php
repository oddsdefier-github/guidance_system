<?php

include('includes/header.php');
include('includes/sidebar.php');

?>

<div class="container-fluid px-4">
    <h3 class="mt-4">Enrolled Students</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Add New Students</li>
        </ol>
        <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                      <h4>Add New Student
                      <a href="viewEnrolledStudents.php" class="btn btn-danger float-end">BACK</a>
                      </h4>
                  </div>
                  <div class="card-body">
                                <form action="UpdateProcess_user.php" method="POST">
                                    <div classs="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Student ID</label>
                                            <input type="text" name="student_id" value="" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" name="first_name" value="" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Middle Name</label>
                                            <input type="text" name="middle_name" value="" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Last name</label>
                                            <input type="text" name="last_name" value="" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="">-select-</option>
                                                <option value="male" >Male</option>
                                                <option value="female" >Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Year Level</label>
                                            <select name="Y_level" class="form-control">
                                                <option value="">-select-</option>
                                                <option value="Grade 7" >Grade 7</option>
                                                <option value="Grade 8" >Grade 8</option>
                                                <option value="Grade 9" >Grade 9</option>
                                                <option value="Grade 10" >Grade 10</option>
                                                <option value="Grade 11" >Grade 11</option>
                                                <option value="Grade 12" >Grade 12</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Contact Number</label>
                                            <input type="text" name="contact_no" value="" class="form-control">
                                        </div>
                             
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="add_student" class="btn btn-primary">Add Student</button>
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
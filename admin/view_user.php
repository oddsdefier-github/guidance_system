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
                <?php include('message.php'); ?>
                <div class="card">
                  <div class="card-header">
                      <h4>Register Users
                        <a href="addUserAdmin.php" class="btn btn-primary float-end">Add Admin/User</a>
                      </h4>
                  </div>
                  <div class="card-body">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>User_id</th>
                          <th>Student_id</th>
                          <th>First_Name</th>
                          <th>Middle_Name</th>
                          <th>Last_Name</th>
                          <th>Gender</th>
                          <th>Year_Level</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>User_Type</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            include('../connection/connection.php');

                          $query = "SELECT * FROM users ";
                          $query_run = mysqli_query($conn, $query);

                          if (mysqli_num_rows($query_run) > 0)
                          {
                            foreach($query_run as $row)
                            {
                                ?>
                                  <tr>
                                    <td> <?= $row['user_id']; ?> </td>
                                    <td> <?= $row['Student_id']; ?> </td>
                                    <td> <?= $row['first_name']; ?> </td>
                                    <td> <?= $row['middle_name']; ?> </td>
                                    <td> <?= $row['last_name']; ?> </td>
                                    <td> <?= $row['gender']; ?> </td>
                                    <td> <?= $row['Y_level']; ?> </td>
                                    <td> <?= $row['user_name']; ?> </td>
                                    <td> <?= $row['password']; ?> </td>
                                    <td> <?= $row['user_type']; ?> </td>
                                    <td> <a href="edit_user.php?id=<?=$row['user_id'];?>" class="btn btn-success">Edit</a></td>
                                    <td> 
                                        <form action="UpdateProcess_user.php" method="POST">
                                          <button type="submit" name="delete_user" value="<?=$row['user_id'];?>" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>                                   
                                  </tr>
                                <?php
                            }
                          }
                          else 
                          {
                           ?>
                              <tr>
                                <td colspan="10">No Record Found</td>
                              </tr>
                           <?php
                          }
                        ?>
                        
                      </tbody>
                    </table>
                    
                  </div>
                </div>
              </div>

        </div> 
</div> 
<?php
include('includes/footer.php');
include('includes/scripts.php');

?>
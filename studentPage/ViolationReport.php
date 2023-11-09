<?php

include('includes/header.php');
include('includes/sidebar.php');

?>

<div class="container-fluid px-4">
  <h3 class="mt-4">Users Dashboard</h3>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Violation Reservations</li>
  </ol>
  <div class="row">

    <div class="col-md-12">
      <?php include('message.php'); ?>
      <div class="card">
        <div class="card-header">
          <h4>
            Violation Reservations
            <a href="index.php" class="btn btn-primary float-end">Add Complain/Report</a>
          </h4>

        </div>
        <div class="card-body">

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Report No.</th>
                <th>Name of Studet</th>
                <th>Teacher/Adviser</th>
                <th>Reasons</th>
                <th>Involved Students</th>
                <th>Contact Number</th>
                <th>Time</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include('../connection/connection.php');

$student_id = $_SESSION['user_id'];
$query = "SELECT * FROM student_report WHERE user_id ='$student_id'";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
    foreach($query_run as $row) {
        ?>
              <tr>
                <td> <?= $row['report_no']; ?> </td>
                <td> <?= $row['n_student']; ?> </td>
                <td> <?= $row['teacher']; ?> </td>
                <td> <?= $row['reasons']; ?> </td>
                <td> <?= $row['involved_students']; ?> </td>
                <td> <?= $row['contact_no']; ?> </td>
                <td> <?= $row['date_time']; ?> </td>
                <td> <?= $row['status']; ?> </td>
                <td> <a href="UpdateViolationReport.php?id=<?=$row['report_no'];?>" class="btn btn-success">Edit</a></td>
                <td> <a href="DeleteViolationReport.php?id=<?=$row['report_no'];?>" class="btn btn-danger">Delete</a></td>

              </tr>
              <?php
    }
} else {
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
<?php

include('includes/header.php');
include('includes/sidebar.php');

?>


<div class="container-fluid px-4" style="width: 50%;">
    <h3 class="mt-4">Update your Violation Report</h3>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                            include('../connection/connection.php');

if (isset($_GET['id'])) {
    $report_no = $_GET['id'];
    $query = "SELECT * FROM student_report WHERE report_no='$report_no' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach($query_run as $query) {
            ?>

                        <form method="POST" action="UpdateViolationProcess.php">
                            <input type="hidden" name="report_no" value="<?=$query['report_no'];?>">
                            <div class="form-group">
                                <label class="col-md-12">Name of Teacher/Adviser</label>
                                <div class="col-md-12">
                                    <input type="text" name="teacher" value="<?=$query['teacher'];?>" placeholder="Sir/Ma'am" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">State Reasons/Concerns</label>
                                <div class="col-md-12">
                                    <input type="text" name="reasons" value="<?=$query['reasons'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Name of Involved Student/s</label>
                                <div class="col-md-12">
                                    <input type="text" name="involved_students" value="<?=$query['involved_students'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Select Date</label>
                                <div class="col-md-12">
                                    <input type="datetime-local" value="<?=$query['date_time'];?>" name="date_time" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                                </div>
                            </div>

                        </form>

                        <?php
        }

    } else {
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
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>
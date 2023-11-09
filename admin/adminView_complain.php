<?php

include('includes/header.php');
include('includes/sidebar.php');

?>

<div class="container-fluid px-4">
    <h3 class="mt-4">Complains and Reports</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">View Pending</li>
            <li class="breadcrumb-item">Add Complain/Report</li>
        </ol>
        <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                      <h4>View Complain/Report
                        <a href="view_pending_report.php" class="btn btn-danger float-end">BACK</a>
                      </h4>
                  </div>

                  <?php
                    include('../connection/connection.php');

                    if (isset($_GET['id'])) 
                    {   
                        $report_no =$_GET['id'];

                        $query = "SELECT * FROM `student_report` WHERE report_no='$report_no' ";
                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) 
                        {
                        foreach($query_run as $query)
                        {
                           ?>
                            <form method="POST", action="",class="form-horizontal form-material mx-2">
                                <input type="hidden" name="report_no" value="<?=$query['report_no'];?>">

                                    <div class="form-group">
                                        <label class="col-md-12">Name of Student</label>
                                        <div class="col-md-12">
                                            <input type="" name="n_student" placeholder="<?=$query['n_student'];?>"
                                                class="form-control">
                                        </div>
                                     </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Name of Teacher/Adviser</label>
                                        <div class="col-md-12">
                                            <input type="" name="teacher" placeholder="<?=$query['teacher'];?>"
                                                class="form-control">
                                        </div>
                                     </div>
                                    <div class="form-group">
                                        <label class="col-md-12">State Reasons/Concerns</label>
                                        <div class="col-md-12">
                                            <textarea rows="5"  name="reasons" placeholder="<?=$query['reasons'];?>"  class="form-control form-control-line" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Name of Involved Student/s</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" required name="involved_students" placeholder="<?=$query['involved_students'];?>" class="form-control form-control-line" ></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Contact_no</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" required name="contact_no" placeholder="<?=$query['contact_no'];?>" class="form-control form-control-line" ></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Select Date</label>
                                        <div class="col-md-12">
                                            <input type=""  name="date_time" value="<?=$query['date_time'];?>"
                                                class="form-control form-control-line">
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

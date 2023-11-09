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
                      <h4>Add Complain/Report
                      </h4>
                  </div>
                    <form method="POST", action="",class="form-horizontal form-material mx-2">

                            <div class="form-group">
                                <label class="col-md-12">Name of Teacher/Adviser</label>
                                <div class="col-md-12">
                                    <input type="text" required name="teacher" placeholder="Sir/Ma'am"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">State Reasons/Concerns</label>
                                <div class="col-md-12">
                                    <textarea rows="5" required name="reasons" placeholder="Bullying"  class="form-control form-control-line" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Name of Involved Student/s</label>
                                <div class="col-md-12">
                                    <textarea rows="5" required name="involved_students" placeholder="Juan Dela Cruz" class="form-control form-control-line" ></textarea>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Select Date</label>
                                <div class="col-md-12">
                                    <input type="datetime-local" required name="date_time" placeholder=""
                                        class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary text-white" name="submit">Add</button>
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

<?php

include('includes/header.php');
include('includes/sidebar.php');

include('../connection/connection.php');

if (isset($_POST['submit'])) 
{
    $n_student = $_POST['n_student'];
    $teacher = $_POST['teacher'];
    $reasons = $_POST['reasons'];
    $involved_students = $_POST['involved_students'];
    $contact_no = $_POST['contact_no'];
    $date_time = $_POST['date_time'];

    $query = "INSERT INTO `student_report`(`n_student`, `teacher`, `reasons`, `involved_students`, `contact_no`, `date_time`, `status`) VALUES ('$n_student','$teacher','$reasons','$involved_students','$contact_no','$date_time','pending')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run > 0) 
    {
        echo "<script>alert('Your request is under process!')</script>";
    }else 
    {
        echo "<script>alert('something went wrong!')</script>";
    }

}

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Welcome Guidance Management System</h1>
    <div class="container-fluid">
                
                <div class="row">

                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <form method="POST", action="",class="form-horizontal form-material mx-2">
                                    
                                    <div class="form-group">
                                        <label class="col-md-12"> Name of Students</label>
                                        <div class="col-md-12">
                                            <input type="text" required name="n_student" placeholder="Juan G. Dela Cruz"
                                                class="form-control">
                                        </div>
                                    </div>

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
                                        <label class="col-md-12">Contact No.</label>
                                        <div class="col-md-12">
                                            <input type="text" required name="contact_no" placeholder="09*********"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Please report at the Guidance Office at selected Time</label>
                                        <div class="col-md-12">
                                              <select name="date_time" class="form-control">
                                                  <option value="">-select time-</option>
                                                  <option value="8-9AM"> 8 -  9AM</option>
                                                  <option value="9-10AM"> 9 - 10AM</option>
                                                  <option value="10-11AM">10 - 11AM</option>
                                                  <option value="1-2PM"> 1 - 2PM</option>
                                                  <option value="2-3PM"> 2 - 3PM</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" name="submit">Submit</button>
                                        </div>
                                    </div>

                                </form>
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


<?php

    include('../connection/connection.php');


    if (isset($_GET['id'])) {
        $report_no = $_GET['id'];


        $query = "DELETE FROM `student_report` WHERE report_no=$report_no ";

        $result=mysqli_query($conn, $query);
        if ($result) {
            header('location: ViolationReport.php');
        }else {
            die (mysqli_error($conn));
        }
    }




?>
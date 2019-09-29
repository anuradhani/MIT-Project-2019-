<?php

include './model/dbconnection.php';

function get_submission_list() {
    global $conn;
    $query = "SELECT `subid`,`subname` FROM `subdetails`";
    
    $result = $conn->query($query);
    return $result;
}

function submission_report_show($reportid){
    global $conn;
    $query = "SELECT student.`registrationNo`, student.`firstName`, student.`lastName`, student.`email`, student.`contactNo`  FROM student INNER JOIN submission ON student.registrationNo = submission.registrationNo WHERE `Sub_Id`='$reportid'";
    
    $result = $conn->query($query);
    return $result;
}

function project_eligibility_report_show(){
    global $conn;
    $query = "SELECT  `registrationNo`, `firstName`, `lastName`, `email`, `contactNo` FROM `student` WHERE `dp` = '1' AND `pro` = '1'";
    
    $result = $conn->query($query);
    return $result;
}

function final_eligibility_report_show(){
    global $conn;
    $query = "SELECT  `registrationNo`, `firstName`, `lastName`, `email`, `contactNo` FROM `student` WHERE `dp` = '1' AND `pro` = '1' AND `ir`='1' AND `caf`='1'AND `saf`='1' AND `pr1`='1' AND `pr2`='1' AND `pr3`='1' AND `pr4`='1' AND `pr5`='1' AND `pr6`='1' AND `pr7`='1'AND `pr8`='1' AND `pr9`='1' AND `pr10`='1' ";
    
    $result = $conn->query($query);
    return $result;
}
function submission_summary_report_show(){
    global $conn;
    $query = "SELECT *  FROM `student` ";
    
    $result = $conn->query($query);
    return $result;
}
?>


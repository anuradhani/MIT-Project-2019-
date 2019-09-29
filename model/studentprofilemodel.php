<?php
include "./model/dbconnection.php";

function get_studentdetails($regno){
    global $conn;
    $query = "SELECT * FROM `student` WHERE registrationNo='$regno'";

     $result = $conn->query($query);
    return $result;
    
}
?>

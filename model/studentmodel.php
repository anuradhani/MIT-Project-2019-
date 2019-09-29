<?php
include "./model/dbconnection.php";

function get_student_list(){
    global $conn;
    $query = "SELECT * FROM `student`";
    
    $result = $conn->query($query);
    return $result;
}
function get_student($id){
    global $conn;
    $query = "SELECT * FROM `student` WHERE autoId='".$id."'";
    
    $result = $conn->query($query);
    if($result->num_rows > 0)
        return $result->fetch_assoc();
    return NULL;
}

function get_dealine_list(){
    global $conn;
    $query = "SELECT * FROM `subdetails`";
    
    $result = $conn->query($query);
    return $result;
}

<?php
include "./model/dbconnection.php";

function get_news(){
    global $conn;
    $query = "SELECT * FROM `news` ORDER BY news_dateNtime DESC LIMIT 3";
    
    $result = $conn->query($query);
    return $result;
    
}

function show_deadline_student(){
     global $conn;
    $query = "SELECT * FROM `subdetails`";
    
    $result = $conn->query($query);
    return $result;
}
?>
<?php
include "./model/dbconnection.php";

function show_guidelines(){
    global $conn;
    $query = "SELECT * FROM `guidelines` ORDER BY g_dateNtime DESC";
    
    $result = $conn->query($query);
    return $result;
    
}
?>

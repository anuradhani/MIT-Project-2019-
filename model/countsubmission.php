<?php

include './model/dbconnection.php';

//$Id = $_GET['id'];
function count_submission($id) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) AS count FROM submission WHERE `Sub_Id` = '$id';";
    
   $result = $conn->query($query);
   
   while ($row = $result->fetch_assoc()) {
       return $row['count'];
   }
   
   
//    if ($conn->query($sql) == TRUE) {
//        header("Location:http://localhost/bitsms/submission.php");
//    } else {
//        echo 'error';
//    }
}

function total_count(){
    global $conn;
    $query = "SELECT COUNT(`autoId`) AS count FROM `student`";
    
   $result = $conn->query($query);
   
   while ($row = $result->fetch_assoc()) {
       return $row['count'];
   }
}
//echo count_submission(1);
?>


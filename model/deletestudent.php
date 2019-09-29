<?php

include './dbconnection.php';
$id = $_GET['id'];
function deleteStudent($id) {
    global $conn;
    $query = "DELETE FROM `student` WHERE `autoid` = '$id'";

    $result = $conn->query($query);
    if ($result){
        echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Delete the Student')==true){window.location.href = '../studentlist.php';};};</script> ";
    }else{
         echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Uploaded the Template')==true){window.location.href = '../studentlist.php';};};</script> ";
    }
}

deleteStudent($id);

?>


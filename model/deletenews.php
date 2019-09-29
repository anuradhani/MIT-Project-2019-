<?php

include './dbconnection.php';
$id = $_GET['id'];
function deleteNews($id) {
    global $conn;
    $query = "DELETE FROM `news` WHERE `autoid` = '$id'";

    $result = $conn->query($query);
    if ($result){
        echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Deleted')==true){window.location.href = '../newstable.php';};};</script> ";
    }else{
         echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Deleted')==true){window.location.href = '../newstable.php';};};</script> ";
    }
}

deleteNews($id);

?>


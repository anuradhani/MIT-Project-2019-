<?php

include './dbconnection.php';
$id = $_GET['id'];
function deleteGuidlines($id) {
    global $conn;
    $query = "DELETE FROM `guidelines` WHERE `autoid` = '$id'";

    $result = $conn->query($query);
    if ($result){
        echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Uploaded the Template')==true){window.location.href = '../guidelinestable.php';};};</script> ";
    }else{
         echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Uploaded the Template')==true){window.location.href = '../guidelinestable.php';};};</script> ";
    }
}

deleteGuidlines($id);

?>


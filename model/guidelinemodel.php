<?php

include 'dbconnection.php';

if (isset($_POST['g_heading'])) {
    
    $g_heading = $_POST['g_heading'];
    $g_content = $_POST['g_content'];
    
    $sql = "INSERT INTO `bitsmsdb1`.`guidelines`(`g_heading`, `g_content`) VALUES ('$g_heading','$g_content')";
    if($conn->query($sql)==TRUE){
        header("Location:http://localhost/bitsms/insertguidelines.php");
    }else{
        echo 'error';
    }
    $conn->close();
}
?>
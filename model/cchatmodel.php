<?php

include 'dbconnection.php';
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $studetid = $_POST['studentid'];
    $send = "Coordinator";
    
    echo $message;
  
    $sql = "INSERT INTO `bitsmsdb1`.`chat`(`chatId`,`message`,`send`) VALUES ('$studetid','$message','$send')";
    if($conn->query($sql)==TRUE){
        header("Location:http://localhost/bitsms/C_chatview.php?id=$studetid");
    }else{
        echo 'error';
    }
    $conn->close();
}
?>
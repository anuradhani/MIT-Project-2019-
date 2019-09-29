<?php

include 'dbconnection.php';
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $regno = $_POST['registrationNo'];
    $send = $_POST['registrationNo'];

    $sql = "INSERT INTO `bitsmsdb1`.`chat`(`chatId`, `message`,`send`) VALUES ('$regno','$message','$send')";
    if ($conn->query($sql) == TRUE) {
        header("Location:http://localhost/bitsms/chatview.php");
    } else {
        echo 'error';
    }
    $conn->close();
}
?>
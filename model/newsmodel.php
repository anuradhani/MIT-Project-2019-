<?php

include 'dbconnection.php';

if (isset($_POST['n_heading'])) {
    
    $n_heading = $_POST['n_heading'];
    $news_content = $_POST['news_content'];
    
    $sql = "INSERT INTO `bitsmsdb1`.`news`(`n_heading`, `news_content`) VALUES ('$n_heading','$news_content')";
    if($conn->query($sql)==TRUE){
        header("Location:http://localhost/bitsms/coordinatordashboard.php");
    }else{
        echo 'error';
    }
    $conn->close();
}
?>
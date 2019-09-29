<?php

include 'dbconnection.php';

//$server = "localhost";
//$username = "root";
//$password = "";
//$database = "bitsms";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die($conn->connect_error);
}

if (isset($_POST["submit"])) {
    if ($_FILES['file']['name']) {
        $filename = explode('.', $_FILES['file']['name']);
        if ($filename[1] == csv)
            $handle = fopen($_FILES['file']['tem_name'], "r");
        while ($data = fgetcsv($handle)) {
            $nic = mysqli_real_escape_string($connect, $data[0]);
            $regno = mysqli_real_escape_string($connect, $data[1]);
            $sql = "INSERT INTO `bitsmsdb1`.`student`(`nic`,`registrationNo`) VALUES ('$nic','$regno')";
            if ($conn->query($sql) == TRUE) {
                echo 'done';
            } else {
                echo 'error';
            }
            $conn->close();
        }
    }
}

?>


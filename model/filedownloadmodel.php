<?php

//include 'dbconnection.php';

$server = "localhost";
$username = "root";
$password = "";
$database = "bitsms";

$conn = new mysqli($server, $username, $password, $database);
echo 'one';
if ($conn->connect_error) {
    die($conn->connect_error);
}

if (isset($_POST['submit'])) {


    $r = "select * from submission";
    $rs = $conn->query($r);
    while ($q = $rs->fetch_assoc()) {
        $file = base64_decode(stripslashes($q['file']));
        header("content-type: application/pdf"); //for pdf file
        header('Accept-Ranges: bytes');
        header('Content-Transfer-Encoding: binary');
        echo $file;
    }

    /*

      download file
      <?php
      $r="select * from file";
      $rs=$con->query($r);
      while($q=$rs->fetch_assoc()){
      $file=base64_decode(stripslashes($q['Fdata']));
      header("content-type: application/pdf");//for pdf file
      header('Accept-Ranges: bytes');
      header('Content-Transfer-Encoding: binary');
      echo $file;}
      ?>
     */

    $conn->close();

    /*
      $sql = "INSERT INTO student (
      student.nic,
      student.registrationNo,
      student.attempt,
      student.indexNo,
      student.firstName,
      student.lastName,
      student.password) VALUES ('".$nic."','".$regno."','".$attempt."','".$indexno."','".$firstname."','".$lastname."')";
     * 
     * 
     * 
     *      */
}
?>


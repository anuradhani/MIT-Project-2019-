<?php

include 'dbconnection.php';

//$server = "localhost";
//$username = "root";
//$password = "";
//$database = "bitsms";

$conn = new mysqli($server, $username, $password, $database);
echo 'one';
if ($conn->connect_error) {
    die($conn->connect_error);
}

if (isset($_POST['submit'])) {
    $stureg = "1000";
    echo 'two';

    $name = ($_FILES['fileToUpload']['name']);
    $f = ($_FILES['fileToUpload']['tmp_name']);
    $ftype = ($_FILES['fileToUpload']['type']);
    $cont = base64_encode(file_get_contents(addslashes($f)));

    if ($ftype == 'application/pdf') {
        $sql = "INSERT INTO `submission`(`registrationNo`, `Sub_Type`, `Sub_ID`, `file`) VALUES ('$stureg', '1', '1', '$cont')";
        if ($conn->query($sql) == TRUE) {
            echo 'done';
        } else {
            echo 'error';
        }
    } else {
        echo 'error type';
        echo $ftype;
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


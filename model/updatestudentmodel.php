<?php

include './dbconnection.php';

if (isset($_POST['submit'])) {
//https://www.codemiles.com/php-tutorials/upload-pdf-file-in-php-t1486.html
$id = $_POST['id'];
$nic = $_POST['nic'];
$registrationNo = $_POST['registrationNo'];
$indexNo = $_POST['indexNo'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contactNo = $_POST['contactNo'];

$sql = "UPDATE `student` SET `nic`='$nic',`registrationNo`='$registrationNo',`contactNo`='$contactNo',`indexNo`='$indexNo',`FirstName`='$firstName',`LastName`='$lastName',`email`='$email'  WHERE `autoId` = '$id'";

if ($conn->query($sql) == TRUE) {

        echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Updated the record')==true){window.location.href = '../studentlist.php';};};</script> ";
}else
        echo "<script type='text/javascript'>window.onload = function() {if(confirm('Error occured')==true){window.location.href = '../editprofile.php';};};</script> ";
#endIF

$conn->close();
}
?>


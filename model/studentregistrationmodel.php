<?php

include 'dbconnection.php';



$conn = new mysqli($server,$username,$password,$database);

if($conn->connect_error){
   die($conn->connect_error); 
}

if (isset($_POST['studentreg'])) {
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $nic = $_POST['NIC'];
    $attempt = $_POST['Attempt'];
    $email = $_POST['InputEmail'];
    $regno = $_POST['RegistrationNo'];
    $indexno = $_POST['IndexNo'];
    $contactNo = $_POST['contactNo'];
    
    $sql = "INSERT INTO `bitsmsdb1`.`student`(`nic`, `registrationNo`, `attempt`,`email`,`indexNo`, `firstName`, `lastName`, `password`,`contactNo`) VALUES ('$nic','$regno','$attempt','$email','$indexno','$firstname','$lastname','$nic','$contactNo')";
    if($conn->query($sql)==TRUE){
         echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Saved')==true){window.location.href = '../studentregistration.php';};};</script> "; 
              }else{
         echo "<script type='text/javascript'>window.onload = function() {if(confirm('Error Occured')==true){window.location.href = '../studentregistration.php';};};</script> "; 
    }
    
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


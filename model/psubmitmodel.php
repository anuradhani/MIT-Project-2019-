<?php

include './dbconnection.php';
session_start();

if (isset($_POST['submit'])) {
    $stureg =$_SESSION['resgistrationNo'];
    //https://www.codemiles.com/php-tutorials/upload-pdf-file-in-php-t1486.html
    
    define("filesplace", "../files/proposals");

    $sql = "INSERT INTO `submission`(`registrationNo`, `Sub_Type`, `Sub_ID`) VALUES ('$stureg', '2', '2')";
    $sql2="UPDATE `student` SET `pro`='1' WHERE `registrationNo`=`registrationNo=`$stureg``";
    if ($conn->query($sql)==TRUE && $conn->query($sql2)){
        if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {

            if ($_FILES['fileToUpload']['type'] != "application/pdf") {
                echo "<p>Class notes must be uploaded in PDF format.</p>";
            } else {

                $result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], filesplace . "/$stureg.pdf");
                if ($result == 2)
                    echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Uploaded the proposal')==true){window.location.href = '../p_submit.php';};};</script> "; // change this to redirect to the same page
                else
                    echo "<script type='text/javascript'>window.onload = function() {if(confirm('Error occured')==true){window.location.href = '../p_submit.php';};};</script> "; // change this to redirect to the same page
            } #endIF
        } #endIF
    } else {
        echo "<script type='text/javascript'>window.onload = function() {if(confirm('Error occured')==true){window.location.href = '../p_submit.php';};};</script> "; // change this to redirect to the same page
           
    }
    $conn->close();
}
?>



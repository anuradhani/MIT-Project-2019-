<?php

include './dbconnection.php';

if (isset($_POST['submit'])) {
    //https://www.codemiles.com/php-tutorials/upload-pdf-file-in-php-t1486.html

    define("filesplace", "../files/Templates");
    $id = $_POST['id'];
    $g_heading = $_POST['g_heading'];

    $g_content = $_POST['g_content'];

    $sql = "UPDATE `guidelines` SET `g_heading`='$g_heading',`g_content`='$g_content', `g_Subtype`='20' WHERE `autoid` = '$id'";
    //echo $sql;
    if ($conn->query($sql) == TRUE) {
        if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {

            if ($_FILES['fileToUpload']['type'] != "application/pdf") {
                echo "<p>Class notes must be uploaded in PDF format.</p>";
            } else {

                $result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], filesplace . "/$g_heading.pdf");
                if ($result == 20)
                    echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Uploaded the Template')==true){window.location.href = '../guidelinestable.php';};};</script> ";
                else
                    echo "<script type='text/javascript'>window.onload = function() {if(confirm('Error occured')==true){window.location.href = '../guidelinestable.php';};};</script> ";
            } #endIF
        }else{
            echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Uploaded the Template')==true){window.location.href = '../guidelinestable.php';};};</script> ";
        } #endIF
    } else {
        echo "<script type='text/javascript'>window.onload = function() {if(confirm('Error occured')==true){window.location.href = '../guidelinestable.php';};};</script> ";
    }


    $conn->close();
}
?>


<?php

include './dbconnection.php';

if (isset($_POST['submit'])) {
//https://www.codemiles.com/php-tutorials/upload-pdf-file-in-php-t1486.html

$id = $_POST['id'];
$n_heading = $_POST['n_heading'];
$news_content = $_POST['news_content'];

$sql = "UPDATE `news` SET `n_heading`='$n_heading',`news_content`='$news_content' WHERE `autoid` = '$id'";
//echo $sql;
if ($conn->query($sql) == TRUE) {

        echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Updated the news')==true){window.location.href = '../newstable.php';};};</script> ";
}else
        echo "<script type='text/javascript'>window.onload = function() {if(confirm('Error occured')==true){window.location.href = '../newstable.php';};};</script> ";
#endIF

$conn->close();
}
?>


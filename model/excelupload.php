<?php

require('./excel/php-excel-reader/excel_reader2.php');
require('./excel/SpreadsheetReader.php');

include './dbconnection.php';
//http://www.tutorialplusplus.com/import-excel-file-data-mysql-database-php-100000084.html

if (isset($_POST['submit'])) {
    $mimes = ['application/vnd.ms-excel', 'text/xls', 'text/xlsx', 'application/vnd.oasis.opendocument.spreadsheet'];
    if (in_array($_FILES["fileToUpload"]["type"], $mimes)) {
        $uploadFilePath = '../files/' . basename($_FILES['fileToUpload']['name']);
        
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadFilePath);
        $Reader = new SpreadsheetReader($uploadFilePath);
        $totalSheet = count($Reader->sheets());
        /* For Loop for all sheets */
        for ($i = 0; $i < $totalSheet; $i++) {
            $Reader->ChangeSheet($i);
            foreach ($Reader as $Row) {
              
                $query = "INSERT INTO `student`(`nic`, `registrationNo`, `attempt`, `indexNo`, `firstName`, `lastName`, `password`, `email`,`contactNo`) VALUES ('" . $Row[0] . "','" . $Row[1] . "','" . $Row[2] . "','" . $Row[3] . "','" . $Row[4] . "','" . $Row[5] . "','" . $Row[6] . "','" . $Row[7] . "','" . $Row[8] . "')";
                $conn->query($query);
            }
        }
         echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Uploaded the file')==true){window.location.href = '../studentlist.php';};};</script> ";

    } else {
       echo "<script type='text/javascript'>window.onload = function() {if(confirm('Error occured')==true){window.location.href = '../studentlist.php';};};</script> ";
    }
}
?>

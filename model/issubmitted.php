<?php

include './model/dbconnection.php';

function isdpsubmitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '1';";

    $result = $conn->query($query);

   return $result;
}

function ispsubmitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '2';";

    $result = $conn->query($query);

   return $result;
}

function isirsubmitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '3';";

    $result = $conn->query($query);

   return $result;
}

function iscafsubmitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '4';";

    $result = $conn->query($query);

   return $result;
}
function issafsubmitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '5';";

    $result = $conn->query($query);

   return $result;
}
function ispr1submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '6';";

    $result = $conn->query($query);

   return $result;
}
function ispr2submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '7';";

    $result = $conn->query($query);

   return $result;
}
function ispr3submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '8';";

    $result = $conn->query($query);

   return $result;
}
function ispr4submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '9';";

    $result = $conn->query($query);

   return $result;
}
function ispr5submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '10';";

    $result = $conn->query($query);

   return $result;
}
function ispr6submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '11';";

    $result = $conn->query($query);

   return $result;
}
function ispr7submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '12';";

    $result = $conn->query($query);

   return $result;
}
function ispr8submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '13';";

    $result = $conn->query($query);

   return $result;
}
function ispr9submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '14';";

    $result = $conn->query($query);

   return $result;
}
function ispr10submitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '15';";

    $result = $conn->query($query);

   return $result;
}

function istdsubmitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '16';";

    $result = $conn->query($query);

   return $result;
}

function isfdsubmitted($stureg) {
    global $conn;
    $query = "SELECT COUNT(`autoid`) as count, `Sub_Date` FROM submission WHERE `registrationNo` = '$stureg' AND `Sub_Type` = '17';";

    $result = $conn->query($query);

   return $result;
}


?>


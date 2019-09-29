<?php

session_start();
include "dbconnection.php";

if (isset($_POST['email'])) {
    $query = "SELECT * FROM userdeatils WHERE email='" . $_POST['email'] . "' AND password='" . md5($_POST['password']) . "'";

    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['type'] = $row['userLevel'];
        if ($_SESSION['type'] == '1') {
            $_SESSION['username'] = "Coordinator";
        } else {
            $_SESSION['username'] = "Project Assistant";
        }
        header("Location: ../coordinatordashboard.php");
    } else {

        $query2 = "SELECT * FROM student WHERE email='" . $_POST['email'] . "' AND password='" . $_POST['password'] . "'";

        $result2 = $conn->query($query2);
        if ($result2->num_rows > 0) {
            $row2 = $result2->fetch_assoc();
            $_SESSION['userid'] = $row2['autoId'];
            $_SESSION['resgistrationNo'] = $row2['registrationNo'];
            $_SESSION['type'] = '3';
            $_SESSION['username'] = $row2['firstName'] . " " . $row2['lastName'];
            header("Location: ../studentdashboard.php");
        } else {
            header("Location: ../index.php");
        }
    }
}


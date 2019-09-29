<?php

include "./model/dbconnection.php";

function get_dp_list() {
    global $conn;
    $query = "SELECT * FROM `submission` WHERE `Sub_Type` = 13";

    $result = $conn->query($query);
    return $result;
}



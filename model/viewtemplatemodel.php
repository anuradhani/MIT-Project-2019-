<?php

include "./model/dbconnection.php";

function get_template_list() {
    global $conn;
    $query = "SELECT * FROM `guidelines`";

    $result = $conn->query($query);
    return $result;
}


  
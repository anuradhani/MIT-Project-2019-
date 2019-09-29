<?php

include "./model/dbconnection.php";

function get_guideline_table() {
    global $conn;
    $query = "SELECT * FROM `guidelines`ORDER BY g_dateNtime DESC";

    $result = $conn->query($query);
    return $result;
}

function get_guidelines($id) {
    global $conn;
    $query = "SELECT * FROM `guidelines` WHERE autoId='" . $id . "'";

    $result = $conn->query($query);
    if ($result->num_rows > 0)
        return $result->fetch_assoc();
    return NULL;
}

?>
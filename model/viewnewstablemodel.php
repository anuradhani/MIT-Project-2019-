<?php

include "./model/dbconnection.php";

function get_news_table() {
    global $conn;
    $query = "SELECT * FROM `news`ORDER BY news_dateNtime DESC";

    $result = $conn->query($query);
    return $result;
}

function show_news($id) {
    global $conn;
    $query = "SELECT * FROM `news` WHERE autoId='" . $id . "'";

    $result = $conn->query($query);
    if ($result->num_rows > 0)
        return $result->fetch_assoc();
    return NULL;
}

?>
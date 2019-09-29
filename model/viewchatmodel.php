<?php

include "./model/dbconnection.php";

function get_chat($chatId) {
   
    global $conn;
    $query = "SELECT * FROM `chat` WHERE chatID = '" . $chatId . "' ORDER BY c_dateNtime ASC";

    $result = $conn->query($query);
    return $result;
}

?>

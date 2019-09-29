<?php
include "./model/dbconnection.php";

function get_chat_list(){
    global $conn;
    $query = "SELECT DISTINCT chat.`chatId`, student.firstName, student.lastName FROM `chat` INNER JOIN `student` ON `chat`.`chatId` = `student`.`registrationNo`ORDER BY c_dateNtime ASC";
    //SELECT DISTINCT chat.`chatId`, student.firstName, student.lastName FROM `chat` INNER JOIN student ON chat.chatId = student.studentId ORDER BY c_dateNtime ASC
    
    //SELECT DISTINCT `chatId` FROM `chat` ORDER BY c_dateNtime ASC
    $result = $conn->query($query);
    return $result;
    
}
?>

<?php
include_once 'connection.php';
$message_id = $_POST['id'];
$update_message_readed= mysqli_query($con, "UPDATE `message` SET `read` = '1' WHERE `message`.`message_id` = '$message_id';");
mysqli_commit($con);
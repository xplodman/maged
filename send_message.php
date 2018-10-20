<?php
include_once 'connection.php';

$message_from = $_SESSION['maged']['user_id'];
$message_to = $_POST['to_nickname'];
$subject = $_POST['subject'];
$content = $_POST['content'];

$search_for_user = mysqli_query($con, "SELECT
  users.user_id,
  users.user_nickname,
  users.user_name,
  users.user_password
FROM
  users
WHERE
  users.user_nickname = '$message_to'")or die(mysqli_error($con));
if (mysqli_num_rows($search_for_user) != 0) {

    $row = mysqli_fetch_assoc($search_for_user);

    $insert_message = mysqli_query($con, "INSERT INTO `message` (`message_id`, `message_subject`, `message_content`, `from_user_id`, `to_user_id`, `read`) VALUES (NULL, '$subject', '$content', '$message_from', '$row[user_id]', '0');")or die(mysqli_error($con));
    mysqli_commit($con);
    ?>
     <script> location.replace("index.php?backresult=1"); </script>
    <?php
    exit;
} else {
    ?>
     <script> location.replace("index.php?backresult=0"); </script>
    <?php
    exit;
}
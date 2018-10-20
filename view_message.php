<?php include_once 'connection.php'; ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>View message</title>
</head>
<body>
<div align="left">
    <button>
        <a href="index.php">index</a>
    </button>
</div>
<div align="right">
    <button>
        <a href="login.php">logout</a>
    </button>
</div>
<?php
$message_id = $_GET['id'];
$update_message_readed= mysqli_query($con, "UPDATE `message` SET `read` = '1' WHERE `message`.`message_id` = '$message_id';");
mysqli_commit($con);

$search_for_message = mysqli_query($con, "SELECT
  users.user_nickname,
  message.message_subject,
  message.message_id,
  message.message_content,
  message.read
FROM
  message
  INNER JOIN users ON message.from_user_id = users.user_id
WHERE
  message.message_id = '$message_id'")or die(mysqli_error($con));
if (mysqli_num_rows($search_for_message) != 0) {
    $message = mysqli_fetch_assoc($search_for_message);
}else{
    header('Location: index.php');
    exit;
}
?>
<div align="center">
    your message here
    <table border="5px">
        <tr>
            <td>from : </td>
            <td><?php echo $message['user_nickname'] ?></td>
        </tr>
        <tr>
            <td>subject : </td>
            <td><?php echo $message['message_subject'] ?></td>
        </tr>
        <tr>
            <td>content : </td>
            <td><?php echo $message['message_content'] ?></td>
        </tr>
    </table>
</div>
</body>
</html>
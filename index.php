<?php include_once 'connection.php';
if (!isset($_SESSION['maged']['user_id'])){
    ?>
     <script> location.replace("login.php"); </script>
    <?php
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index page</title>
</head>
<body>
<div align="right">
    <button>
        <a href="login.php">logout</a>
    </button>
</div>
<?php
if (isset($_GET['backresult'])){
    if ($_GET['backresult']=='1'){
        ?>
        <div style="color: green;">sent</div>
        <?php
    }elseif ($_GET['backresult']=='0'){
        ?>
        <div style="color: red;">check user nickname</div>
        <?php
    }
}
?>
<div align="">
    your messages here
    <table border="1px">
        <?php
        $user_id = $_SESSION['maged']['user_id'];
        $search_for_message = mysqli_query($con, "SELECT
  users.user_nickname,
  message.message_subject,
  message.message_id,
  message.read
FROM
  message
  INNER JOIN users ON message.from_user_id = users.user_id
WHERE
  message.to_user_id = '$user_id'")or die(mysqli_error($con));
        if (mysqli_num_rows($search_for_message) != 0) {

        while($message = mysqli_fetch_assoc($search_for_message)) {
            ?>
            <tr>
                <td>from : <?php echo $message['user_nickname'] ?></td>
                <td>subject : <?php echo $message['message_subject'] ?></td>
                <td>
                    <button>
                        <a href="view_message.php?id=<?php echo $message['message_id'] ?>">View message</a>
                    </button>
                </td>
                <td>
                    <?php
                    if ($message['read']=='0'){
                        ?>
                        <button style="color: red;">
                            new
                        </button>
                        <?php
                    }else{
                        ?>
                        <button>
                            old
                        </button>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <?php
        }

        } else {

        }

        ?>
    </table>
</div>
<br>
<br>
<br>
<form action="send_message.php" method="post">
    send a message
    <table>
        <tr>
            <td>To : </td>
            <td><input type="text" name="to_nickname" required></td>
        </tr>
        <tr>
            <td>subject : </td>
            <td><input type="text" name="subject" required></td>
        </tr>
        <tr>
            <td>content : </td>
            <td><textarea name="content" required rows="7"> </textarea></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="send message">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
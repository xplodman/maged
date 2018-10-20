<?php
include_once 'connection.php';
include_once 'functions.php';
$user_nickname=$_POST['user_nickname'];
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_password = encryptIt( $_POST['user_password'] );

$search_for_user = mysqli_query($con, "SELECT
  users.user_id,
  users.user_nickname,
  users.user_name,
  users.user_password,
  users.user_email  
FROM
  users
WHERE
  users.user_name = '$user_name' OR
  users.user_nickname = '$user_nickname'OR
  users.user_email = '$user_email'")or die(mysqli_error($con));
if (mysqli_num_rows($search_for_user) == 0) {

    $insert_user = mysqli_query($con, "INSERT INTO `users` (`user_id`, `user_nickname`, `user_name`, `user_password`, `user_email`) VALUES (NULL, '$user_nickname', '$user_name', '$user_password', '$user_email');")or die(mysqli_error($con));
    mysqli_commit($con);
    ?>
    <script> location.replace("../login.php?backresult=9"); </script>
    <?php
    exit;
} else {
    ?>
    <script> location.replace("../login.php?backresult=0"); </script>
    <?php
    exit;
}
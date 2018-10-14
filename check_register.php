<?php
include_once 'connection.php';
$user_nickname=$_POST['user_nickname'];
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];

$search_for_user = mysqli_query($con, "SELECT
  users.user_id,
  users.user_nickname,
  users.user_name,
  users.user_password
FROM
  users
WHERE
  users.user_name = '$user_name' OR
  users.user_nickname = '$user_nickname'")or die(mysqli_error($con));
if (mysqli_num_rows($search_for_user) == 0) {

    $insert_user = mysqli_query($con, "INSERT INTO `users` (`user_id`, `user_nickname`, `user_name`, `user_password`) VALUES (NULL, '$user_nickname', '$user_name', '$user_password');")or die(mysqli_error($con));
    mysqli_commit($con);
        ?>
     <script> location.replace("login.php?backresult=9"); </script>
    <?php
    exit;
} else {
     ?>
     <script> location.replace("login.php?backresult=0"); </script>
    <?php
    exit;
}
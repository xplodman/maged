<?php
include_once 'connection.php';
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
  users.user_name = '$user_name' AND
  users.user_password = '$user_password'")or die(mysqli_error($con));
if (mysqli_num_rows($search_for_user) != 0) {

    $row = mysqli_fetch_assoc($search_for_user);

    $_SESSION['maged']['user_id'] = $row['user_id'];
    $_SESSION['maged']['user_nickname'] = $row['user_nickname'];
    ?>
     <script> location.replace("index.php"); </script>
    <?php
    exit;
} else {
    ?>
     <script> location.replace("login.php?backresult=0"); </script>
    <?php
    exit;
}
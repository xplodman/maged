<?php
include_once 'php/connection.php';
include_once 'php/functions.php';
$email=decryptIt($_POST['hash']);
$password = encryptIt($_POST['password']);
$search_for_email = mysqli_query($con, "SELECT
  users.user_id
FROM
  users
WHERE
  users.user_email = '$email'")or die(mysqli_error($con));
if (mysqli_num_rows($search_for_email) != 0) {


    $update_user_password= mysqli_query($con, "UPDATE `id7465941_maged`.`users` SET `user_password` = '$password' WHERE `users`.`user_email` = '$email';");


    ?>
        <script> location.replace("../login.php?backresult=1"); </script>

    <?php
    exit;
} else {
    ?>
            <script> location.replace("../login.php?backresult=0"); </script>

    <?php
    exit;
}


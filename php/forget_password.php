<?php
include_once 'connection.php';
include_once 'functions.php';
$email=$_POST['email'];
$now = date("YmdHis");
$encrypt_date=encryptIt($now);

$search_for_email = mysqli_query($con, "SELECT
  users.user_id
FROM
  users
WHERE
  users.user_email = '$email'")or die(mysqli_error($con));
if (mysqli_num_rows($search_for_email) != 0) {
    $search_for_email = mysqli_fetch_assoc($search_for_email);
    $user_id = $search_for_email['user_id'];
    
    $update_message_readed= mysqli_query($con, "UPDATE `users` SET `pin_hash` = '$encrypt_date' WHERE `users`.`user_id` = '$user_id';");

    $subject = 'the subject';
    $message = 'the pin number is : ';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($email, $subject, $message.$encrypt_date, $headers);

    ?>
    <script> location.replace("../login.php?backresult=3"); </script>
    <?php
    exit;
} else {
    ?>
    <script> location.replace("../login.php?backresult=0"); </script>
    <?php
    exit;
}
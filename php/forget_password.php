<?php
include_once 'connection.php';
include_once 'functions.php';
$email=$_POST['email'];
$encrypt_email=encryptIt($_POST['email']);

$search_for_email = mysqli_query($con, "SELECT
  users.user_id
FROM
  users
WHERE
  users.user_email = '$email'")or die(mysqli_error($con));
if (mysqli_num_rows($search_for_email) != 0) {

    $subject = 'the subject';
    $message = 'the pin number is : ';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($email, $subject, $message.$encrypt_email, $headers);

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
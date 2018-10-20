<?php
include_once 'php/connection.php';
include_once 'php/functions.php';
$pin_hash=$_POST['hash'];
$pin_hash_decrypted=decryptIt($_POST['hash']);
$password = encryptIt($_POST['password']);
$search_for_email = mysqli_query($con, "SELECT
  users.user_id
FROM
  users
WHERE
  users.pin_hash = '$pin_hash'")or die(mysqli_error($con));
if (mysqli_num_rows($search_for_email) != 0) { 
    
    if(date("YmdHis")-$pin_hash_decrypted>3600){
    ?>
            <script> location.replace("../login.php?backresult=0"); </script>
    <?php
    exit;
    }else{
        $update_user_password= mysqli_query($con, "UPDATE `id7465941_maged`.`users` SET `user_password` = '$password' WHERE `users`.`pin_hash` = '$pin_hash';");
    ?>
        <script> location.replace("../login.php?backresult=1"); </script>

    <?php
    exit;
    }
} else {
    ?>
            <script> location.replace("../login.php?backresult=0"); </script>
    <?php
    exit;
}


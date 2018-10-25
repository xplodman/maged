<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
unset($_SESSION['maged_sms']['auth']);
unset($_SESSION['maged_sms']);

?>
<script> location.replace("login.php"); </script>
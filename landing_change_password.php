<!DOCTYPE html>
<html>
<?php
include_once 'layout/header.php';
include_once 'layout/modals.php';
include_once 'php/functions.php';
if (isset($_SESSION['maged_sms'])){
    unset($_SESSION["maged_sms"]);
}
$email=$_GET['hash']
?>
<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">SMS</h1>

        </div>
        <h3>Simple Messaging System</h3>
        <p>change password.
        </p>
        <form class="m-t" role="form" action="change_password.php?hash=<?php echo $email ?>" method="post">
            <div class="form-group">
                <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
            </div>
            <button id="submit" type="submit" class="btn btn-primary block full-width m-b">Change</button>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/toastr/toastr.min.js"></script>
</body>
</html>

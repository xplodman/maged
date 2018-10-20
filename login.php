<!DOCTYPE html>
<html>
<?php
include_once 'layout/header.php';
include_once 'layout/modals.php';
include_once 'php/functions.php';
if (isset($_SESSION['maged_sms'])){
    unset($_SESSION["maged_sms"]);
}
?>
<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">SMS</h1>

            </div>
            <h3>Simple Messaging System</h3>
            <p>Perfectly designed and precisely prepared simple message system to help you to contact with your mates privately and all your data and messages will be encrypted.
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="php/check_login.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="user_name" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="user_password" required>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <a class="btn-rounded btn btn-success " type="button" data-toggle="modal" data-target="#forget_password"> Forgot password?</a>
                <a class="btn-rounded btn btn-info " type="button" data-toggle="modal" data-target="#pin_code"> Enter the pin code</a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.php">Create an account</a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script>
        <?php
        if ($_GET['backresult']=='0'){
            ?>
        $(document).ready(function() {
            Command: toastr["error"]("check username and password", "authentication error")
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        });
            <?php
        }elseif($_GET['backresult']=='1'){
                ?>
        Command: toastr["success"]("the email was sent successfully ", "Sent")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        <?php
        }elseif($_GET['backresult']=='9'){
            ?>
            Command: toastr["success"]("now you can login ", "register done...")

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

        <?php
        }
        ?>
    </script>
</body>
</html>

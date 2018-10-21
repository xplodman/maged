<!DOCTYPE html>
<html>
<?php
include_once 'layout/header.php';
include_once 'layout/modals.php';
?>
<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">SMS</h1>

            </div>
            <h3>Simple Messaging System</h3>
            <p>Perfectly designed and precisely prepared simple message system to help you to contact with your mates privately and all your data and messages will be encrypted.
            </p>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" action="php/check_register.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" onkeyup="this.value = this.value.replace(/[^A-Za-z.]/, '')" placeholder="Nickname" name="user_nickname" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="email" name="user_email" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  onkeyup="this.value = this.value.replace(/[^A-Za-z.]/, '')"  placeholder="User name" name="user_name" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="user_password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    <span class="alert-danger">
                        at least one number and one uppercase and lowercase letter, and at least 8 or more characters
                    </span>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.php">Login</a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2017 11:39:12 GMT -->
</html>

<?php include_once 'connection.php'; 

session_destroy(); //destroy the session
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
</head>
<body>
<div align="center">
    Login here
    <form action="check_login.php" method="post">
        <table>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="user_name" required></td>
            </tr>
            <br>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="user_password" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="login" value="login">
                    <button>
                        <a href="register.php">register</a>
                    </button>
                </td>
            </tr>
            <?php
            if (isset($_GET['backresult'])){
                ?>
                <tr><td style="color: red;"><?php if ($_GET['backresult']=='0'){ echo "check username or password"; }elseif($_GET['backresult']=='9'){  echo "now you can login !!";} ?></td></tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>
</body>
</html>
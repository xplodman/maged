<?php include_once 'connection.php'; ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register page</title>
</head>
<body>
<div align="center">
    Register here
    <form action="check_register.php" method="post">
        <table>
            <tr>
                <td>Nickname : </td>
                <td><input type="text" name="user_nickname" required></td>
            </tr>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="user_name" required></td>
            </tr>
            <br>
            <tr>
                <td>Password : </td>
                <td><input type="text" name="user_password" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="register" value="register">
                </td>
            </tr>
            <tr><td style="color: red;"><?php if (isset($_GET['backresult'])){ echo "enter a unique username or nickname"; } ?></td></tr>
        </table>
    </form>
</div>
</body>
</html>
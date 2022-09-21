<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1><p style="text-align:center"> Webboard JAKKAPHAT </p> </h1>
    <hr width = "100%" size = "2">
    <p>
        <form action="verify.php" method="post">
            <table style="border: 2px solid black; width:40%" align="center">
                <tr><td style="background-color:#6CD2FE;" colspan="2" align="center"> เข้าสู่ระบบ</td></tr>
                <tr><td>Login<td><input type="text" name="Login" size="50"></td>
                <tr><td>Password<td><input type="password" name="password" size="50"></td>
                <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
            </table>
        </form>
    </p>
    <center><p>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.html">กรุณาสมัครสมาชิก</a></p></center>
</body>
</html>
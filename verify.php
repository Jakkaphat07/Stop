<?php
    session_start();
    if(isset($_SESSION["id"])){
        header("Location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1><p style="text-align:center"> Webboard JAKKAPHAT </p> </h1>
    <hr width = "100%" size = "2">
    <?php
    $l = $_POST["Login"];
    $p = $_POST["password"];
    if ($l == "admin" && $p == "ad1234"){
        $_SESSION["username"] = "admin";
        $_SESSION["role"] = "a";
        $_SESSION["id"] = session_id();
        echo "<p align='center'>ยินดีต้อนรับคุณ ADMIN</p>";
        echo "<p align='center'><a href='index.php'>กลับไปหน้าหลัก</a></p>";
    }
    elseif ($l == "member" && $p == "mem1234"){
        $_SESSION["username"] = "member";
        $_SESSION["role"] = "m";
        $_SESSION["id"] = session_id();
        echo "<p align='center'>ยินดีต้อนรับคุณ MEMBER</p>";
        echo "<p align='center'><a href='index.php'>กลับไปหน้าหลัก</a></p>";
    }    
    else{
        echo "<p align='center'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</p>";
        echo "<p align='center'><a href='index.php'>กลับไปหน้าหลัก</a></p>";
    }

    ?>
</body>
</html>
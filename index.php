<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
 
<form>
    <h1><p style="text-align:center"> Webboard JAKKAPHAT </p> </h1>
    <hr width = "100%" size = "2">
    <p style="float:right">  <a href="login.html">เข้าสู่ระบบ</a></p>
    <p>
        หมวดหมู่ : <select name = "หมวดหมู่">
            <option value="-- ทั้งหมด --">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>
    </p>
    <?php
    $x = 1;
    while($x < 11){
        echo "<ul><li><a href='post.php?id=$x' >กระทู้ที่ $x </a></li></ul>";
        $x++;
        
    }
    ?>
    
</body>
</html>
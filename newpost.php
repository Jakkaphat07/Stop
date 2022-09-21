<?php
    session_start();
    if(!isset($_SESSION["id"])){
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
    <title>Document</title>
</head>
<body>
    <h1><p style="text-align:center"> Webboard JAKKAPHAT </p> </h1>
    <hr width = "100%" size = "2">
    <?php
    echo"<table>
    <tr><td>ผู้ใช้ : $_SESSION[username]</td></tr>
    <tr><td align=left>หมวดหมู่ :
    <td align=left><select name=option>
        <option value=ทั้งหมด>--ทั้งหมด--</option>
        <option value=เรื่องทั่วไป>เรื่องทั่วไป</option>
        <option value=เรื่องเรียน>เรื่องเรียน</option>
    </select></td></tr>
    <tr><td align=left>หัวข้อ : <td align=left><input type=text name=Post size=50></td></tr>
    <tr><td align=left>เนื้อหา : <td align=left><textarea name=post rows=5 cols=50></textarea></td></tr>
    <tr><td><td align=left><input type=submit value=บันทึกข้อความ></td></tr>
    <tr><td><td><a href=index.php>กลับไปหน้าหลัก</a></td></tr>";
    ?>
    
</body>
</html>
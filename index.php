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
 
<body>
    <h1><p style="text-align:center"> Webboard JAKKAPHAT </p> </h1>
    <hr width = "100%" size = "2">
    <?php
    if(isset($_SESSION["id"])){
        if($_SESSION["username"] == "admin") {
            echo "<p style=float:right>ผู้ใช้งานระบบ:$_SESSION[username] <a href=logout.php>ออกจากระบบ</a></p>";
            echo "<p>
            หมวดหมู่ : <select name = หมวดหมู่>
                <option value=-- ทั้งหมด -->--ทั้งหมด--</option>
                <option value=เรื่องทั่วไป>เรื่องทั่วไป</option>
                <option value=เรื่องเรียน>เรื่องเรียน</option>
                </select></p>";
            echo "<p><a href=newpost.php>สร้างกระทู้ใหม่</a></p>";
            
            if($_SESSION["role"]){
              $x = 1;
              while($x < 11){
                echo "<ul><li><a href='post.php?id=$x' >กระทู้ที่ $x</a>            <a href='delete.php?id=$x' > ลบ </a></li></ul>";
                $x++;
             }
            }    
        }
        elseif($_SESSION["username"] == "member"){
            echo "<p style=float:right>ผู้ใช้งานระบบ:$_SESSION[username] <a href=logout.php>ออกจากระบบ</a></p>";
            echo "<p>
            หมวดหมู่ : <select name = หมวดหมู่>
                <option value=-- ทั้งหมด -->--ทั้งหมด--</option>
                <option value=เรื่องทั่วไป>เรื่องทั่วไป</option>
                <option value=เรื่องเรียน>เรื่องเรียน</option>
                </select></p>";
            echo "<p><a href=newpost.php>สร้างกระทู้ใหม่</a></p>";
            $x = 1;
              while($x < 11){
                echo "<ul><li><a href='post.php?id=$x' >กระทู้ที่ $x</a> </li></ul>";
                $x++;
             }
        }
    }
    
    else{
        echo "<p style=float:right><a href=login.php>เข้าสู่ระบบ</a></p>";
        echo "<p>
        หมวดหมู่ : <select name = หมวดหมู่>
            <option value=-- ทั้งหมด -->--ทั้งหมด--</option>
            <option value=เรื่องทั่วไป>เรื่องทั่วไป</option>
            <option value=เรื่องเรียน>เรื่องเรียน</option>
            </select></p>";
        $x = 1;
        while($x < 11){
            echo "<ul><li><a href='post.php?id=$x' >กระทู้ที่ $x  </a></li></ul>";
            $x++;
        }
            
    }
     ?>
</body>
</html>
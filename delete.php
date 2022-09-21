<?php
    session_start();
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
    <?php
    $num = $_GET['id'];
    echo"ลบกระทู้หมายเลข $num<br>";
    echo"<a href=index.php>กลับไปหน้าหลัก</a>";
    ?>
    
</body>
</html>
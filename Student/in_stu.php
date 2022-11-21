<?php
include ("./inc/conn.php");
include ("./inc/insert.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>صفحة تسجيل الدخول</title>
</head>
<body>
    <form action="./in_stu.php" method="POST" >
        <img src="./image/images-48.jpeg" class="rounded-circle" alt="user">
        <br><br><br>
        <h2> سجل الطالب</h2>
        <input type="text" name="name" placeholder=" اسم الطالب">
        <input type="number" name="phone" placeholder=" رقم الهاتف">
        <input type="text" name="section" placeholder=" التخصص  ">
        <input type="text" name="address" placeholder=" العنوان  ">
        <input type="submit" name="send" value="تسجيل الدخول" > 
    </form>
</body>
</html>
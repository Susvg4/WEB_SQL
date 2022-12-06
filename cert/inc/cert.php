<?php
session_start();
if(isset($_POST['add'])){

    if(empty($_POST['name'])){
       $_SESSION['massge'] = "يرجي ادخال اسم الطالب";
    }elseif(empty($_POST['teaher'])){
        $_SESSION['massge'] = "يرجي ادخال اسم الاستاذ";
    }elseif(empty($_POST['numCert'])){
        $_SESSION['massge'] = "يرجي ادخال  رقم الشهادة";
    }else{

        header('Content-type: image/jpeg');//لتعامل مع الصور
        $font=realpath('../style/arial.ttf');//استدعاء الخط
        $image=imagecreatefromjpeg("../image/cer.jpg");//استداء الشهادة
        $color=imagecolorallocate($image ,51,51,102); //لون الصورة

       
        //45 حجم الخط
        //0 
        //120 ابتعاد من اليسار
        // 530 ابعاد من الاعلي
        //$font الون
        //$font الخط
        //$name اسم الطالب
        imagettftext($image,  35, 0, 120, 530, $color, $font, $_POST['name']); 
        imagettftext($image, 20, 0, 255, 1130, $color, $font, $_POST['teaher']); 
        imagettftext($image, 20, 0, 255, 1190, $color, $font,  $_POST['numCert']); 
        imagejpeg($image);
        imagejpeg($image,"Student/".$_POST['name'].".jpg");
        imagedestroy($image);

    }
   
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show[Certificate]</title>
    <style>
        body{
            background-color:black;
        }
        center{
            margin-top: 200px;
        }
        h1{
            border-radius: 20px;
            background-color: darkcyan;
            width: 450px;
        }
        h2{
           border-radius: 20px;
           background-color: darkcyan;
           padding: 25px;
        }
    </style>
</head>
<body>
        <center>
            <h1>الحقـــول المطلوبــة عند سحب الشهادة</h1>
            <h2>
                <?php
                    require './massge.php';
                ?>
            </h2>
        </center>
</body>
</html>
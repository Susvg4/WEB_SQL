<?php
//Connect File
include './include/conndb.php';
// INSERT
$name=   $_POST['fullname'];
$Phone=    $_POST['phone'];
$email=       $_POST['email'];
$Section=    $_POST['section'];
//======================END POST VALUE========

//======================VALUDATION TEST=============
if(isset($_POST['send'])){
   //تحقق من عدم استقبال اسكربتات 
  $Fristname=   mysqli_real_escape_string( $conn,$_POST['fullname']);
  $Lastname=    mysqli_real_escape_string($conn,$_POST['phone']);
  $email=       mysqli_real_escape_string($conn,$_POST['email']);
  $Lastname=    mysqli_real_escape_string($conn,$_POST['section']);
    $add ="INSERT INTO users (fullname, phone, email, section)
    VALUES ('$name',  '$Phone', '$email', '$Section')";

    if(empty($name)){
         echo 'يرجي ادخال الاسم الكامل';
    }elseif(empty($Phone)){
        echo 'يرجب ادخال الرقم الصحيح';
    }elseif(empty($email)){
         echo 'يرجي ادخل ايميل صحيح';

    //=======TEXT EMAIL ==============
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo 'يرجي @لايميل';
    }elseif(empty($Section)){
      echo 'يرجب ادخال التخصص ';
    }else{
      if(mysqli_query($conn,$add)) {
        header('Location:regstar.php');
        
      }else{
        echo 'Error:'. mysqli_error($conn);
      }
      
    } 
   
}
//===================VALUDATION END===================


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>تسجيل الدخول</title>
</head>
<body > 
<div class="header container ">
        <img src="image/log.jpeg"/>
        <ul class="nav">
            <li class="nav-item mainCon">
              <a class="nav-link text-info " href="#">الصفحة الرئسية</a>
            </li>
            <li class="nav-item mainCon">
              <a class="nav-link text-info" href="show.php">عرض البيانات المخرنة</a>
            </li>  
          </ul>
</div>
      <form action="regstar.php" method="POST" class="container text-success pt-2 ">
       </div>
        <div class="input-group mb-3">
           <div class="input-group-prepend">
             <span class="input-group-text">root@</span>
           </div>I
           <input type="text" name="fullname" class="form-control" placeholder="الاسم بالكامل">
         </div>
         
         <div class="input-group mb-3">
           <div class="input-group-prepend">
             <span class="input-group-text">Phone</span>
           </div>I
           <input type="text" name="phone" class="form-control" placeholder=" الرقم الهاتف">
         </div>

         <div class="input-group mb-3">
           <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني">
           <div class="input-group-append">
             <span class="input-group-text">@example.com</span>
           </div>
         </div>

         <div class="input-group mb-3">
           <div class="input-group-prepend">
             <span class="input-group-text">Section</span>
           </div>
           <input type="text" name="section" class="form-control" placeholder=" التخصص ">
         </div>

       <button type="submit" name="send" class="btn btn-primary container-fluid zer">تسجيل </button>
     </form>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
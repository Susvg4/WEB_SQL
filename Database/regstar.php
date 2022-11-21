<?php
//Connect File
include('./include/conndb.php');
include ("./include/insert.php");
// INSERT


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>تسجيل الدخول</title>
</head>
<body > 
    
      <form action="regstar.php" method-="POST" class="container-fluid text-success pt-2 ">
      <div class="header container-fluid ">
        <img src="image/log.jpeg"/>
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link text-info bg-danger" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white bg-danger" href="show.php">SHOW ALL USERS IN THE WEBSITE...!</a>
            </li>  
          </ul>
    </div>
        <div class="input-group mb-3">
           <div class="input-group-prepend">
             <span class="input-group-text">root</span>
           </div>I
           <input type="text" name="fname" class="form-control" placeholder="الاسم الاول">
         </div>
         <div class="input-group mb-3">
           <div class="input-group-prepend">
             <span class="input-group-text"> rootadmin@</span>
           </div>
           <input type="text" name="lname" class="form-control" placeholder="الاسم الاخير">
         </div>
         <div class="input-group mb-3">
           <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني">
           <div class="input-group-append">
             <span class="input-group-text">@example.com</span>
           </div>
       <button type="submit" name="se" class="btn btn-primary container-fluid">تسجيل </button>
     </form>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
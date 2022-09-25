<?php

include './include/conndb.php';
$show = mysqli_select_db($conn,'win');//connected to data base
$req = "SELECT * FROM users ";//connected to tabel
$query = mysqli_query($conn,$req);// show query

$users = mysqli_fetch_all($query,MYSQLI_ASSOC);//conster new .show


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/show.css">
    <title>SHOW ALL USERS</title>
</head>
<body >
    <div class="container mt-3">
        <nav class="navbar navbar-expand-sm bg-light">
            
            <!-- Links -->
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                 <img src="image/log.jpeg" alt="Logo" style="width:80px;">
               <ul class="navbar-nav ">
                <li class="nav-item active text-info mainCon">
                  <a class="nav-link " href="regstar.php">الصحة التسجيل </a>
                </li>
                <li class="nav-item  text-info mainCon">
                  <a class="nav-link" href="#">الصفحة الرئسية</a>
                </li>
             </nav>
          </nav>
</div>
 <!------------------------------------------->
 <div class="container mt-3">
        <h2 class="text-bg-primary text-center">البيانات الطلاب كلية علوم الحاسوب وتقاتة المعلومات الدفعة السادسة</h2>          
        <table class="table table-bordered border border-warning  bor ">
          <thead>
            <tr>
              <th>الفهرس</th>
              <th>الاسم بالكامل</th>
              <th>الرقم الهاتف</th>
              <th>البريد الالكتروني</th>
              <th> التخصص</th>
            </tr>
          </thead>
          <?php foreach($users as $user):?>
          <tbody>
          <tr>
               <td><?php echo htmlspecialchars($user['id']); ?></td>
              <td><?php  echo htmlspecialchars($user['fullname']);?></td>
              <td><?php echo htmlspecialchars($user['phone']);?></td>
              <td><?php echo htmlspecialchars($user['email']); ?></td>
              <td><?php echo htmlspecialchars($user['section']); ?></td>
            </tr>
          </tbody>
          <?php endforeach ?>
        </table> 
      </div>
      <!-------------------END LABE-------------------->

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
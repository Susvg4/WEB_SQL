<?php

include './include/conndb.php';
$show = mysqli_select_db($conn,'win');//connected to data base
$req = "SELECT * FROM users ";//connected to tabel
$query = mysqli_query($conn,$req);// show query

$users = mysqli_fetch_all($query,MYSQLI_ASSOC);//conster new .show


//SHOW ALL USERS



//IN THE ARREY


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>SHOW ALL USERS</title>
</head>
<body >
    <div class="container mt-3">
        <nav class="navbar navbar-expand-sm bg-light">
            
            <!-- Links -->
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                 <img src="image/log.jpeg" alt="Logo" style="width:80px;">
               <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link bg-info text-white" href="regstar.php"> GO TO HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ABOUT</a>
                </li>
             </nav>
          </nav>
</div>
 <!------------------------------------------->
 <div class="container mt-3">
        <h2 class="text-bg-primary">Users info </h2>
        <p>table of all users in the database:</p>            
        <table class="table table-bordered border border-warning">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          <?php foreach($users as $user):?>
          <tbody>
          <tr>
              <td><?php  echo htmlspecialchars($user['fname']);?></td>
              <td><?php echo htmlspecialchars($user['lname']);?></td>
              <td><?php echo htmlspecialchars($user['email']); ?></td>
            </tr>
          </tbody>
          <?php endforeach ?>
        </table> 
      </div>
      <!-------------------END LABE-------------------->

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
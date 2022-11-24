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
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>
<body dir="rtl">
    <?php
    #الاتصال 
    $host= 'localhost';
    $user= 'root';
    $pass='';
    $db= 'stu_maneger';
    $conn= mysqli_connect($host,$user,$pass,$db);
    $res = mysqli_query($conn,"SELECT * FROM studant1 ");// show query
    #button value------------------
    $id= '';
    $name= '';
    $address ='';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if(isset($_POST['name'])){
       $name = $_POST['name']; 
     
    }
    if(isset($_POST['address'])){
       $address = $_POST['address'];
      
    }
    //===================Error Arrey===================
     $errors= [
    'idError' => '',
    'nameError' => '',
    'addressError' => '',
    ];

    $sqls= '';
    if(isset($_POST['add']))
    {
                if(empty($id)){
                    $errors['idError']='يرجي ادخال الرقم التسلسلي ';
                }
                if(empty($name)){
                    $errors['nameError']='يرجي ادخال  الاسم';
                }
                if(empty($address)){
                    $errors['addressError']='يرجي ادخال العنوان '; 

                }if(!array_filter($errors)){
                //التمرير علي شكل النصوص
                $id=       mysqli_real_escape_string( $conn,$_POST['id']);
                $name=     mysqli_real_escape_string($conn,$_POST['name']);
                $address=  mysqli_real_escape_string($conn,$_POST['address']);

                $sqls = "insert into studant1 value($id,'$name','$address')";
                mysqli_query($conn,$sqls);
                $_SESSION['massge'] = "  تم اضافة طالب بنجاح"  ;
                header("location: index.php");
                exit(0);
            }

            }if(isset($_POST['del'])){
                $sqls = "delete from studant1 where id = '$id'";
                mysqli_query($conn,$sqls);
                $_SESSION['massge'] = "تم حذف طالب";
                header("location: index.php");
                exit(0);
            }
        
    ?>
    <div id="mather">
        <header>  شــــــاشة تسجيــــل بيانات الطلاب حذف الطالب برقم التسلسلي</header>
          <?php
          require './inc/massge.php';
          ?>
        <form method="post">
             <!---حوحي التحكم---->
            <aside>
               <div id="div">
                    <img src="./image/log.jpeg" alt="لوجو الموقع" width="250" height="100">
                    <h2 class="dis">لوحة التسجيل</h2>
                    <label >رقم الطالب</label>
                    <br>
                    <input type="text" name="id" id="id" ><br>
                    <label >اسم الطالب</label><br>
                    <input type="text" name="name" id="name"><br>
                    <label >عنوان الطالب</label><br>
                    <input type="text" name="address" id="address"><br><br>
                    <button name="add">اضافة طالب</button>
                    <button name="del">حذف طالب</button>
               </div>
          </aside>
           <!---  عرض البيانات-الطلاب--->
           <main>
               <table id="tab">
                <tr>
                    <th>رقم التسلسلي</th>
                    <th>اسم الطالب</th>
                    <th>عنوان الطالب</th>
                </tr>
                <?php
                while($row = mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo  "</tr>"  ;
                }
                ?>
               </label>
           </main>
        </form>
    </div>
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
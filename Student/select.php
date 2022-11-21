<?php
include ("./inc/conn.php");
$req = "SELECT * FROM sex ";
$result = mysqli_query($conn,$req);// show query


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         .tab{padding: 4px 20px ; direction: rtl;
            }
       table{width: 90%; border: solid #990 1px;
            border-radius: 3px 3px 3px 3px ;
            padding: 4px 4px 4px 4px;
           }
       h2{text-align: center;}
      tr{background-color:aqua;}
     </style>
    <title>استعلام البيانات</title>
</head>
<body>
    <div class="tab">
    <?php
    echo "<h2>بيانات الطلاب</h2>";
      echo "<table width='50' align=center>";
      echo "<tr bgcolor='#CCCCCC'>" ;
      echo "<td> الاسم</td>";
      echo "<td> الجوال</td>";
      echo "<td> التخصص</td>";
      echo "<td> العنوان</td>";
      echo "<td> التعديل</td>";
      echo " </tr>";
      
    while($res = mysqli_fetch_array($result)){
         echo "<tr>";
         echo "<td>".$res['name']."</td>";
         echo "<td>".$res['phone']."</td>";
         echo "<td>".$res['section']."</td>";
         echo "<td>".$res['address']."</td>";
         echo "<td><a href='edit.php?id=$res[id]'>تعديل</a> | <a href='delete.php?id=$res[id]'>حذف</a></td>";
    }
echo"</table>";
?>

</body>
</html>
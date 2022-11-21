<?php

$Name=          $_POST['name'];
$Phone=        $_POST['phone'];
$Secton=       $_POST['section'];
$Address =         $_POST['address'];

//======================END POST VALUE========
//===================Error Arrey===================
$errors= [
  'NameError' => '',
  'PhoneError' => '',
  'SectionError' => '',
  'AddressError' => '',
];

//========================end ===========================

//======================VALUDATION TEST=============
if(isset($_POST['send'])){
 
   
    //التحقق من ادخال الاسم الاول
    if(empty($Name)){
      $errors['NameError']='يرجي ادخال الاسم ';
      //التحقق من ادخال الاسم الاخير
    }
    if(empty($Phone)){
      $errors['PhoneError']='يرجي ادخال  الرقم';
      //التحقق من ادخل الايميل
    }
    if(empty($Secton)){
          $errors['SectionError']='يرجي ادخال التخصص '; 
    } 
    if(empty($Address)){
          $errors['AddressError']='يرجي ادخال العنوان '; 
    }       
    
    //تحقق لايوجد اخطاء
    if(!array_filter($errors)){
      //التمرير علي شكل النصوص
      $Name=   mysqli_real_escape_string( $conn,$_POST['name']);
      $Phone=    mysqli_real_escape_string($conn,$_POST['phone']);
      $Secton=       mysqli_real_escape_string($conn,$_POST['section']);
      $Address=       mysqli_real_escape_string($conn,$_POST['address']);
       //دالة استعلام
      $add ="INSERT INTO sex (name, phone, section, address)
      VALUES ('$Name',  '$Phone', '$Secton','$Address')";
       //
      if(mysqli_query($conn,$add)) {
          echo "<script>alert('تم اضافة بنجاح') </script>";
          //echo header('Location:in_stu.php');
          mysqli_close($conn); 

      }else{
        echo 'Error:'. mysqli_error($conn);
      }
    }
     
}

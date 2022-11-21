<?php
//===========================POST VALUE=============================
$Fristname=   $_POST['fname'];
$Lastname=    $_POST['lname'];
$email=       $_POST['email'];
//======================END POST VALUE========

//======================VALUDATION TEST=============
if(isset($_POST['se'])){
   //تحقق من عدم استقبال اسكربتات 
  $Fristname=   mysqli_real_escape_string( $conn,$_POST['fname']);
  $Lastname=    mysqli_real_escape_string($conn,$_POST['lname']);
  $email=       mysqli_real_escape_string($conn,$_POST['email']);
  
    $add ="INSERT INTO users (fname, lname, email)
    VALUES ('$Fristname', '$Lastname', '$email')";

    if(empty($Fristname)){
         echo 'يرجي ادخال الاسم الاول';
    }elseif(empty($Lastname)){
        echo 'يرجب ادخال الاسم الاخير';
    }elseif(empty($email)){
         echo 'يرجي ادخل ايميل صحيح';

    //=======TEXT EMAIL ==============
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo 'يرجي @لايميل';
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
<?php
   if(isset($_SESSION['massge'])):
?>
  
  <?= $_SESSION['massge'] ;?>
  
<?php
  unset($_SESSION['massge']);
  endif
?>
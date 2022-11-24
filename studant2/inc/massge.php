<?php
   if(isset($_SESSION['massge'])):
?>
<div class="alert alert-warning alert-dismissible">
    <strong>نتيه!</strong> <?= $_SESSION['massge'] ;?>
  </div>
<?php
  unset($_SESSION['massge']);
  endif
?>
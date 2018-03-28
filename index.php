<?php
  echo "show $varInc \n";
  include "includeMe.php";
  echo "show $varInc";
  $variable="house";
  $notset=NULL;
  if(isset($variable)){
    echo "<strong>variable is set!</strong>";
  }
  if(isset($notset)){
    echo "<strong>notset is set!</strong>";
  }
  echo "<br>" . isset($variable) . " nanter";
?>

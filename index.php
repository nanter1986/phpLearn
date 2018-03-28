<?php
  echo "show $varInc \n";
  include "includeMe.php";
  echo "show $varInc";
  function boldSomething($text){
    echo "<strong>" . $text . "</strong>";
  }
  if(function_exists("boldSomething")){
    echo "boldSomething exists";
  }

  echo boldSomething("im hot");
?>

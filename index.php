<?php
  $myText="Nanter and Alina!";
  $explodedText=explode(" ",$myText,3);
  foreach($explodedText as $e){
    echo $e . "\n";
  }
  $implodedText=implode(", ",$explodedText);
  echo $implodedText;
?>

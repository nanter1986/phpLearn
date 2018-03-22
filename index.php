<?php
  $name="I'm Nanter";
  $separate=" & ";
  $name2="I'm Alina";
  $longString=$name . $separate . $name2;
  $replace=str_replace("I'm","Here is",$longString);
  echo $replace;
?>

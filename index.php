<?php
  $name="I'm Nanter and I mean it!";
  $separate=" & ";
  $name2="I'm Alina";
  $longString=substr($name,11,5) . $separate . $name2;
  $replace=str_replace("I'm","Here is",$longString);
  echo $replace;
?>

<?php
  $name="I'm Nanter and I mean it!";
  $separate=" & ";
  $name2="i'm alina";
  $longString=substr($name,11,5) . $separate . ucwords($name2);
  $replace=str_replace("I'm","Here is",$longString);
  echo strtoupper($replace);
?>

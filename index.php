<?php
  $myArray=array("I'm Nanter and I mean it!"," & ","i'm alina");
  $name="I'm Nanter and I mean it!";
  $separate=" & ";
  $name2="i'm alina";
  $longString=substr($myArray[0],11,5) . $separate . ucwords($myArray[2]);
  $replace=str_replace("I'm","Here is",$longString);
  echo strtolower($replace);
  #######################
  $theElement=htmlentities("<font>");
  echo "Element<font> is &rarr; " . $theElement;
?>

<?php
  $myArray=array("me"=>"I'm Nanter and I mean it!","sep"=>" & ","her"=>"i'm alina");
  $longString=substr($myArray["me"],11,5) . $myArray["sep"] . ucwords($myArray["her"]);
  $replace=str_replace("I'm","Here is",$longString);
  echo strtolower($replace);
  #######################
  $theElement=htmlentities("<font>");
  echo "Element<font> is &rarr; " . $theElement;
?>

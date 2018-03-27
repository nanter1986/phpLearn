<?php
  $char=array("a","b","c","arrayInside"=>array("x","y","z"));
  foreach($char as $e){
    if(is_array($e)){
      continue;
    }
    echo $e . "\n";
  }
?>

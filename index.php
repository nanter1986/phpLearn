<?php
  include "includeMe2.php";
  $aVar=file_get_contents("includeMe2.html");
  echo "$aVar \n";
  $now= time();
  echo date("F j, y, g:i a" ,$now);

?>

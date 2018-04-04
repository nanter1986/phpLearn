<?php
  if(!isset($_SESSION)){
    session_start();
    echo 'session started';
  }

  include "includeMe.php";
  $aVar=file_get_contents("includeMe2.html");
  echo "$aVar \n";
  $now= mktime(23,0,0,7,13,1986);
  echo date("F j, y, g:i a" ,$now);
  $_SESSION['ability']='im awesome';
  $_SESSION['weakness']='cereal';
  

?>

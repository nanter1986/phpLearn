<?php
  setcookie("nanter1986","awesome",time()+60*60*5);
  if(!isset($_SESSION)){
    session_start();
    echo 'session started';
  }

  $aVar0=file_get_contents("hhh.html");
  $aVar=file_get_contents("includeMe2.html");
  echo "$aVar0 \n";
  echo "$aVar \n";
  $now= mktime(23,0,0,7,13,1986);
  echo date("F j, y, g:i a" ,$now);
  $_SESSION['ability']='im awesome';
  $_SESSION['weakness']='cereal';
  setcookie("nanter1986","",time-3600);
  $headers="";
  $params="-fnanter1986@gmail.com";
  mail("nanter1986@gmail.com","index","something",$headers,$params);


?>

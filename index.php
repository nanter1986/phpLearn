<?php
  setcookie("nanter1986", "awesome", time()+60*60*5);
  if (!isset($_SESSION)) {
      session_start();
      echo 'session started';
  }

  $aVar0=file_get_contents("hhh.php");
  $aVar=file_get_contents("includeMe2.html");
  echo "$aVar0 \n";
  echo "$aVar \n";
  $now= mktime(23, 0, 0, 7, 13, 1986);
  echo date("F j, y, g:i a", $now);
  $_SESSION['ability']='im awesome';
  $_SESSION['weakness']='cereal';
  setcookie("nanter1986", "", time-3600);
  $headers="";
  $params="-fnanter1986@gmail.com";
  mail("nanter1986@gmail.com", "index", "something", $headers, $params);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>

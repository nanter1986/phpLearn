<?php
  if(!isset($_SESSION)){
    session_start();
    echo "session started\n";
  }
  if(isset($_POST['firstname'])){
    echo nl2br("your first name " . $_POST["firstname"] . "\n");
    echo nl2br("your last name " . $_POST["lastname"] . "\n");
    $youth=($_POST['age']<30?'young':'old');
    echo nl2br("you are  " . $youth . "\n");
    foreach($_SESSION as $s => $v){
      echo nl2br("\nyou $_SESSION[$s]");
    }
  }

  if(isset($_SESSION)){
    session_destroy();
    echo nl2br("\nsession destroyed\n");
  }

  echo "after destroy? " . $_SESSION['ability'];
  foreach($_SESSION as $s => $v){
    echo nl2br("\nunsetting $_SESSION[$s]");
    unset($_SESSION[$s]);
  }
  
  echo nl2br("\n" . $_SERVER["REQUEST_METHOD"]);
  echo nl2br("\n" . $_SERVER["SCRIPT_FILENAME"]);
  echo nl2br("\n" . "cookie value:" . $_COOKIE["nanter1986"]);


?>

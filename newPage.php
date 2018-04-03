<?php
  if(isset($_POST['firstname'])){
    echo nl2br("your first name " . $_POST["firstname"] . "\n");
    echo nl2br("your last name " . $_POST["lastname"] . "\n");
    $youth=($_POST['age']<30?'young':'old');
    echo nl2br("you are  " . $youth . "\n");
  }

?>

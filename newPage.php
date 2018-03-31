<?php
  if(isset($_POST['firstname'])){
    echo nl2br("your first name " . $_POST["firstname"] . "\n");
    echo nl2br("your last name " . $_POST["lastname"] . "\n");
    echo nl2br("your age " . $_POST["age"] . "\n");
  }

?>

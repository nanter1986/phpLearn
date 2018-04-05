<?php
  $err=$_FILES["uploadedFile"]["error"];
  if($err>0){
    echo "There was an error" . $err;
  }else{
    echo "file name is " . $_FILES["uploadedFile"]["name"] .  "<br>";
    echo "file type is " . $_FILES["uploadedFile"]["type"] .  "<br>";
    echo "file size is " . $_FILES["uploadedFile"]["size"] .  "<br>";
    echo "temp file in " . $_FILES["uploadedFile"]["temp_name"] .  "<br>";
  }
?>

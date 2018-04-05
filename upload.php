<?php
  $err=$_FILES["uploadedFile"]["error"];
  if($err>0){
    echo "There was an error" . $err;
  }else{
    echo "file name is " . $_FILES["uploadedFile"]["name"] .  "<br>";
    echo "file type is " . $_FILES["uploadedFile"]["type"] .  "<br>";
    echo "file size is " . $_FILES["uploadedFile"]["size"] .  "<br>";
    echo "temp file in " . $_FILES["uploadedFile"]["tmp_name"] .  "<br>";

    move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "/uploads");

    $to="nanter1986@gmail.com";
    $subject="from php";
    $message=$_FILES["uploadedFile"]["name"] . " " .
      $_FILES["uploadedFile"]["type"] . " " .
      $_FILES["uploadedFile"]["size"] . " ";
    $headers="MIME-Version: 1.0" . "\r\n";
    $headers.="Content-type:text/html; charset:iso-8859-1" . "\r\n";
    $mailed=mail($to,$subject,$message,$headers);
    echo "mailed? " . $mailed;

  }
?>

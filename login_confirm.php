<?php
$conn = new mysqli("localhost", "root", "Nn92886423","test_store");
if ($conn->connect_error) {
    echo "ERROR";
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "DONE!<br>";
}
$name=$_POST['username'];
$pass=$_POST['password'];
$query="SELECT * FROM users WHERE username='$name'";
$result=mysqli_query($conn,$query);
$array1=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($pass==$array1['password'] && $name==$array1['username'] && $name=="nanter1986"){
  echo "Log in successfully as Admin.You can add and remove products!";
}else if($pass==$array1['password'] && $name==$array1['username']){
  echo "Log in successful!";
}else if($name==$array1['username']){
  echo "incorrect password";
}else{
  echo "user doesnt exists";
}
echo "$name" . "/" . $array1['username'];
echo "$pass" . "/" . $array1['password'];
 ?>

<?php
$conn = new mysqli("localhost", "root", "Nn92886423", "test_store");
if ($conn->connect_error) {
    echo "ERROR";
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "DONE!<br>";
}
$name=$_POST['username'];
$pass=$_POST['password'];
$query="SELECT * FROM users WHERE username='$name'";
$result=mysqli_query($conn, $query);
$array1=mysqli_fetch_array($result, MYSQLI_ASSOC);
if ($pass==$array1['password'] && $name==$array1['username'] && $name=="nanter1986") {
    setcookie("userAth", "admin", time() +86400*30, "/");
    echo "Log in successfully as Admin.You can add and remove products!";
} elseif ($pass==$array1['password'] && $name==$array1['username']) {
    setcookie("userAth", "user", time() +86400*30, "/");
    echo "Log in successful!";
} elseif ($name==$array1['username']) {
    echo "incorrect password";
} else {
    echo "user doesnt exists";
}
echo "$name" . "/" . $array1['username'];
echo "$pass" . "/" . $array1['password'];
echo "<a href='index.php'>back to home</a>";

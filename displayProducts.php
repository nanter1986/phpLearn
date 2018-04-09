<?php
$conn = new mysqli("localhost", "root", "Nn92886423","test_store");
if ($conn->connect_error) {
    echo "ERROR";
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "DONE!";
}
echo nl2br("calculations start here\n");
$query="SELECT * FROM products";
$result=mysqli_query($conn,$query);
while($array1=mysqli_fetch_array($result,MYSQLI_ASSOC)){
  foreach ($array1 as $key => $value) {
    echo $value . "/";
  }
  echo "<br>";

}
echo nl2br("query ok\n");


echo nl2br("everything counted\n");



?>

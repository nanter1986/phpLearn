<?php
$conn = new mysqli("localhost", "root", "Nn92886423","test_store");
if ($conn->connect_error) {
    echo "ERROR";
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "DONE!";
}
$name=$_POST['name'];
$id=$_POST['id'];
$image=$_POST['image'];
$price=$_POST['price'];
echo $name . "<br>";
echo $id . "<br>";
echo $image . "<br>";
echo $price . "<br>";

$query="INSERT INTO products (id,name,price,image_path) VALUES($id,'$name',$price,'$image')";

if ($conn->query($query) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<br><a href='addProduct.php'>add more products</a>"


?>

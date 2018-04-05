<?php
$conn = new mysqli("localhost", "root", "Nn92886423","test_store");
if ($conn->connect_error) {
    echo "ERROR";
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "DONE!";
}
echo nl2br("calculations start here\n");
$query="SELECT COUNT(id) FROM products";
echo nl2br("query ok\n");

$count=$conn->query($query);
echo nl2br("everything counted\n");
echo nl2br("The count is: $count->num_of_rows");


?>

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
  divify($array1);

}
echo nl2br("query ok\n");
echo nl2br("everything counted\n");

function divify($arrayInput){
  $name=$arrayInput['name'];
  $price=$arrayInput['price'];
  $id=$arrayInput['id'];
  $image_path=$arrayInput['image_path'];
  $string="<div class='panel panel-primary col-md-4'>" .
            "<div class='panel-heading'>$name</div>" .
              "<div class='panel-body'>" .
              "<img src=$image_path alt=$name>" .
              "</div>" .
            "<div class='panel-footer'>$price</div>" .
            "</div>";
  echo $string;
}



?>

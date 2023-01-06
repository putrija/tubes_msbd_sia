<?php 

$conn = mysqli_connect('localhost', 'root', '', 'sman14mdn_sia');
$date = date("Y-m-d h:i:sa");
$sql = "INSERT INTO semester VALUES ('', '2', '$date', '$date')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
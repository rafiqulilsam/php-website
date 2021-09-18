<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST["fname"];
$email = $_POST["email"];
$pass1 = $_POST["password"];

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (Name, Email, Password)
VALUES ('$name', '$email', '$pass1')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
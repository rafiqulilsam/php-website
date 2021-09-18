<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST["fname"];
$email = $_POST["email"];
$mess = $_POST["message"];

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO message (Name, Email, Message)
VALUES ('$name', '$email', '$mess')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully.";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
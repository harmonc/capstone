<?php
require_once "config.php";

$sql = "INSERT INTO Names (firstname, lastname, email)
VALUES ('".$_GET["fname"]."','".$_GET["lname"]."','".$_GET["email"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
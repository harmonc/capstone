<?php
require_once "config.php";

$sql = "INSERT INTO student_entry_form (FName, LName, StudentID)
VALUES ('".$_GET["fname"]."','".$_GET["lname"]."','".$_GET["studentID"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
require_once "config.php";

$sql = "INSERT INTO student_hours (FName, LName, StudentID)
VALUES ('".$_GET["fname"]."','".$_GET["lname"]."','".intval($_GET["studentID"])."')";
printf($sql);
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
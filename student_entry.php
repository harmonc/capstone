<?php
require_once "config.php";

$sql = "INSERT INTO student_hours (FName, LName, StudentID, TotalHours)
VALUES ('".$_GET["fname"]."','".$_GET["lname"]."',".$_GET["studentID"].",".$_GET["hours"].")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

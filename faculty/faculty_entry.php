<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="utf-8" />
    <title>Student Form</title>
  </head>
  <body>
    <a href="student.php" class = "back">Back</a>

<?php
require_once "../config.php";

$sql = "INSERT INTO faculty_hours (FName, LName, faculty_email, total_hours)
VALUES ('".$_GET["fname"]."','".$_GET["lname"]."','".$_GET["email"]."',".$_GET["hours"].")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>

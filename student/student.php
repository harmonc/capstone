<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8" />
    <title>Student Form</title>
  </head>
  <body>
    <a href="./index.html" class = "back">Back</a>
      <h1>Transerve Application Form</h1>
      <form action="student_entry.php">
          <label for="fname">First name:</label><br>
          <input type="text" id="fname" name="fname"><br>
          <label for="lname">Last name:</label><br>
          <input type="text" id="lname" name="lname"><br>
          <label for="studentID">Student ID:</label><br>
          <input type="text" id="studentID" name="studentID"><br>
          <label for="box">OBU Box:</label><br>
          <input type="text" id="box" name="box"><br>
          <label for="phone">Phone:</label><br>
          <input type="text" id="phone" name="phone"><br>
          <label for="email">Email:</label><br>
          <input type="text" id="email" name="email"><br>
          <label for="class">Classification:</label><br>
          <select name="cars" id="cars">
              <option value="freshman">Freshman</option>
              <option value="sophomore">Sophmore</option>
              <option value="junior">Junior</option>
              <option value="senior">Senior</option>
          </select><br>
          <label for="date">Semester and Year you're registering for:</label><br>
          <input type="text" id="date" name="date">
          <input type="submit" value="Submit">
        </form>
      <?php
$txt = "PHP";
echo "I love $txt!";
?>

  </body>
</html>

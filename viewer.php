<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8"/>
  <title>Hours</title>
</head>
<body>
      <a href="index.html" class="back">Back</a>
<h1>Hours</h1>
<?php
require_once "config.php";
$sql = "SELECT firstname, lastname, email FROM Names";
$result = $conn->query($sql);

echo "<table><thead>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
</tr></thead><tbody>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><th>". $row["firstname"]."</th><th>".$row["lastname"]."</th><th>".$row["email"]."</th></tr>";
  }
} else {
  echo "0 results";
}
echo "</tbody></table>";
$conn->close();
?>
</body>
</html>

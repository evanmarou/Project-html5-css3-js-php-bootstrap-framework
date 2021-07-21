<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Conference";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, username, email FROM users";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['username'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "</tr>";
  }

} else {
  echo "0 results";
}
  echo "</table>";
$conn->close();
?>
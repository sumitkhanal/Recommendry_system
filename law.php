<?php
$conn = mysqli_connect("localhost", "root", "", "csv_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT AUTHOR, TITLE,CATEGORY FROM table2 where CATEGORY ID='14'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["AUTHOR"]. "</td><td>" . $row["TITLE"] . "</td><td>"
. $row["CATEGORY"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
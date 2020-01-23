<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 14px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>AUTHOR</th>
<th>TITLE</th>
<th> images</th>
<th>GENRE</th>
</tr>

    

<?php
if(isset($_POST['searchbutton'])){
    $query=$_POST['query'];
    $conn = mysqli_connect("localhost", "root", "", "books");
// Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT AUTHOR,TITLE,CATEGORY FROM booklist WHERE TITLE LIKE '%$query%' OR AUTHOR LIKE '%$query%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["AUTHOR"]. "</td><td>" . $row["TITLE"] . "</td><td>"
    . $row["CATEGORY"]. "</td></tr>";
    }
    echo "</table>";
    }
    else { echo "0 results"; }
}
$conn->close();
?>
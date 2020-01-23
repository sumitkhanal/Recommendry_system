<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="Logo.css">
    <title>BOOKSFORME</title>
</head>

<body> 
    <nav>
        <div class="logo">
            <h4>BOOKSFORME</h4>
        </div>
        <ul class="nav">
            <li>
                <a href="index.html">HOME</a>
            </li>
                <li>
                <a href="booklist.php">BOOKLIST</a>
            </li>
              <li>
                <a href="sgnup.html">SIGNUP</a>
            </li>
             <li>
                <a href="login.html">LOGIN</a>
            </li>
          
      
            <li>
               <div class="search-container">
                <form action="search.php" method="POST">
                  <input type="text" name="query"/>
                  <button><input type="submit" name="searchbutton" value="Search" /></button>
               </form>
              </div>
            </li>

        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>


<style>
table {
border-collapse: collapse;
width: 100%;
color: rgb(226, 226, 226);
font-family: 'Poppins', sans-serif;
font-size: 14px;
text-align: left;
}
th {
background-color:black ;
color: white;
padding-top:  10px;
}
tr:nth-child(even) {background-color: #1e2129;}
</style>
</head>
<body>
<table>
<tr>
<th>AUTHOR</th>
<th>TITLE</th>
<th>GENRE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "csv_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT AUTHOR, TITLE,CATEGORY FROM table2 where CATEGORYID='20'";
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
</table>
</body>
</html>
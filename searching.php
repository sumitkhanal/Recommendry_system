<?php
  include 'search.php';
if(isset($_POST['searchbutton'])){
    $query=$_POST['query'];
   $connect = new PDO('mysql:host=localhost;dbname=csv_db', 'root', '');
// Check connection
    // if ($connect->connect_error) {
    // die("Connection failed: " . $connect->connect_error);
    // }
$query = "
SELECT * FROM table2 WHERE TITLE LIKE '%$query%' OR AUTHOR LIKE '%$query%'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $rating = count_rating($row['id'], $connect);
 $color = '';
 $output .= '<img src='.$row['IMAGEURL'].' width=100 height=130 style=margin-left:400px;>
 <ul class="list-inline" data-rating="'.$rating.'" title="Average Rating - '.$rating.'" style="margin-left:400px;">
 ';
 
 for($count=1; $count<=5; $count++)
 {
  if($count <= $rating)
  {
   $color = 'color:#ffcc00;';
  }
  else
  {
   $color = 'color:#ccc;';
  }
  $output .= '<li title="'.$count.'" id="'.$row['id'].'-'.$count.'" data-index="'.$count.'"  data-business_id="'.$row['id'].'" data-rating="'.$rating.'" class="rating" style="cursor:pointer; display:inline-block; float:top; '.$color.' font-size:16px;">&#9733;</li>';
 }
 $output .= '
 </ul>
 <p style="color:rgb(226, 226, 226);margin-left:400px;">'.$row["TITLE"].'</p>
 <p style="color:rgb(226, 226, 226);margin-left:400px;">'.$row["AUTHOR"].'</p>
 <label style="color:rgb(226, 226, 226);margin-left:400px;">'.$row["CATEGORY"].'</label>
<form action="button" method="POST" style="margin-left:400px;">
                  
                  <button
  <input type="button" class="button" value="ADD TO MY BOOKLIST"></button>
               </form>
 <br><br>
 ';
}
echo $output;
}

function count_rating($business_id, $connect)
{
 $output = 0;
 $query = "SELECT AVG(rating) as rating FROM rating WHERE business_id = '".$business_id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output = round($row["rating"]);
  }
 }
 return $output;
}
?>
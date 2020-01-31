<!DOCTYPE html>
<html>
 <head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="Logo.css">
    <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>
<title>booklist</title>
<body>
<nav>
        <div class="logo">
            <h4>BOOKSFORME</h4>
        </div>
        <ul class="nav">
            <li>
                <a href="home.html">HOME</a>
            </li>
            <li>
                <a href="booklist.php">BOOKLIST</a>
            </li>
              <li>
                <a href="raedlater.php">READ LATER</a>
            </li>
            <li>
                <a href="logout.php">LOG OUT</a>
            </li>
           
        <li>
                 <div class="search-container">
                <form action="searching.php" method="POST">
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
    
 <script>
$(document).ready(function(){
 
 load_business_data();
 
 function load_business_data()
 {
  $.ajax({
   url:"searching.php",
   method:"POST",
   success:function(data)
   {
    $('#business_list').html(data);
   }
  });
 }
 
 $(document).on('mouseenter', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  remove_background(business_id);
  for(var count = 1; count<=index; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 function remove_background(business_id)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ccc');
  }
 }
 
 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  var rating = $(this).data("rating");
  remove_background(business_id);
  //alert(rating);
  for(var count = 1; count<=rating; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  $.ajax({
   url:"insert_rating.php",
   method:"POST",
   data:{index:index, business_id:business_id},
   success:function(data)
   {
    if(data == 'done')
    {
     load_business_data();
     alert("You have rate "+index +" out of 5");
    }
    else
    {
     alert("There is some problem in System");
    }
   }
  });
  
 });
});
</script>
</body>
</html>
<?php
  session_start();
  $Email=$_SESSION['Email'];
  $connect = new PDO('mysql:host=localhost;dbname=csv_db', 'root', '');
// Check connection
    // if ($connect->connect_error) {
    // die("Connection failed: " . $connect->connect_error);
    // }
$query = "
SELECT * FROM table2 WHERE AUTHOR IN (SELECT BOOKAUTHOR FROM $Email)";
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
 
 <br><br>
 ';
}
echo $output;

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
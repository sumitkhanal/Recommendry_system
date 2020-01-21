<!DOCTYPE html>
<html lang="en">
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
                <a href="#">BOOKLIST</a>
            </li>
            <li>
                <a href="sgnup.html">SIGNUP</a>
            </li>
            <li>
                <a href="logn.html">LOGIN</a>
            </li>
            <li>
              <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Submit</button>
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

    
   <div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
           
            <img src="1.jpg">
            <p class="captionText">HARRY POTTER</p>
        </div>
        <div class="imageHolder">
            <img src="2.jpg">
            <p class="captionText">FANTASTIC BEASTS</p>
        </div>
        <div class="imageHolder">
            <img src="3.jpg">
            <p class="captionText">THE LORD OF THE RING</p>
        </div>
        <div class="imageHolder">
            <img src="4.jpg">
            <p class="captionText">THE HOBBIT</p>
        </div>
        <div class="imageHolder">
            <img src="5.jpg">
            <p class="captionText">THE CRONICLES OF NARNIA</p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div>


<div class="parent">
    <div class="grid1">
        <div class="tabContainer">
    <div class="buttonContainer">
    <font color="#e2e2e2"> <h2><p >SUGGESTIONS</p></h2> </font>
        <button onclick="showPanel(0,'#1e2129')">Recommended</button>
        <button onclick="showPanel(1,'#1e2129')">Highest Rated</button>
        <button onclick="showPanel(2,'#1e2129')">Most Famous</button>
        <button onclick="showPanel(3,'#1e2129')">Children</button>
    </div>
<div class="tabPanel">


<div class="responsive">
  <div class="gallery">
    <a href="iframe.php">
      <img src="magician.jpg" alt="Cinque Terre" width="600" height="300px">
    </a>
  </div>
</div>


    
<div class="responsive">
  <div class="gallery">
    <a href="hamlet.php">
      <img src="Hamlet.jpg" alt="Cinque Terre" width="600" height="300px">
    </a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="tokillamockingbird.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="1984.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="thelordoftherings.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="thecatcherintherye.jpg" alt="Forest" width="600" height="400">
    </a>
   
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="thegreatgatsby.jpg" alt="Northern Lights" width="600" height="400">
    </a>
  
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="thelionthewitchthewardrobe.jpg" alt="Mountains" width="600" height="400">
    </a>
 </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="lordoftheflies.jpg" alt="Mountains" width="600" height="400">
    </a>
 
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="animalfarm.jpg" alt="Mountains" width="600" height="400">
    </a>
 
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="catch22.jpg" alt="Mountains" width="600" height="400">
    </a>
 
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="thegrapesofwrath.jpg" alt="Mountains" width="600" height="400">
    </a>
 
  </div>
</div>



</div>
      

    <div class="tabPanel">

  <div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a5.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>




  <div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a5.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>




  <div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a5.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a6.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a7.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>
      
<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a8.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a9.jpg" alt="Forest" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a5.jpg" alt="Northern Lights" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>




<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


    </div>
    <div class="tabPanel">Most Famous</div>
    <div class="tabPanel">Children</div>
  </div>

</div>


        <div class="grid2">
       <font color="#e2e2e2"> <h2>GENRE</h2><br></font>
        <br>
<div class="row">
  <div class="column">
    <h3><a href="#">Action</a></h3><br>
      <h3><a href="#">Anthology</a></h3><br>
      <h3><a href="#">Drama</a></h3><br>
      <h3><a href="#">Fairy Tale</a></h3><br>
      <h3><a href="#">Fiction</a></h3><br>
      <h3><a href="#">Historical Fiction</a></h3><br>
      <h3><a href="#">Humor</a></h3><br>
      <h3><a href="#">Mystery</a></h3><br>
      <h3><a href="#">Romance</a></h3><br>
      <h3><a href="#">Psychological</a></h3><br>
      <h3><a href="#">Short Story</a></h3><br>
      <h3><a href="#">Supernatural</a></h3><br>
      <h3><a href="#">Thriller</a></h3><br>
  </div>
  <div class="column">
    <h3><a href="#">Adventure</a></h3><br>
    <h3><a href="#">Autobiogrsphy</a></h3><br>
    <h3><a href="#">Fable</a></h3><br>
    <h3><a href="#">Fantasy</a></h3><br>
    <h3><a href="#">Folklore</a></h3><br>
    <h3><a href="#">Horror</a></h3><br>
    <h3><a href="#">Legend</a></h3><br>
    <h3><a href="#">Mythology</a></h3><br>
    <h3><a href="#">Poetry</a></h3><br>
    <h3><a href="#">Science Fiction</a></h3><br>
    <h3><a href="#">Tall tale</a></h3><br>
    <h3><a href="#">Suspense</a></h3><br>
  
  </div>
</div>
  </div>
</div>



<div class="relatives">
  
<div class="container">
<font color="#e2e2e2"> <h2>LATEST</h2></font>

</div>

<div class="bar ">
  <button class="bar-item " onclick="openGenre('Action')">Action</button>
  <button class="bar-item " onclick="openGenre('Adventure')">Adventure</button>
  <button class="bar-item " onclick="openGenre('Romance')">Romance</button>
</div>
<br>
<div id="Action" class="container genre">



<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="Hamlet.jpg" alt="Cinque Terre" width="600" height="300px">
    </a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="Macbeth.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="The cursed child.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="Ochello.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="The scarlet letter.jpg" alt="Forest" width="600" height="400">
    </a>
   
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="The Forsaken.jpg" alt="Northern Lights" width="600" height="400">
    </a>
  
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="The Alchemist.jpg" alt="Mountains" width="600" height="400">
    </a>
 
  </div>
</div>
</div>




<div id="Adventure" class="container genre" style="display:none">
 

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a5.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a6.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a7.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>
      
<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a8.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a9.jpg" alt="Forest" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a5.jpg" alt="Northern Lights" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>




<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>



</div>

<div id="Romance" class="container genre" style="display:none">



<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a5.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a6.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a7.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
 
  </div>
</div>
      
<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a8.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a9.jpg" alt="Forest" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="a5.jpg" alt="Northern Lights" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>




<div class="responsive">
  <div class="gallery">
    <a  href="#">
      <img src="a4.jpg" alt="Mountains" width="600" height="400">
    </a>
    </div>
</div>

</div>
</div><!--relative end-->



<div class="children">
<div class="grid4"> 
  <div class="logo2">
<font color="#e2e2e2"><p>BOOKSFORME<br></font></div>
<font color= "#a1a1a1">booksforme-Free ebooks online, here you can <i>read ebooks online</i> for free without annoying of advertising, just come and enjoy your ebooks online.<br></font>
<a href="#"><img src="twitter.jpg">Connect us on twitter</a>

</p>

</div>
<div class="grid5">

<div class="rows">
  <div class="columns" >
   <font color="#e2e2e2"> <h3>Books</h3><br></font>
    <p><a href="#">Action</a><br><br>
      <a href="#">Adventure</a><br><br>
      <a href="#">Thriller</a><br><br>
      <a href="#">Sci-fi</a><br><br>
      <a href="#">Top IMDb</a><br><br>
 </p>


  </div>
  <div class="columns">
   <font color="#e2e2e2"> <h3>BUY BOOKS</h3><br></font>
    <p>
       <a href="https://wordery.com/">Wordery</a><br><br>
      <a href="https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155">Amazon</a><br><br>
      <a href="https://www.barnesandnoble.com/">Barnes & Noble</a><br><br>
      <a href="https://www.booksamillion.com/">Books-A-Millon</a><br><br>
       <a href="https://www.hpb.com/home#product-panel-home">HALF PRICE BOOKS</a><br><br>
      <a href="https://www.powells.com/">Powell's Books</a><br><br>
      <a href="https://www.abebooks.com/">AbeBooks</a><br><br>
      <a href="https://www.betterworldbooks.com/">BetterWorldBOOKS</a><br><br>

    </p>
  </div>
  <div class="columns" >
   <font color="#e2e2e2"> <h3>HELP</h3><br></font>
    <p>
      <a href="#">Request</a><br><br>
      <a href="#">Policy</a><br><br>
      <a href="#">Contact</a><br><br>
      <a href="#">About us</a><br><br>

    </p>
  </div>
</div>




 </div>
</div>



       <script src="app.js"></script>
</body>

</html>

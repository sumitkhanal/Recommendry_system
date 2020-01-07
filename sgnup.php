<?php
require_once('config.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="sgnup.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
  
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sgnup.css">
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
                <a href="sgnup.html">SIGNUP</a>
            </li>
            <li>
                <a href="logn.html">LOGIN</a>
            </li>
         

        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>






<div class="signup">
    <form action="config.php" method="POST">
        <input type="submit" name="signupbutton"><br><br>
    <h2 style="color: #fff;">Sign Up</h2>
    <input type="text" name="username" placeholder="First name"><br><br>
    <input type="text" name="username1" placeholder="Last name"><br><br>
    <input type="password" name="pass" placeholder="Password"><br><br>    
    <input type="password" name="pass1" placeholder="Confirm Password"><br><br>   
    <input type="text" name="email" placeholder="Email address"><br><br>  
    <input type="button" value="Sign up" onclick="myFunction()"><br><br>

        <div id="msg">Congratulations You Sign Up successfully!!</div>
 
        Already have account?<a href="logn.html" style="text-decoration: none; font-family: 'Play', sans-serif; color: yellow;">&nbsp;Log In</a>
    </form>
    
    </div>

     <script src="sgnup.js"></script>
</body>
</html>

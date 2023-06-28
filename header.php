<?php  include_once "include/connection.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Recipe world 
        </title>
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="navigation.js"></script>
    </head>

    <body >
    
    <!-- header start -->

    <header>

      <div class="topnav" id="myTopnav">
        <a href="#default" id="logo">Recipe World</a>
        <div class="navbar">
          <a href="home.php" class="active">Home</a>
          <a href="blog.php">Blog</a>
          <a href="recipes.php">Recipes</a>
          <a href="about.php">About</a>
          <a href="review.php">Review</a>
          <a href="ContactUs.php">Contact Us</a>
          <a href="signup.php">Sign Up/Log In</a>
          <form id="form1" action="search.php" method="get">
            <input type="text" placeholder="Search..." name="query" />
            <button type="submit">Search</button>
          </form>          
        </div>
       
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>

    </header>

    <!--header end-->
    </body>
    </html>
   
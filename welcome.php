<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: login.php");
}




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href="styles.css">

    <title>Home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">logout</a>
      </li>
    
    </ul>

    <div class = "navbar-collapse collapse">
        <ul class = "navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link disabled" style="text-transform: uppercase" href="#" tabindex="-1" aria-disabled="true"><img width="24" height="24" src="https://img.icons8.com/material-two-tone/24/user.png" alt="user"/><?php echo "" . $_SESSION['username']?></a>
      </li>
</ul>
</div>

  </div>
</nav>



<!-- image slider open -->
<div class="slideimg">
  <div class="slideshow-container">
    <div class="slides">
      <img src="image1.jpg" alt="Image 1">
      <img src="image2.jpg" alt="Image 2">
      <img src="image3.jpg" alt="Image 3">
      <img src="image4.jpg" alt="Image 3">
    </div>
  </div>

  <script src="script.js"></script>
</div>



<!-- main content -->
<div class="btn1">
  <div class="bonafide1">
    <a href = "bonafide.php" class="textclr" > APPLY FOR BONAFIDE </a>
  </div>
  <div class="bonafide2">
    <a href = "#" class="textclr"   > ID CARD APPLICATION FORMAT</a>
  </div>
  <div class="bonafide3">
    <a href = "#" class="textclr"  > RESULTS </a>
  </div>
</div>


<div class="btn2">
  <div class="bonafide4">
    <p>General Notice Board </p>
    <div class="slider-container">
    <div class="slider-content" id="slider-content">
    <marquee  behavior="scroll" direction="up"> 
      <p>Noitce_workshop on cyber security.</p>
      <p>Kolhan university exam notice.</p>
      <p>notice registration for ncc.</p>
      <p>Notice for M.com sem 3 project.</p>
      <p>Notice regarding clc for admission.</p>
      <p>Workhshop on project work(commerce).</p>
      </marquee>
    </div>
  </div>
  </div>
  <div class="bonafide5">
    <p>Exam Notice Board</p>
    <div class="slider-container">
    <div class="slider-content" >
      <marquee  behavior="scroll" direction="up"> 
      <p>UG exam notic.</p>
      <p>important notice for UG sem 6.</p>
      <p>PG 1 Hindi mid sem exam.</p>
      <p>EXAM NOTICE FOR PG SEM-4 2020-22</p>
      <P>BBA,BCA SEM 3 INTERNAL EXAMS 2020-23</P>
      <P>NOTICE FOR M.COM SEM-4</P>
      
      </marquee>

    </div>
  </div>
  </div>
  <div class="bonafide6">
    <p> Events Notice <p>
    <div class="slider-container">
    <div class="slider-content" id="slider-content">
    <marquee  behavior="scroll" direction="up"> 
      <p>Slogan Contest.</p>
      <p>Regarding Annual Athletic Meet 2023.</p>
      <p>Annual Sports Competition 2022-24.</p>
      <p>Poster Competition</p>
      <p>Notice for cultural program</p>
      <p>Global Science and global wellbeing</p>
      </marquee>
    </div>
  </div>
  </div>
</div>


<!-- image slider end -->

<div class = "conatainer mt-4"  >
  <br>  <br>  <br>
 <!-- <h3><?php echo "Welcome  " . $_SESSION['username']?> </h3> -->
 <br>


</div>
<!-- footer open -->

<footer>
    <div class="footer-content">
      <div class="footer-section about">
        <h2>About Us</h2>
        <p>Jamshedpur Co-operative College is a symbol of the painstaking efforts of Late M. D. Madan</p>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>
        <ul>
          
          <li><a href="#">About</a></li>
          <li><a href="#">Admissions</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <div class="footer-section contact">
        <h2>Contact Us</h2>
        <p>Email: cooperativecollegejsr@gmail.com</p>
        <p>Phone: 10657-2228176</p>
      </div>
    </div>

    <div class="footer-bottom">
      &copy; 2023 Jamshedpur Co-operative College. All rights reserved.
    </div>
  </footer>

  <!-- footer close -->
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


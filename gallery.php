<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet/lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <title>Gallery</title>
    <style type="text/css">
      .gallery
      {
        margin:10px 50px;
      }
      .gallery img
      {
        width: 240px;
        padding: 5px;
        transition: .1s;
      }
      .gallery img:hover
      {
        transform: scale(1.1);
      }
    </style>
  </head>
  <body>
    <div class="container" style="-webkit-box-shadow: -1px 0px 17px -6px rgba(0,0,0,0.8);
-moz-box-shadow: -1px 0px 17px -6px rgba(0,0,0,0.8);
box-shadow: -1px 0px 17px -6px rgba(0,0,0,0.8); padding:0px 13px ">
      <div class="row">
        <div class="col-sm-6">
        <center>  
          <img src="img/logo1.png">
        </center>
        </div>
        <div class="col-sm-6" style="margin-top: auto;margin-bottom: auto;">
          <center>
          <a href="https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Fgargaviation.com%2F&amp;ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Eshare%7Ctwgr%5E&amp;text=Garg%20Aviations%20Limited%20(GAL)%20is%20a%20flight%20training%20academy%20established%20in%20the%20year%201995%20at%20Civil%20Airport&amp;url=http%3A%2F%2Fgargaviation.com%2Fgargaviation.html&amp;via=san1290kumar" class="btn" id="b">
            <i></i>
            <span class="btn btn-primary" id="l">Tweet</span></a>
          </center>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Garg Avition</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">    
        <li class="nav-item dropdown">
          <a onclick="window.location='aboutus.php';" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">About Garg Aviations</a></li>
            <li><a class="dropdown-item" href="#">Key Perssonal</a></li>
            <li><a class="dropdown-item" href="#">History & Background</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a onclick="window.location = 'whychoosegal.php';" class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Why Choose Gal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Credientials & Experience</a></li>
            <li><a class="dropdown-item" href="#">Infrastructure</a></li>
            <li><a class="dropdown-item" href="#">Aircrafts</a></li>
            <li><a class="dropdown-item" href="#">Safety</a></li>
            <li><a class="dropdown-item" href="#">Airport</a></li>
            <li><a class="dropdown-item" href="#">Approvals</a></li>
            <li><a class="dropdown-item" href="#">Accomodations</a></li>
            <li><a class="dropdown-item" href="#">Placement & Career Guidance</a></li>
            <li><a class="dropdown-item" href="#">Students Activities</a></li>
            <li><a class="dropdown-item" href="#">Testimonials</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutaviation.php">About Aviation</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" onclick="window.location='course.php';" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Course Description
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Courses Overview</a></li>
            <li><a class="dropdown-item" href="#">Private Pilot License</a></li>
            <li><a class="dropdown-item" href="#">Commercial Pilot License</a></li>
            <li><a class="dropdown-item" href="#">Cpl/IR Multi Engine Rating</a></li>
            <li><a class="dropdown-item" href="#">Multi Engine Rating</a></li>
            <li><a class="dropdown-item" href="#">Asst. Flight Instructor Rating</a></li>
            <li><a class="dropdown-item" href="#">Flight Instructor Rating</a></li>
            <li><a class="dropdown-item" href="#">Foreign Pilot License Holder</a></li>
          </ul>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
    <li class="nav-item">
          <a class="nav-link" href="aboutKanpur.php">About Kanpur</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <img src="img/gallery_ header.jpg" style="margin-top:5px; width: 100%;">

<div class="gallery">
   <a href="img/gallery/1.jpg" data-lightbox='mygallery'>
      <img src="img/gallery/1.jpg">
   </a>
   <a href="img/gallery/1.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/2.jpg">
   </a>
   <a href="img/gallery/1.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/3.jpg"> 
   </a>
   <a href="img/gallery/4.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/4.jpg"> 
   </a>
   <a href="img/gallery/5.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/5.jpg">
   </a>
   <a href="img/gallery/6.jpg" data-lightbox='mygallery'>
     
    <img src="img/gallery/6.jpg">
   </a>
   <a href="img/gallery/7.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/7.jpg">
     
   </a>
   <a href="img/gallery/8.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/8.jpg">
     
   </a>
   <a href="img/gallery/9.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/9.jpg">
     
   </a>
   <a href="img/gallery/10.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/10.jpg">
     
   </a>
   <a href="img/gallery/12.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/12.jpg">
     
   </a>
   <a href="img/gallery/13.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/13.jpg">
     
   </a>
   <a href="img/gallery/14.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/14.jpg">
     
   </a>
   <a href="img/gallery/15.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/15.jpg">
     
   </a>
   <a href="img/gallery/16.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/16.jpg">
     
   </a>
   <a href="img/gallery/17.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/17.jpg">
     
   </a>
   <a href="img/gallery/18.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/18.jpg">
     
   </a>
   <a href="img/gallery/19.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/19.jpg">
     
   </a>
   <a href="img/gallery/20.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/20.jpg">
     
   </a>
   <a href="img/gallery/21.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/21.jpg">
     
   </a>
   <a href="img/gallery/22.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/22.jpg">
   </a>
   <a href="img/gallery/23.jpg" data-lightbox='mygallery'>
    <img src="img/gallery/23.jpg">
   </a>
</div>
  
  <div class="row" style="border-top:1px solid #d9d9d9; margin-top: 20px;">
    <div class="col-sm-6">
     <center>
       © Garg Aviation Ltd. All Rights Reserved.
     </center> 
    </div>
    <div class="col-sm-6">
      <center>  
      Powered by ADNIG Technologies Pvt. Ltd.
      </center>
    </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
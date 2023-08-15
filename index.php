<!DOCTYPE html>
<html lang="en">
<head>
  <title>portfolio-syedmohammed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="./images/banner2.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./style/style.css">
 <style>
 body
{
  background:#130025 !important;  
  transition: all 1.0s ease; 
}
#btn-back-to-top {
  position: fixed;
  bottom: 10px;
  right: 5px;
  display: none;
}
</style>
</head>
<body>
<!--THIS IS AN EXAMPLE DONT COPY-->
<div class="container-fluid">
<button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fa fa-arrow-up"></i>
</button>
</div>
<?php
include "header.php";
?>
<div class="container-fluid animate fadeInRight four" style="margin-top:4em; ">
  <div class="row  col-12 mx-auto  mb-5 ">
    <div class="col-md-6 col-12 cont1 ">
    <h3>Hello,My Name is</h3>
     <h1>Syed Mohammed</h1>
     <ul>
    <li><a href="https://www.linkedin.com/in/syed-mohammed-k-a59549224/?originalSubdomain=in" target=”_blank”><i class="fa fa-linkedin-square"></i></a></li>
    <li><a href="https://github.com/syedmohammedk" target=”_blank”><i class="fa fa-github"></i></a></li>
    <li><a href="https://www.instagram.com/syedshesar/"  target=”_blank”><i class="fa fa-instagram"></i></a></li>
     </ul>
      <p class="text-justifiy">I am <span>FrontEnd Developer</span> Highly dedicated and hardworking Most of the time i am busy Working on Developing my<span> HTML,CSS </span> And <span>React </span>Skills</p>
      
      <a  href="#conatctform" ><button type='button' class="btn btn-light btn-lg  mt-4 " ><span>HIRE ME</span></button></a>
    </div>
     <div class="col-md-6 col-12 sm-none anima">
     <img class="d-block img-fluid " src="./images/banner2.png" alt="Third slide">
    </div>
  </div>
</div>
<div class="container-fluid cont2 mt-5 mb-5 animate fadeInLeft three">
  <div class="row col-12 mx-auto mt-5">
    <h1 class='md-text-center' id="experience">WORK EXPERIENCE</h1>
    <div class="">
      <div class="ml-md-5 margin "style="text-align:justify;">
     <h3 class='mt-4 ml-3'>JUNE 2022 - AUGEST 2023</h3>
     <h2 class='mt-5 ml-3'>RDEGI - FRONTEND DEVELOPER</h2>
     <h4 class='mt-5 ml-3'>Implemented designs tasks given into clean and maintable code using        HTML,CSS and Bootstrap</h4>
    <h4 class='mt-3 ml-3'>Maintained an organised workflow using GITHUB as a project Management tool </h4>    
         </div>
     </div>
  </div>
</div>
<?php
include "test.php";
?>
<div class="container-fluid cont3 mt-5">
  <div class="row  mx-auto col-sm-12 ">
    <div class="col-sm-12 py-5">
      <h1 class='text-white mb-4'id="projects">PROJECT<h1>
      <div class='card-body card py-5 '>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
              <h1 class="text-center">AdminPanel For Bus Timing App</h1>
                <a href="">
                <img class="d-block w-100 img-fluid" src="./images/adminpanel.png"  alt="First slide">
               </a>
              </div>
              <div class="carousel-item">
              <h1 class="text-center"style=''>Bus Timing WebSite</h1>
              <a href="">
                <img class="d-block w-100" src="./images/busindex.png" alt="Second slide">
              </a>
              </div>
              <div class="carousel-item">
              <h1 class="text-center">Bus Timing WebSite</h1>
              <a href="">
                <img class="d-block w-100" src="./images/bus2.png" alt="Third slide">
              </a>
              </div>
              <div class="carousel-item">
              <h1 class="text-center"style=''>Point Of Sell</h1>
              <a href="">
                <img class="d-block w-100" src="./images/pos.png" alt="Third slide">
              </a>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
           </div>
     </div>
  </div>
</div>
<div id='conatctform'class="container-fluid row   mx-auto cont5 mt-5" >
    <h1 class='mb-5'id="contact" >CONTACT ME</h1>
    <div class='row col-sm-12 mx-auto'>
      <div class="col-sm-5 ml-md-5">
        <h2 class='my-4'>Contact</h2>
        <h3>Get in touch</h3>
        <p><a href = "mailto:syedmohammedk1999@gmail.com"><i class="fa fa-telegram mr-2"style="color:#f38fc0"></i>syedmohammedk1999@gmail.com</p></a>
        <p><a href="tel:9087746522"><i class="fa fa-phone mr-2"style="color:#f38fc0"></i>9087746522</p></a>
        <ul>
          <li><a href="https://www.linkedin.com/in/syed-mohammed-k-a59549224/?originalSubdomain=in" target=”_blank”><i class="fa fa-linkedin-square"></i></a></li>
          <li><a href="https://github.com/syedmohammedk" target=”_blank”><i class="fa fa-github"></i></a></li>
          <li><a href="https://www.instagram.com/syedshesar/"  target=”_blank”><i class="fa fa-instagram"></i></a></li>
     </ul>
      </div>
    <div class="col-sm-6 ">
<form action="https://formsubmit.co/e40448d2501ecdd59190d363fc75b640" method="POST">
  <div class="form-group mt-3">
  <input type="text" class="form-control" id="name" name='name' aria-describedby="name" placeholder="Name" required>
  </div>
   <div class="form-group mt-3">
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email' placeholder="Email" required>
  </div>
    <div class="form-group mt-3">
  <input type="text" class="form-control" id="subject" aria-describedby="subject"   name='subject' placeholder="subject">
  </div>
 <div class="form-group mt-3">
 <textarea id="message" name="message" rows="10" class='col-12' aria-describedby="subject"   name='message' placeholder="Message"></textarea>
  </div>
  <input type="hidden" name="_next" value="http://localhost/portfolio/">
  <div class="mx-auto text-center mt-4 cont5">
  <button type="submit" class="btn btn-light">Submit</button>
   </div>
</form>
    </div>
     </div>
  </div>
</body>
<script>
  //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script> 
</html>

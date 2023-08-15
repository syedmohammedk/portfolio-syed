<!DOCTYPE html>
<html lang="en">
<head>
 <style>
a.button {
  display:inline-block;
}
.content {
  margin-top:30px;

}
div[class*="content-"] { 
  display:none;
}
div.active { 
  display:block;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transition: all 1.0s ease !important;
}
.content-3 img {
  opacity: 0.5;
}
.border{
    border:2px solid black !important;
    padding:10px;

}
@media only screen and (max-width: 600px) {
.content img{
width:290px !important;
    }
}
.btn-info{
background:#f38fc0 !important;
color:#392152;
}
 </style>
</head>
<body>
<div class="container-fluid cont4 mt-5">
<h1 class='mb-3 col-12 mx-auto'id="skill">SKILLS</h1>
<div class=" mt-4">
<div class="content row col-12  ">
<div class="col-md-6 col-12  d-flex justify-content-center ">
<img class="d-block" src="./images/skill11.gif" height="400"  alt="Third slide">
</div>
 <div class="col-md-5 col-12 mt-5">
 <div Class="ml-5 d-flex justify-content-center">
  <button class="button btn btn-info mr-2">Skills</button>
  <button class="button btn btn-info mr-2">AboutUs</button>
  <button class="button btn btn-info mr-2">Resume</button>
</div>
  <div class="content-1 active contt cont4   ">
    <div class=''>
    <div class="cnt mt-3">
   <ul>
   <li>Planning & time management</li>
    <li>Communication & interpersonal</li>
    <li>Analytical and problem solving</li>
    <li><span>LANGUAGES:</span>HTML,CSS,JAVASCRIPT,PHP,SQL</li>
    <li><span>FRAMEWORK:</span>BOOTSTRAP</li>
    <li><span>SOURCE CONTROLS:</span> GIT/GITHUB</li>
   </ul>
   </div>
   </div>    
  </div>
  <div class="content-2  contt cont4 mt-3">
<p>
Junior front-end developer with 1+ years of experience designing and building responsive web design in industry.<br> Proficient with CSS and JS Frameworks, with extensive knowledge of UX and user psychology.
</p>
  </div>
  <div class="content-3 contt ml-2 mt-2 ">
  <a  class="d-flex justify-content-center " >
  <img class="d-block border" src="./images/resume.jpg" height="300" width="300" alt="Third slide">
  </a>
  <div class="centered">
  <a href="./images/resume.jpg" download ="resume-syed">  
    <button class="btn btn-dark">
        Download Resume
    </button>
</a>
  </div>
   </div>
</div>
</div>
</div>
              
</body>
<script>
$('.button').first().addClass('active');

$('.button').click(function(){
  var $this = $(this);
  $siblings = $this.parent().children(),
  position = $siblings.index($this);
  console.log (position);
  
  $('.content .contt').removeClass('active').eq(position).addClass('active');
  
  $siblings.removeClass('active');
  $this.addClass('active');
})

</script>
</html>

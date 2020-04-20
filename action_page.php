<?php 
 
    $ToEmail = 'varsha.nayanar@gmail.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["Email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["Email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["Name"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["Email"].""; 
    $MESSAGE_BODY .= "Message: ".nl2br($_POST["Message"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader); 
?> 
Your message was sent

<!DOCTYPE html>
<html>
<title>Varsha Nayanar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/resume.css">
<link rel="stylesheet" type="text/css" href="style/know.css">
<link rel="stylesheet" type="text/css" href="style/birds.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="style/button.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif;background: #ffb1a4;}
.w3-row-padding img {margin-bottom: 12px}

</style>
<body>



<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Portfolio</a>
    <a href="#about" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">About</a>
    <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Contact</a>
  </div>
</nav>

<!-- Page Content -->
<divq class="w3-main w3-padding-large" >

  

  <!-- Header -->
  <header class="w3-container w3-center" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo"><b>Varsha Nayanar</b></h1>
    <p>Web Developer</p>
    
    
    <a href="/assets/resume.docx" download>
      <svg class="but1" viewBox="45 60 400 320" xmlns="http://www.w3.org/2000/svg">
          <path fill="#fff" d="M 90 210 C 90 180 90 150 90 150 C 150 150 180 150 180 150 C 180 150 300 150 300 150 C 300 150 330 150 390 150 C 390 150 390 180 390 210 C 390 240 390 270 390 270 C 330 270 300 270 300 270 C 300 270 180 270 180 270 C 180 270 150 270 90 270 C 90 270 90 240 90 210" mask="url(#knockout-text)" >
          </path>
          
          <mask id="knockout-text">
            <rect width="100%" height="100%" fill="#fff" x="0" y="0" />
            <text   x="120" y="227" fill="#000">Download Resume</text>
          </mask>
       
      </svg>
      </a>
  </header>



  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <h2>About</h2>
    <hr class="w3-opacity">
    <p>
      I am a Bachelor of Technology graduate with over 3 years of industry experience. My experience include working with both Start-Up 
      and Large Organizations which allows me to be adaptable in either of the situations
    </p>
    <h3 class="w3-padding-16">Top Skills</h3>
    <p class="w3-wide">PHP</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:95%">95%</div>
    </div>
    <p class="w3-wide">Javascript</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:85%">85%</div>
    </div>
    <p class="w3-wide">SQL</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:80%">90%</div>
    </div>
    <p class="w3-wide">Angular</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:80%">70%</div>
    </div>
    <p class="w3-wide">jQuery</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:80%">80%</div>
    </div><br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>




 

    

    <!-- Testimonials -->
    <h3 class="w3-padding-24">My Experience</h3>
    
    <p><span class="w3-large w3-text-black w3-margin-right">Digital Module Technologies</span> Software Developer.</p>
    <p>•	Developed online ordering web application for restaurant. Technologies used are PHP with CodeIgniter, SQL, JavaScript, HTML5, CSS3, jQuery, Bootstrap.
    </br>
        •	Participate in full stack development of responsive and search engine optimised websites.
        </p><br>

    
    <p><span class="w3-large w3-text-black w3-margin-right">BC Cancer Research centre.</span> Software Developer</p>
    <p>•	Customised Opensource Application using PHP with Laravel, JavaScript, HTML5, CSS3, MariaDB (Full stack development) </br>
        •	Designed and created the SQL Database in Microsoft Access for the BC generations project. Design queries in accordance with various needs of the researchers. </br>
        •	Data Migration to Open specimen from LIMS </br>
        •	Customisation and support of opensource applications like Confluence, REDCap. </br>
        •	Developing new features to the existing application as requested by the research team. </br>
        •	Requirements collection for the customisation of various applications from the employees. </br>
        </p><br>

   
    <p><span class="w3-large w3-text-black w3-margin-right">UST Global</span>  Software Developer</p>
    <p>•	Created web portal using MEAN stack with numerous features to enable end users, such as external clients and internal developers to have access to frequently used data. </br>
        •	Involved in website design and coding using HTML, CSS and JavaScript.</br>
        •	Included features to portal which allows developers to contribute reusable components along with source code to be used by others. </br>
        •	Enabled the portal to host blueprints of architectures using components, assessments and a discussion forum for the internal team to leverage.</br>
        •	Worked effectively in a team of 8 developers using JavaScript in both client side and server side to develop a full stack application called Happiness portal.</br>
        </p><br>

    <!-- Grid for pricing tables -->


  <!-- End About Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
    <h2>Contact Me</h2>
    <hr class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Vancouver, Canada</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +1 604-720-4032</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: varsha.nayanar@gmail.com</p>
    </div>

    

    <p>Lets get in touch. Send me a message:</p>
    <form action="/action_page.php" method="POST">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <div class="wrapper-no4">
          <button class="button-bird" type="submit">
              <p class="button-bird__text">SEND</p>
              <svg version="1.1" class="feather" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 75 38" style="enable-background:new 0 0 75 38;" xml:space="preserve">
              <g>
                  <path d="M20.8,31.6c3.1-0.7,2.9-2.3,2,1c9.1,4.4,20.4,3.7,29.1-0.8l0,0c0.7-2.1,1-3.9,1-3.9c0.6,0.8,0.8,1.7,1,2.9
                      c4.1-2.3,7.6-5.3,10.2-8.3c0.4-2.2,0.4-4,0.4-4.1c0.6,0.4,0.9,1.2,1.2,2.1c4.5-6.1,5.4-11.2,3.7-13.5c1.1-2.6,1.6-5.4,1.2-7.7
                      c-0.5,2.4-1.2,4.7-2.1,7.1c-5.8,11.5-16.9,21.9-30.3,25.3c13-4,23.6-14.4,29.1-25.6C62.8,9,55.6,16.5,44.7,20.7
                      c2.1,0.7,3.5,1.1,3.5,1.6c-0.1,0.4-1.3,0.6-3.2,0.4c-7-0.9-7.1,1.2-16,1.5c1,1.3,2,2.5,3.1,3.6c-1.9-0.9-3.8-2.2-5.6-3.6
                      c-0.9,0.1-10.3,4.9-22.6-12.3C5.9,17.7,11.8,26.9,20.8,31.6z"/>
              </g>
              </svg>
              <span class="bird"></span>
              <span class="bird--1"></span>
              <span class="bird--2"></span>
              <span class="bird--3"></span>
              <span class="bird--4"></span>
              <span class="bird--5"></span>
              <span class="bird--6"></span>
              <span class="bird--7"></span>
              <span class="bird--8"></span>
              <span class="bird--9"></span>
              <span class="bird--10"></span>
              <span class="bird--11"></span>
              <span class="bird--12"></span>
              <span class="bird--13"></span>
              <span class="bird--14"></span>
              <span class="bird--15"></span>
              <span class="bird--16"></span>
              <span class="bird--17"></span>
              <span class="bird--18"></span>
              <span class="bird--19"></span>
              <span class="bird--20"></span>
              <span class="bird--21"></span>
              <span class="bird--22"></span>
              <span class="bird--23"></span>
              <span class="bird--24"></span>
              <span class="bird--25"></span>
              <span class="bird--26"></span>
              <span class="bird--27"></span>
              <span class="bird--28"></span>
              <span class="bird--29"></span>
              <span class="bird--30"></span>
          </button>
       </div>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>

  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

<script>
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}


</script>
<script src="javascript/scrollcounter.js">
</script>
<script src="javascript/jquery-1.11.1.js">
</script>
<script src="javascript/birds.js">
</script>
</body>
</html>

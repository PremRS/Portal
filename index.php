<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
   <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
   <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
   <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>PORTAL</title>
   <style>
   body, html {
     height: 100%;
     margin: 0;
     font: 400 15px/1.8 "Lato", sans-serif;
     color: #777;
   }
p{
  font-family:Arvo;
}
   .bgimg-1  {
     position: relative;
     opacity: 0.65;
     background-attachment: fixed;
     background-repeat: no-repeat;
     background-size: cover;
   }
   .bgimg-2
   {
     position: relative;
     opacity: 1;
     background-attachment: fixed;
     background-repeat: no-repeat;
     background-size: cover;
   }
   .bgimg-3
   {
     position: relative;
     opacity: 1;
     background-attachment: fixed;
     background-repeat: no-repeat;
     background-size: cover;
   }
   .bgimg-1 {
     background-image: url("images/club.jpg");
     min-height: 100%;
   }

   .bgimg-2 {
     background-image: url("images/ckc.png");
     min-height: 400px;
   }

   .bgimg-3 {
     background-image: url("images/cub.jpg");
     min-height: 400px;
   }

   .caption {
     position: absolute;
     left: 0;
     top: 50%;
     width: 100%;
     text-align: center;
     color: #000;
   }

   .caption span.border {
     background-color: #111;
     color: #fff;
     padding: 18px;
     font-size: 25px;
     letter-spacing: 10px;
   }
   h3 {
     letter-spacing: 5px;
     text-transform: uppercase;
     font-size: 24px ;
     font-family:Actor;
     color: #111;
   }
   .centered-navbar {
     position:absolute;
     left:25%;
     width:50%;
     text-align:center;
   }

   /* Turn off parallax scrolling for tablets and phones */
   @media only screen and (max-device-width: 1024px) {
       .bgimg-1, .bgimg-2, .bgimg-3 {
           background-attachment: scroll;
       }
   }
   </style>
</head>
<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'><i class="fa fa-home"></i>&nbsp;&nbsp;HOME</a></li>
   <div class="centered-navbar"><img src="images/club2.png" style="height:55px; width:250px;border-radius:20px;"></div>
   <li style="float:right"><a href='register.php'><i class="fa fa-user-plus"></i>&nbsp;&nbsp;REGISTER</a></li>
   <li style="float:right"><a href='login.php'><i class="fa fa-sign-in"></i>&nbsp;&nbsp;LOGIN</a></li>
</ul>
</div>
<div class="bgimg-1">
  <div class="caption">
    <span class="border" style="font-family: 'Aclonica';font-size: 22px" >WELCOME TO STUDENT CLUB PORTAL</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">CONCEPT OF STUDENT CLUB</h3>
  <p>In today’s fast-paced world, technology is a shifting goal post. What seems cutting-edge now, can become outdated in no time. Training and skills upgrading are therefore critical to growth. To keep up with rapid technology changes, professionals must have a sound and clear understanding of key concepts. The Cognizant Student Program seeks to help you strengthen and test your knowledge of subject fundamentals in order to boost your employability and relevance to the IT industry.
  It seeks to equip students with capabilities in different areas of IT & Software Engineering relevant to industry needs. It is a part of their social commitment help students become more employable, at no cost to the college and the students.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="font-family: 'Aclonica';font-size: 22px">OUR MOTTO!</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;">
    <p>Join your hands with student club to shine yourself in the fast-forwarding world</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="font-family: 'Aclonica';font-size: 22px">FUTURE IS NOW! LETS PUT IT TO WORK</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;">
    <p>FOLLOW US ON<br>
      <a href="#"><i class="fa fa-facebook" style="color:orange;font-size:30px;"></i></a>&nbsp;&nbsp;
      <a href="#"><i class="fa fa-instagram"style="color:orange;font-size:30px;"></i></a>&nbsp;&nbsp;
      <a href="#"><i class= "fa fa-twitter"style="color:orange;font-size:30px;"></i></a>&nbsp;&nbsp;
      <a href="#"><i class= "fa fa-linkedin"style="color:orange;font-size:30px;"></i></a></p>
  </div>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="font-family: 'Aclonica';font-size: 22px">THE END!!!</span>
  </div>
</div>

</body>
<html>

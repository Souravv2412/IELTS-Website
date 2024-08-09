<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="style.css">
    <style>
       body {
  font-family: 'Roboto', sans-serif;
  background-color: white ;
}
.logo
{
  padding: 15px 10px 0.5px 2px;  
  
}
.menu {
  text-align: left;
  padding: 20px 2.5px;
  background-color: rgb(255, 255, 255);
  box-shadow: 0.5px  0.5px 0.5px 3.5px rgb(241, 233, 233);
}
.menu ul {
  margin: 15px;
  display: flex;
  text-align: left;
  color: white;
  list-style: none;
}
.menu ul li {
  display: table-cell;
  position: relative;
  padding: 05px;
  font-family: arial;
  font-size: 15px;
}
.menu a {
  color: black;
  text-transform:uppercase;
  text-decoration: none;
  letter-spacing: 1px;
  display: inline-block;
  padding: 05px;
  position: relative;
}
.menu a:hover:after {
  width:100%;
  right: 0;
}
.menu a:after {
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  right: 0;
  position: absolute;
  background: red;
  transition: width 1s ease 0s, right 0.5s ease 0s;
  width: 0;
}
.imgslider
{
  width: 880px;
  height: 400px;
  background: url(http://ielts/IELTS%20all%20necessaries/Images/Home%20slider.jpg);
  background-repeat:no-repeat;
  background-size:150%;
  margin: 50px auto;
  animation: slide 30s infinite;
}
@keyframes slide
{
  25%
  {
    background: url(http://ielts/IELTS%20all%20necessaries/Images/Home%20slider1.jpg);
    background-repeat:no-repeat;
    background-size:150%;
  }
  50%
  {
    background: url(http://ielts/IELTS%20all%20necessaries/Images/Home%20slider2.jpg);
    background-repeat:no-repeat;
    background-size:150%;
  }
  75%
  {
    background: url(http://ielts/IELTS%20all%20necessaries/Images/Home%20Slider3.jpg);
    background-repeat:no-repeat;
    background-size:150%;
  }
  100%
  {
    background: url(http://ielts/IELTS%20all%20necessaries/Images/HomeSlider4.jpg);
    background-repeat:no-repeat;
    background-size:150%;
  }
}

.bottom
{
  background-color: #000000;
  padding: 30px;
  text-align: center;
}

.copyright
{
  border-top-left-radius: 35px;
  border-top-right-radius: 35px;
  background-color: #0e0d0d;
  padding:30px;
  text-align: center;
}

.copyright a

{
 color:white;
}

.copyright p
{
  color:rgb(216, 205, 205);
}
.vidio
{
  padding:20px 20px;
  background-color:  rgb(229, 229, 229);
}
.youtube h1
{
 color:red;
}  
.youtube
{
  background-color:  rgb(229, 229, 229);
  padding: 2px 65px;
}
.marquee
{
  padding: 10px 10px;
  border-radius: 10px;
  background: rgb(204, 8, 204);
  color: #1f1f1f;
}
    </style>
    </head>
<body>
    
   <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
     <marquee> Welcome <strong><?php echo $_SESSION['username']; ?></strong> </marquee>
     <a href="http://ielts/IELTS%20Website.html" style="color: red;"> Logout </a> 
    <?php endif ?>
</div>

<div class="menu">
       <div class="logo">  
          <img src="http://ielts/IELTS%20all%20necessaries/Images/Logo1.jpg" align="right" height="9.5%" width="9.5%"> 
       </div>
         <ul> 
             <b><li><a href="http://ielts/IELTS%20Website.html"> Home </a></li></b>
            <b><li><a href="http://ielts/IELTS%20all%20necessaries/About.html"> About IELTS </a></li></b>
            <b><li><a href="http://ielts/IELTS%20all%20necessaries/organisation.html"> For organisation </a></li></b>
            <b><li><a href="http://ielts/IELTS%20all%20necessaries/researcher.html"> For Researchers </a></li></b>
            <b><li><a href="http://ielts/IELTS%20all%20necessaries/teacher.html"> For Teachers </a></li></b>
            <b><li><a href="http://ielts/IELTS%20all%20necessaries/booktest.html"> Book a test </a></li></b>
         </ul>
        </div><br><br>
        
        <div class="marquee">
          <h2>  <marquee> <b> January Intake of University Of Waterloo in TORONTO  is open now ........... </b> </marquee> </h2>
        </div>
      
        <div class="imgslider">
        </div><br><br><br>

        <div class="youtube">
         <right><h1>What is IELTS?</h1><br><right>IELTS is an English language test for study, migration or work. Over three million people take our test every year. IELTS is accepted by more than 11,000 employers, universities, schools and immigration bodies around the world.</right></p><br>
        </div><br><br><br><br>
        <div class="vidio">
        <center><iframe width="560" height="315" src="https://www.youtube.com/embed/TP7LWH7q2O8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </center>
        </div><br><br><br>

        <div class="marquee">
          <h2>  <marquee> <b> Conestoca College is now giving scholarship to international students ........... </b> </marquee> </h2>
        </div><br><br><br>

        <h1 align="center"> Where can IELTS take you? </h1>
        <img src="http://ielts/IELTS%20all%20necessaries/Images/Homeimage2.png" height="100%" width="100%"><br><br><br><br><br>


        <div class="copyright">
          <img src="http://ielts/IELTS%20all%20necessaries/Images/Ielts%20logo2.jpg" height="8%" width="8%"><br><br><br>
          <a href="http://ielts/IELTS%20all%20necessaries/About.html"> About us </a><br><br>
          <a href="">Disclaimer</a><br><br>
          <a href="">Legal</a><br><br>
          <a href="">Copyright notice</a><br><br> 
          <a href="">Privacy policy</a><br><br>
          <p> _________________________________________________________________</p>
        </div>

        <div class="bottom">
          <img src="http://ielts/IELTS%20all%20necessaries/Images/Cambridge.jpg" height="3%" width="3%"><br><br>
          <img src="http://ielts/IELTS%20all%20necessaries/Images/British%20council.jpg" height="5%" width="5%"><br><br>
          <img src="http://ielts/IELTS%20all%20necessaries/Images/Idp.jpg" height="8%" width="8%"><br>
        </div>
        
</body>    
    
</html>

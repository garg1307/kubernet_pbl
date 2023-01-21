<?php 
session_start();
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href='min.css' rel='stylesheet'>
<link rel="stylesheet" href ="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>BUYMORE ENTERPRISES</title>
</head>
<body>

<!--===== HEADER =====-->
<header class="l-header">
<nav class="nav bd-grid">
<div>
<a href="index.php" class="nav__logo">BuyMore Enterprises</a>
</div>
<div class="nav__menu" id="nav-menu" >
<ul class="nav__list" style="display: flex; align-items: center; justify-content: center;gap: 5px; ">
<li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
<li class="nav__item"><a href="#account" class="nav__link">Account</a></li>
<li class="nav__item"><a href="#work" class="nav__link">Categories</a></li>
<li class="nav__item"><a href="#about" class="nav__link">Our Team</a></li>
<li class="nav__item"><a href="#contact" class="nav__link">Get In Touch</a></li>
</ul>

</div>

<div class="nav__toggle" id="nav-toggle">
<i class='bx bx-menu'></i>
</div>
</nav>
</header>

<main class="l-main">
<!--===== HOME =====-->
<section class="home bd-grid" id="home">
<div class="container">
<div class="row">
<div class="col-3">
<h1>WHOLESALE AT YOUR DOORSTEP</h1>
</div>
<div class="col-3">
<img src="img/BUY MORE.jpg" alt="">
</div>
</div>
</div>
</section>

<!--===== ACCOUNT PAGE====-->>
<section class="account section" id="account">
<div class="container1">
<div class="row">
<div class="col-2">
<img src="img/BUY MORE.jpg" alt="">
</div>
</div>
<div class= "col-1">
<div class ="form-container">
<div class = "form-btn">
<span onclick="login()">Login</span>
<span onclick="register()">Register</span>
<hr id="Indicator">
</div>

<script type="text/javascript">
  function cap(){
    var alpha = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
                 ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
                 'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z', '!','@','#','$','%','^','&','*','+'];
                 var a = alpha[Math.floor(Math.random()*71)];
                 var b = alpha[Math.floor(Math.random()*71)];
                 var c = alpha[Math.floor(Math.random()*71)];
                 var d = alpha[Math.floor(Math.random()*71)];
                 var e = alpha[Math.floor(Math.random()*71)];
                 var f = alpha[Math.floor(Math.random()*71)];
                 var final = a+b+c+d+e+f;
                 document.getElementById("capt").value=final;
               }
</script>

<form id = "Loginform" action = "login.php" method = "POST">
<div class="input-field">
<i class="fa fa-user"></i>
<input type="email" placeholder = "Email" name = "email" required/>
</div>
<div class="input-field">
<i class="fa fa-lock"></i>
<input type="password" placeholder = "Password" name = "password" required/>   
</div> 
<label>Enter Captcha:</label><br>
<input type="text" style = "background-color:darkgray" readonly id="capt" name = "capt">
<img src="refresh.jpg" width="20px" onclick="cap()">
<input type="text" id="textinput" name = "textinput" required/>
<div class="form-group">
<?php echo '<script type="text/javascript">cap();</script>';?>
<button type="submit" class = "btn">Login</button>
</div>
<a href="">Forgot Password?</a>
</form>

<form id = "Regform" action = "register.php" style="display:none" method = "POST">
<select name = "user_type" placeholder = "Select Type" style = "width: 200px;">
<option value = "BUYER">BUYER</option>
<option value = "SELLER">SELLER</option>
</select> 
<div class = "input-field">
<i class = "fa fa-user"></i>
<input type = "text" placeholder = "Company Name" name = "company_name">
</div>
<div class = "input-field">
<i class = "fa fa-envelope"></i>
<input type = "email" placeholder = "Email" name = "email">
</div>
<div class = "input-field">
<i class = "fa fa-address-book-o"></i>
<input type = "tel" placeholder = "Contact Number" name = "contact_no">
</div> 
<div class = "input-field">
<i class = "fa fa-address-card-o"></i>
<input type = "textbox" placeholder = "Address" name = "address">
</div>
<div class = "input-field">
<i class = "fa fa-map-marker"></i>
<input type = "text" placeholder = "Pin Code" id = "pin_code" name = "pin_code">
</div>
<div class = "input-field">
<i class = "fa fa-leanpub"></i>
<input type = "text" placeholder = "GST Number" name = "gst">
</div>
<div class = "input-field">
<i class = "fa fa-lock"></i>
<input type = "password" placeholder = "Password" name = "password" minlength="7">   
</div> 
<div class = "input-field">
<i class = "fa fa-lock"></i>
<input type = "password" placeholder = "Confirm Password" name = "confirm_password" minlength="7">   
</div>   
<button type = "submit" class = "btn">Register</button>
</form>
</div>
</div>
</div>
</section>

<!--===== WORK =====-->
<section class="work section" id="work">
<h2 class="section-title">Categories</h2>

<div class="work__container bd-grid">
<div class="work__img">
<img src="img/work1.jpg" alt="">
</div>
<div class="work__img">
<img src="img/work2.jpg" alt="">
</div>
<div class="work__img">
<img src="img/work3.jpg" alt="">
</div>
<div class="work__img">
<img src="img/work4.jpg" alt="">
</div>
<div class="work__img">
<img src="img/work5.jpg" alt="">
</div>
<div class="work__img">
<img src="img/work6.jpg" alt="">
</div>
</div>
</section>

<!--===== ABOUT =====-->
<section class="about section " id="about">
<h2 class="section-title">OUR TEAM</h2>
<div class="about__container bd-grid">
<div class="about__img">
<div class="row">
<div class ="column">
<img src="img/AMAN GARG.jpg" alt="aman">
</div>
<div class ="column">
<img src="img/RISHABH JAIN.jpeg" alt="rishabh">
</div>
<div class="column">
<img src="img/ABHIJEET RANA.jpeg" alt="abhijeet">
</div>
</div>
</div>
<div>
<h2 class="about__subtitle">BuyMore Enterprises</h2>
1.	AMAN GARG – 19103134<br>
2.	RISHABH JAIN – 19103133<br>
3.	ABHIJEET RANA – 19103149 
</div>   
</div>
</section>

<!--===== GET IN TOUCH =====-->
<section class="contact section" id="contact">
<h2 class="section-title">GET IN TOUCH</h2>

<div class="contact__container bd-grid">
<form action="" class="contact__form">
<input type="text" placeholder="Name" class="contact__input">
<input type="mail" placeholder="Email" class="contact__input">
<textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
<input type="button" value="Submit" class="contact__button button">
</form>
</div>
</section>

</main>

<!--===== FOOTER =====-->
<footer class="footer">
<p class="footer__title">BuyMore</p>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="social-menu">
<ul>
<li><a href="https://www.facebook.com/buymoreenterprises" class="fa fa-facebook"></a></li>
<li><a href="https://instagram.com/buymore_enterprises?utm_medium=copy_link" class="fa fa-instagram"></a></li>
<li><a href="#" class="fa fa-twitter"></a></li>
</ul>
</div>
<p><br>&#169; 2022 copyright all right reserved</p>
</footer>

<!--===== SCROLL REVEAL =====-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--===== MAIN JS =====-->
<script src="js/main.js"></script>
<script>
var Loginform = document.getElementById("Loginform");
var Regform = document.getElementById("Regform");
var Indicator = document.getElementById("Indicator");
function register()
{
    document.getElementById("Regform").style.display="block";
    document.getElementById("Loginform").style.display="none";
    Indicator.style.transform = "translateX(52px)";
}
function login()
{   document.getElementById("Regform").style.display="none";
    document.getElementById("Loginform").style.display="block";
    Indicator.style.transform = "translateX(-50px)";
}
</script>
</body>
</html>
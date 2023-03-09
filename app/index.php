
<!DOCTYPE html>

<html lang="zxx" class="no-js" style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="shortcut icon" href="img/fav.png">

<meta name="author" content="codepixer">

<meta name="description" content="">

<meta name="keywords" content="">



<title>Car Rentals</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<link rel="stylesheet" href="carRental/css/linearicons.css">
<link rel="stylesheet" href="carRental/css/font-awesome.min.css">
<link rel="stylesheet" href="carRental/css/bootstrap.css">
<link rel="stylesheet" href="carRental/css/magnific-popup.css">
<link rel="stylesheet" href="carRental/css/nice-select.css">
<link rel="stylesheet" href="carRental/css/animate.min.css">
<link rel="stylesheet" href="carRental/css/jquery-ui.css">
<link rel="stylesheet" href="carRental/css/owl.carousel.css">
<link rel="stylesheet" href="carRental/css/main.css">
<script defer="" referrerpolicy="origin" ></script><script nonce="edd6893a-16d3-4b7f-a23c-f8ba8f607653">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body style="display: block;"><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>
<header id="header">
<div class="container">
<div class="row align-items-center justify-content-between d-flex">
<div id="logo">
<a href="index.php"><img src="carRental/img/logo.png" alt="" title="" style="border-radius: 50%;" width="50" height="50"><h1 style="display: inline-block; color: white; margin-top: 5px; margin-left: 5px;">Lancer.Id</h1></a>
</div>
<nav id="nav-menu-container">
<ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
<li class="menu-active"><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="cars.php">Cars</a></li>
<li><a href="service.php">Service</a></li>
<li><a href="team.php">Team</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</nav>
</div>
</div>
</header>

<section class="banner-area relative" id="home">
<div class="overlay overlay-bg"></div>
<div class="container">
<div class="row fullscreen d-flex align-items-center justify-content-center" style="height: 600px;">
<div class="banner-content col-lg-7 col-md-6 ">
<h6 class="text-white ">START YOUR JOURNEY WITH US</h6>
<h1 class="text-white text-uppercase">
Best Journey
</h1>
<p class="pt-20 pb-20 text-white">
Enjoy Your Journey to the Fullest With Us!</p>
<a href="index.php#" class="primary-btn text-uppercase">Rent Car Now</a>
</div>
<div class="col-lg-5  col-md-6 header-right">
<h4 class="text-white pb-30">Book Your Car Today!</h4>
<form method="post" class="form" role="form" autocomplete="off" action="submit.php">
<div class="form-group">
<div class="default-select" id="default-select" "="">
<select name="id_car" style="display: none;">
<option value="" disabled="" selected="" hidden="">Select Your Car</option>
<option value="BMW">BMW</option>
<option value="Farrari">Farrari</option>
<option value="Toyota">Toyota</option>
</select><div class="nice-select" tabindex="0"><span class="current">Select Your Car</span><ul class="list"><li data-value="" class="option selected disabled">Select Your Car</li><li data-value="1" class="option">BMW</li><li data-value="1" class="option">Farrari</li><li data-value="1" class="option">Toyota</li></ul></div>
</div>
</div>
<div class="form-group row">
<div class="col-md-6 wrap-left">
<div class="default-select" id="default-select" "="">
<select name="id_pickup" style="display: none;">
<option value="" disabled="" selected="" hidden="">Pickup</option>
<option value="Pickup One">Pickup One</option>
<option value="Pickup Two">Pickup Two</option>
<option value="Pickup Three">Pickup Three</option>
<option value="Pickup Four">Pickup Four</option>
</select><div class="nice-select" tabindex="0"><span class="current">Pickup</span><ul class="list"><li data-value="" class="option selected disabled">Pickup</li><li data-value="1" class="option">Pickup One</li><li data-value="1" class="option">Pickup Two</li><li data-value="1" class="option">Pickup Three</li><li data-value="1" class="option">Pickup Four</li></ul></div>
</div>
</div>
<div class="col-md-6 wrap-right">
<div class="input-group dates-wrap">
<input id="datepicker" class="dates form-control hasDatepicker" placeholder="Date &amp; time" name="date_pickup" type="date">
<div class="input-group-prepend">
</span>
</div>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-md-6 wrap-left">
<div class="default-select" id="default-select" "="">
<select name="id_dropoff" style="display: none;">
<option value="" disabled="" selected="" hidden="">Drop off</option>
<option value="Drop off One">Drop off One</option>
<option value="Drop off Two">Drop off Two</option>
<option value="Drop off Three">Drop off Three</option>
<option value="Drop off Four">Drop off Four</option>
</select><div class="nice-select" tabindex="0"><span class="current">Drop off</span><ul class="list"><li data-value="" class="option selected disabled">Drop off</li><li data-value="1" class="option">Drop off One</li><li data-value="1" class="option">Drop off Two</li><li data-value="1" class="option">Drop off Three</li><li data-value="1" class="option">Drop off Four</li></ul></div>
</div>
</div>
<div class="col-md-6 wrap-right">
<div class="input-group dates-wrap">
<input id="datepicker2" class="dates form-control hasDatepicker" placeholder="Date &amp; time" name="date_dropoff" type="date">
<div class="input-group-prepend">
</span>
</div>
</div>
</div>
</div>
<div class="from-group">
<input class="form-control txt-field" type="text" name="id_user" placeholder="Your name">
<input class="form-control txt-field" type="email" name="email" placeholder="Email address">
<input class="form-control txt-field" type="tel" name="number" placeholder="Phone number">
</div>
<div class="form-group row">
<div class="col-md-12">
<input type="submit" value="Confirm car booking now!" style="background-color: #6382e6; color: #fff; font-weight: bolder;" class="btn btn-default btn-lg btn-block text-center text-uppercase">
  </div>
</div>
</form>
</div>
</div>
</div>
</section>


<section class="feature-area section-gap" id="service">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-md-8 pb-40 header-text">
<h1>Our Services</h1>
<p>
For Your Best Experience We Provide
</p>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
<p>
To Maxixmalize Your Experience With Use We Provide the Best Technicians for You
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-license"></span>Professional Service</h4>
<p>
We Offer You Our Professional Services, Incase There Were Some Problem Happen On Yoour Experience
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-phone"></span>Great Support</h4>
<p>
Our Support Staff Is Always Ready to Receive Your Order and Your Opinion About Us
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
<p>
We Provide Your Experience With Care
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
 <h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
<p>
Our Rental Car Is In the Best Performance
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
<p>
It's Not a New News for Us, That This Cars Rental is The Best Cars Rental
</p>
</div>
</div>
</div>
</div>
</section>


<section class="home-about-area" id="about">
<div class="container-fluid">
<div class="row justify-content-center align-items-center">
<div class="col-lg-6 no-padding home-about-left">
<img class="img-fluid"  src="carRental/img/about-img.jpg" alt="">
</div>
<div class="col-lg-6 no-padding home-about-right">
<h1>If You Need To Rental a Car, Come to Our Rentals</h1>
<p>
<span>We are here to rent you our best car for your best experience</span>
</p>
<p>
Clean cars. Flexible bookings. Socially distant rental counters.
</p>


</p>
</div>
</div>
</footer>

<script src="carRental/js/jquery-2.2.4.min.js"></script>
<script src="carRental/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="carRental/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="carRental/js/jquery-ui.js"></script>
<script src="carRental/js/easing.min.js"></script>
<script src="carRental/js/hoverIntent.js"></script>
<script src="carRental/js/superfish.min.js"></script>
<script src="carRental/js/jquery.ajaxchimp.min.js"></script>
<script src="carRental/js/jquery.magnific-popup.min.js"></script>
<script src="carRental/js/owl.carousel.min.js"></script>
<script src="carRental/js/jquery.sticky.js"></script>
<script src="carRental/js/jquery.nice-select.min.js"></script>
<script src="carRental/js/waypoints.min.js"></script>
<script src="carRental/js/jquery.counterup.min.js"></script>
<script src="carRental/js/parallax.min.js"></script>
<script src="carRental/js/mail-script.js"></script>
<script src="carRental/js/main.js"></script>

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;7a054143cc2f4709&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.2.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

</body></html>
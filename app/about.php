<!DOCTYPE html>
<html lang="zxx" class="no-js" style="display: block">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<link rel="shortcut icon" href="img/elements/fav.png" />

		<meta name="author" content="colorlib" />

		<meta name="description" content="" />

		<meta name="keywords" content="" />

		<title>Car Rentals</title>
		<link href="./Car Rentals_files/css" rel="stylesheet" />
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css"
		/>
		<link rel="stylesheet" href="carRental/css/linearicons.css" />
		<link rel="stylesheet" href="carRental/css/owl.carousel.css" />
		<link rel="stylesheet" href="carRental/css/font-awesome.min.css" />
		<link rel="stylesheet" href="carRental/css/animate.min.css" />
		<link rel="stylesheet" href="carRental/css/animate.min.css" />
		<link rel="stylesheet" href="carRental/css/bootstrap.css" />
		<link rel="stylesheet" href="carRental/css/animate.min.css" />
		<link rel="stylesheet" href="carRental/css/main.css" />
		<script
			defer=""
			referrerpolicy="origin"
			src="./Car Rentals_files/s.js.download"
		></script>
		<script
			type="text/javascript"
			async=""
			src="./Car Rentals_files/analytics.js.download"
			nonce="ca7d7575-1c07-416e-b15c-d5d717d2d211"
		></script>
		<script nonce="ca7d7575-1c07-416e-b15c-d5d717d2d211">
			(function (w, d) {
				!(function (f, g, h, i) {
					f[h] = f[h] || {};
					f[h].executed = [];
					f.zaraz = { deferred: [], listeners: [] };
					f.zaraz.q = [];
					f.zaraz._f = function (j) {
						return function () {
							var k = Array.prototype.slice.call(arguments);
							f.zaraz.q.push({ m: j, a: k });
						};
					};
					for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
					f.zaraz.init = () => {
						var m = g.getElementsByTagName(i)[0],
							n = g.createElement(i),
							o = g.getElementsByTagName("title")[0];
						o && (f[h].t = g.getElementsByTagName("title")[0].text);
						f[h].x = Math.random();
						f[h].w = f.screen.width;
						f[h].h = f.screen.height;
						f[h].j = f.innerHeight;
						f[h].e = f.innerWidth;
						f[h].l = f.location.href;
						f[h].r = g.referrer;
						f[h].k = f.screen.colorDepth;
						f[h].n = g.characterSet;
						f[h].o = new Date().getTimezoneOffset();
						if (f.dataLayer)
							for (const s of Object.entries(
								Object.entries(dataLayer).reduce((t, u) => ({
									...t[1],
									...u[1],
								}))
							))
								zaraz.set(s[0], s[1], { scope: "page" });
						f[h].q = [];
						for (; f.zaraz.q.length; ) {
							const v = f.zaraz.q.shift();
							f[h].q.push(v);
						}
						n.defer = !0;
						for (const w of [localStorage, sessionStorage])
							Object.keys(w || {})
								.filter((y) => y.startsWith("_zaraz_"))
								.forEach((x) => {
									try {
										f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x));
									} catch {
										f[h]["z_" + x.slice(7)] = w.getItem(x);
									}
								});
						n.referrerPolicy = "origin";
						n.src =
							"/cdn-cgi/zaraz/s.js?z=" +
							btoa(encodeURIComponent(JSON.stringify(f[h])));
						m.parentNode.insertBefore(n, m);
					};
					["complete", "interactive"].includes(g.readyState)
						? zaraz.init()
						: f.addEventListener("DOMContentLoaded", zaraz.init);
				})(w, d, "zarazData", "script");
			})(window, document);
		</script>
		<script
			type="text/javascript"
			charset="UTF-8"
			src="./Car Rentals_files/common.js.download"
			nonce="ca7d7575-1c07-416e-b15c-d5d717d2d211"
		></script>
		<script
			type="text/javascript"
			charset="UTF-8"
			src="./Car Rentals_files/util.js.download"
			nonce="ca7d7575-1c07-416e-b15c-d5d717d2d211"
		></script>
	</head>
	<body style="display: block">
		<button type="button" id="mobile-nav-toggle">
			<i class="lnr lnr-menu"></i>
		</button>
		<header id="header">
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="index.php"
							><img src="./Car Rentals_files/logo.png" alt="" title=""
						/></a>
					</div>
					<nav id="nav-menu-container">
						<ul
							class="nav-menu sf-js-enabled sf-arrows"
							style="touch-action: pan-y"
						>
							<li class="menu-active">
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="about.php">About</a>
							</li>
							<li>
								<a href="cars.php">Cars</a>
							</li>
							<li>
								<a href="service.php">Service</a>
							</li>
							<li>
								<a href="team.php">Team</a>
							</li>
							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<section class="banner-area relative" id="home">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">About Us</h1>
						<p class="text-white link-nav">
							<a href="index.php">Home </a>
							<span class="lnr lnr-arrow-right"></span>
							<a href="about.php"> About Us</a>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="home-about-area" id="about">
			<br /><br /><br />
			<div class="container-fluid">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-6 no-padding home-about-left">
						<img class="img-fluid" src="carRental/img/about-img.jpg" alt="" />
					</div>
					<br /><br /><br />
					<div class="col-lg-6 no-padding home-about-right">
						<h1>
							Your Best Trip <br />
							Is With Us
						</h1>
						<p>
							<span>We are here to rent you our best cars</span>
						</p>
						<p>
							Lancer.Id is a Cars Rent that have been renting cars since 1978.
							With many support we finnally reach the top spot for the best Cars
							Rent out there. Our rent fee is cheap and you can book this easily
						</p>
						<a class="text-uppercase primary-btn" href="index.php"
							>get details</a
						>
					</div>
				</div>
			</div>
		</section>

		<script src="carRental/js/jquery-2.2.4.min.js"></script>
		<script
			src="carRental/js/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"
		></script>
		<script src="carRental/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="./Car Rentals_files/js"></script>
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

		<script async="" src="./Car Rentals_files/js(1)"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "UA-23581568-13");
		</script>
		<script
			defer=""
			src="./Car Rentals_files/vaafb692b2aea4879b33c060e79fe94621666317369993"
			integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
			data-cf-beacon='{"rayId":"7a07319618834bf2","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}'
			crossorigin="anonymous"
		></script>
	</body>
</html>

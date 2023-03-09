<!DOCTYPE html>

<html lang="zxx" class="no-js" style="display: block">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<link rel="shortcut icon" href="img/fav.png" />

		<meta name="author" content="codepixer" />

		<meta name="description" content="" />

		<meta name="keywords" content="" />

		<title>Car Rentals</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
			crossorigin="anonymous"
		/>
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css"
		/>
		<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
		<link rel="stylesheet" href="carRental/carRental/css/" />
		<link
			rel="stylesheet"
			href="carRental/carRental/css/font-awesome.min.css"
		/>
		<link rel="stylesheet" href="carRental/css/bootstrap.css" />
		<link rel="stylesheet" href="carRental/css/magnific-popup.css" />
		<link rel="stylesheet" href="carRental/css/nice-select.css" />
		<link rel="stylesheet" href="carRental/css/animate.min.css" />
		<link rel="stylesheet" href="carRental/css/jquery-ui.css" />
		<link rel="stylesheet" href="carRental/css/owl.carousel.css" />
		<link rel="stylesheet" href="carRental/css/main.css" />
		<script defer="" referrerpolicy="origin"></script>
		<script nonce="edd6893a-16d3-4b7f-a23c-f8ba8f607653">
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
	</head>



<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("user_admin", $_POST['email'], $_POST['password'])) {
            echo ' <button type="button" id="mobile-nav-toggle">
			<i class="lnr lnr-menu"></i>
		</button>
		<header id="header">
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="index..php"
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
						<h1 class="text-white">Login Success!</h1>
						<p class="text-white link-nav">
							<a href="index.php">Login </a>
							<span class="lnr lnr-arrow-right"></span>
							<a href="about.php">Login Success!</a>
						</p>
					</div>
				</div>
			</div>
		</section>';
        } else echo ' <button type="button" id="mobile-nav-toggle">
        <i class="lnr lnr-menu"></i>
    </button>
    <header id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="carRental/index.html"
                        ><img src="./Car Rentals_files/logo.png" alt="" title=""
                    /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul
                        class="nav-menu sf-js-enabled sf-arrows"
                        style="touch-action: pan-y"
                    >
                        <li class="menu-active">
                            <a href="carRental/index.html">Home</a>
                        </li>
                        <li>
                            <a href="carRental/about.html">About</a>
                        </li>
                        <li>
                            <a href="carRental/cars.html">Cars</a>
                        </li>
                        <li>
                            <a href="carRental/service.html">Service</a>
                        </li>
                        <li>
                            <a href="carRental/team.html">Team</a>
                        </li>
                        <li>
                            <a href="carRental/contact.html">Contact</a>
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
                    <h1 class="text-white">Email or Password Wrong</h1>
                    <p class="text-white link-nav">
                        <a href="carRental/index.html">Login </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="carRental/about.html">Email or Password Wrong</a>
                    </p>
                </div>
            </div>
        </div>
    </section>';
    } else echo' <button type="button" id="mobile-nav-toggle">
    <i class="lnr lnr-menu"></i>
</button>
<header id="header">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="carRental/index.html"
                    ><img src="./Car Rentals_files/logo.png" alt="" title=""
                /></a>
            </div>
            <nav id="nav-menu-container">
                <ul
                    class="nav-menu sf-js-enabled sf-arrows"
                    style="touch-action: pan-y"
                >
                    <li class="menu-active">
                        <a href="carRental/index.html">Home</a>
                    </li>
                    <li>
                        <a href="carRental/about.html">About</a>
                    </li>
                    <li>
                        <a href="carRental/cars.html">Cars</a>
                    </li>
                    <li>
                        <a href="carRental/service.html">Service</a>
                    </li>
                    <li>
                        <a href="carRental/team.html">Team</a>
                    </li>
                    <li>
                        <a href="carRental/contact.html">Contact</a>
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
                <h1 class="text-white">Error : Database connection</h1>
                <p class="text-white link-nav">
                    <a href="carRental/index.html">Login </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="carRental/about.html">Error : Database connection</a>
                </p>
            </div>
        </div>
    </div>
</section>';
} else echo ' <button type="button" id="mobile-nav-toggle">
<i class="lnr lnr-menu"></i>
</button>
<header id="header">
<div class="container">
    <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
            <a href="carRental/index.html"
                ><img src="./Car Rentals_files/logo.png" alt="" title=""
            /></a>
        </div>
        <nav id="nav-menu-container">
            <ul
                class="nav-menu sf-js-enabled sf-arrows"
                style="touch-action: pan-y"
            >
                <li class="menu-active">
                    <a href="carRental/index.html">Home</a>
                </li>
                <li>
                    <a href="carRental/about.html">About</a>
                </li>
                <li>
                    <a href="carRental/cars.html">Cars</a>
                </li>
                <li>
                    <a href="carRental/service.html">Service</a>
                </li>
                <li>
                    <a href="carRental/team.html">Team</a>
                </li>
                <li>
                    <a href="carRental/contact.html">Contact</a>
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
            <h1 class="text-white">All fields are required</h1>
            <p class="text-white link-nav">
                <a href="carRental/index.html">Login </a>
                <span class="lnr lnr-arrow-right"></span>
                <a href="carRental/about.html">All fields are required</a>
            </p>
        </div>
    </div>
</div>
</section>';
?>



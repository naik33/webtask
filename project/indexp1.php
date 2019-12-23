<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Nura</title>
	<link rel="stylesheet" href="style2.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
	<header>
		<div class="header-container">
			<div class="logo">
				<img src="logo2.png" alt="logo">
			</div>
			<input type="checkbox" id="menu-checkbox">
			<nav role="navigation">
				<label for="menu-checkbox" class="toggle-button" data-open="Menu" data-close="CLOSE" onclick></label>
				<ul class="main-menu">
					<li><a href="#">Home</a></li>
					<li><a href="products.html">Products</a></li>
					<li><a href="index.php">Sign up</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<content>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"></form>
	</content>
	<main>
		<section class="top-slide">
			<div class="top-container">
				<div><h2>WE BELIEVE</h2></div>
				<div><h2>IN QUALITY DESIGN</h2></div>
				<div><p>No need to blame the watch</p></div>
				<div><p>What time is customized</p></div>
				<div><p>After all, even if you break them,</p></div>
				<div><p>Time overtakes us ...</p></div>
			</div>
		</section>
		<section class="specialize">
			<div class="specialize-container">
				<h3>We create quality designs</h3>
			<p>We specialize in Web Design/Development and Graphic Design</p>
			<div class="specialize-cards">
				<div class="card">
					<div class="topcard">
						<img src="abt-1.jpg">
					</div>
					<div class="bottom-card">
						<p class="first-p">Redesigning <br> with personality</p>
					</div>
				</div>
				<div class="card">
					<div class="topcard">
						<img src="abt-2.jpg">
					</div>
					<div class="bottom-card">
						<p class="first-p">Redesigning <br> with personality</p>
					</div>
				</div>
				<div class="card">
					<div class="topcard">
						<img src="abt-3.jpg">
					</div>
					<div class="bottom-card">
						<p class="first-p">Redesigning <br> with personality</p>
					</div>
				</div>
				</div>
			</div>
		</section>
		<section class="portfolio">
			<h4>OUR WORK</h4>
			<p>The World of Watches is one of the best online stores where you are offered a wide assortment of watches from leading world brands.</p>
			<div class="toggles">
				<button id="showall">SHOW ALL</button>
				<button id="webdev">EXPENSIVE</button>
				<button id="webdesign">	CHEAP</button>
				<button id="graphd">UNIQUE</button>
			</div>
			<div class="posts">
				<div class="post webdev"><img src="c-1.jpg"></div>
				<div class="post webdesign"><img src="pr-2.jpg"></div>
				<div class="post graphd"><img src="c-3.jpg"></div>
				<div class="post webdev"><img src="p-1.png"></div>
				<div class="post webdesign"><img src="c-2.jpg"></div>
				<div class="post webdev"><img src="pr-1.jpg"></div>
				<div class="post webdesign"><img src="p-3.png"></div>
				<div class="post graphd"><img src="p-2.png"></div>
			</div>
		</section>
		<section class="brand-slider">
			
		</section>
	</main>
	<footer>
		<div class="footer-container">
			<div class="about-us">
				<h4>About us</h4>
				<p>Our most valuable resource is a team. We have a young and vibrant team, among us there are many creative people, strong professionals and diverse personalities. We do everything so that Netpeak is not just an agency, but a lifestyle and way of thinking.</p>
				<a href="#">Learn more</a>
			</div>
			<div class="tweets">
				<h4>Latest tweets</h4>
			</div>
			<div class="contacts">
				<h4>Contact info</h4>
			</div>
		</div>
	</footer>

	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src="script.js"></script>
	<script>
		
let garden={
	"login":naik33,
	"username":nurik,
	"message":"You do not have permission",
	"workers":[
		"gardener",
		"gatherer"
	]
}
console.log(JSON.parse(JSON.stringify(garden)));
	</script>
</body>
</html>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>WOSS Film Club</title>
	<link rel="apple-touch-icon" sizes="180x180" href="../resources/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../resources/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../resources/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="../resources/img/favicon/site.webmanifest">
	<link rel="shortcut icon" href="../resources/img/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="../resources/img/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">	
	<link href="../css/gallery.css" rel="stylesheet" type="text/css">
	<link href="../css/head.css" rel="stylesheet" type="text/css">
	<link href="../css/loading.css" rel="stylesheet" type="text/css">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
	<link rel="stylesheet" href="path/to/swiper.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
	
	<script type="text/javascript">
		var count = 0;
		function myFunction(x) {
			x.classList.toggle("change");
			$(".nav").fadeToggle();
			$(".menu-hide").toggle();
			count++;
			if(count%2 == 0){
				$(".container").animate({right:'0'});
				$(".container").removeClass("afchange");
				$(".container").removeClass("bfchange");
			}
			else{
				$(".container").animate({right:'11vw'});
				$(".container").removeClass("afchange");
				$(".container").removeClass("bfchange");
			}
		}	
	</script><!--menu button-->
	<script type="text/javascript">
		$(document).ready(function(){
			$(".container").mouseover(function(){
				if(window.count%2 == 0){//menu is open
					$(".container").addClass("bfchange");
				}
				else{//menu is not open
					$(".container").addClass("afchange");
				}
			});
			$(".container").mouseleave(function(){
				if(window.count%2 == 0){//menu is open
					$(".container").removeClass("bfchange");
				}
				else{//menu is not open
					$(".container").removeClass("afchange");
				}		  
			});
		});
	</script><!--menu button hover-->
	<script type="text/javascript">
		$(document).ready(function(){
			$(".menu-hide").click(function(){
				$(".nav:visible").fadeOut();
				$(".container").removeClass("change");
				$(".container").animate({right:'0'});
				$(".menu-hide").toggle();
				window.count++;
			});
		});
	</script><!--hide menu on click of page-->
	<script type="text/javascript">
		$(document).ready(function(){
			window.onload = function(){
				setTimeout(function(){
					$("div#loading-screen > h1").css({"opacity":"1",
													  "-webkit-animation":"FadeOut 1s ease-in-out 0s forwards",
													  "-moz-animation":"FadeOut 1s ease-in-out 0s forwards","animation":"FadeOut 1s ease-in-out 0s forwards"});
					$("div#loading-screen > em").css({"opacity":"1",
													  "-webkit-animation":" LLGradient 10s ease infinite, FloatIn 1.5s ease-out 0.2s 1 forwards, FadeOut 1s ease-in-out 0.3s forwards",
													  "-moz-animation":" LLGradient 10s ease infinite, FloatIn 1.5s ease-out 0.2s 1 forwards, FadeOut 1s ease-in-out 0.3s forwards",
													  "animation":" LLGradient 10s ease infinite, FloatIn 1.5s ease-out 0.2s 1 forwards, FadeOut 1s ease-in-out 0.3s forwards"});
					$(".loading").addClass("loaded").removeClass("loading");
					setTimeout(function(){
						$(".loaded").fadeOut();
					},2000);
    			}, 3000);
				clearTimeout(timeout);
							}
		});
	</script><!--loading screen-->
</head>

<body>
	<div class="loading" id="loading-screen">
		<div class="loading" id="loading-background"></div>
		<hr class="loading" id="LoadHr1">
		<em class="loading">FILM</em>
		<h1 class="loading">CLUB</h1>
		<hr class="loading" id="LoadHr2">
	</div>
	<div class="menu">
		<a id="nav-logo" href="index.php">
			<img src="../resources/img/empty-logo.png"> 
			<h1>WOSS FILM CLUB</h1>
		</a>
		<div id = "barcontcont"></div>
			<div class="container" onClick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
		
		<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="contact.php">Contact</a></li>
			
		</ul>
	</div>
	<div class="menu-hide"></div>
	
</body>
</html>
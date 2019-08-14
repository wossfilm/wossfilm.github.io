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
	<link href="../css/home.css" rel="stylesheet" type="text/css">
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
		$(document).ready(function(){
			$(".slide").click(function(){
				if(window.navState){
					//nav is not hidden
					window.disableTimer = true;
					$(".menu:visible").fadeOut();
					$(".gallery-thumbs:visible").fadeOut();
					$(".gallery-top").addClass("idle");
					$("body").css("cursor","auto");
					navState = false;
					$("#prev").fadeToggle();
					$("#next").fadeToggle();
				}
				else{
					//nav is hidden
					window.disableTimer = false;
					$(".menu:hidden").fadeIn();
					$(".gallery-thumbs:hidden").fadeIn();
					$(".gallery-top").removeClass("idle");
					$("body").css("cursor","auto");
					navState = true;
					$("#prev").fadeToggle();
					$("#next").fadeToggle();
				}
			});	
		});
	</script><!--nav bar hide and display clicker-->
	<script type="text/javascript">
		var navState = true;
		var timeout;
		var disableTimer = false;
		$(document).ready(function(){
			document.onmousemove = function(){
				if(disableTimer != true){
					$(".menu:hidden").fadeIn();
					$(".gallery-thumbs:hidden").fadeIn();
					$(".gallery-top").removeClass("idle");
					$("body").css("cursor","auto");
					navState = true;
					$("#prev").fadeIn();
					$("#next").fadeIn();
				}
				clearTimeout(timeout);
				timeout = setTimeout(function(){
					if(disableTimer != true){
					$(".menu:visible").fadeOut();
					$(".gallery-thumbs:visible").fadeOut();
					$(".gallery-top").addClass("idle");
					$("body").css("cursor","none");
					navState = false;
					$("#prev").fadeOut();
					$("#next").fadeOut();
					}
				},5000);
			};
		});
	</script><!--nav bar hide and display timer-->

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
	<script type="text/javascript">
		
		var controller = new ScrollMagic.Controller();
		
		
		
	</script><!--scroll magic-->
	<script type="text/javascript">
	  $(document).ready(function () {
		  $(".swiper-container").css("position","absolute");
		  //initialize swiper when document ready
		  var mySwiper = new Swiper ('.gallery-top', {
			// Optional parameters
			speed: 400,
			effect:'coverflow',
      		centeredSlides: true,
      		slidesPerView: 'auto',
			loop:true,
			direction: 'vertical',
			navigation:{
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			autoplay:{
				delay: 5000,
				disableOnInteraction: false,
			},
			parallax: true,
			coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows: true,
			},
			mousewheel: true,
			keyboard: true,
			thumbs: {
				swiper: galleryThumbs
			}
			});
		  var galleryThumbs = new Swiper ('.gallery-thumbs',{
			spaceBetween: 10,
      		slidesPerView: 5,
      		loop: true,
      		freeMode: true,
      		loopedSlides: 5, //looped slides should be the same
      		watchSlidesVisibility: true,
      		SwatchSlidesProgress: true,
			direction: 'vertical',
			mousewheel: true,
    	});
		  $(".thumb").on("click",function(){
			console.log("clicked");
			var indexn = $(this).attr("data-swiper-slide-index");
			mySwiper.slideTo(indexn);
		});
		  $(".swiper-slide").css("opcaity","auto");
		  $(".gallery-thumbs").css("opcaity","auto");
	  });
	</script><!--Slides-->
	<script type="text/javascript">
		$(document).ready(function(){
			$(".swiper-button-prev").css({
				"left":"50%",
				"top":"6vw",
				"margin-top":"0",	
				"transform":"rotate(90deg)",
				"z-index":"10",
			});
			$(".swiper-button-next").css({
				"left":"50%",
				"bottom":"3vw",
				"top":"auto",
				"margin-top":"0",
				"transform":"rotate(90deg)",
				"z-index": "10",
			});
		});
	</script><!--arrow css-->
	
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
	
</head> 

<body>
	<div class="loading" id="loading-screen">
		<div class="loading" id="loading-background"></div>
		<hr class="loading" id="LoadHr1"><br>
		<em class="loading">FILM</em><br>
		<h1 class="loading">CLUB</h1><br>
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
	<!-- Slider main container -->
	<div class="swiper-container gallery-top">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->
			<div class="swiper-slide slide" style="background-image: url(../resources/img/IMG_0001.png)"></div>
			<div class="swiper-slide slide" style="background-image: url(../resources/img/IMG_0008.jpg)"></div>
			<div class="swiper-slide slide" style="background-image: url(../resources/img/IMG_0061.jpg)"></div>
			
		</div>
		
		<!-- If we need pagination -->
		<!--<div class="swiper-pagination"></div>-->
		
		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev swiper-button-white" id="prev"></div>
		<div class="swiper-button-next swiper-button-white" id="next"></div>
		
		

	</div>
	<div class="swiper-container gallery-thumbs">
    	<div class="swiper-wrapper">
    	  <div class="swiper-slide thumb" style="background-image: url(../resources/img/IMG_0001.png)"></div>
     	 <div class="swiper-slide thumb" style="background-image: url(../resources/img/IMG_0008.jpg)"></div>
    	  <div class="swiper-slide thumb" style="background-image: url(../resources/img/IMG_0061.jpg)"></div>
   	 </div>
	</div>
</body>
</html>
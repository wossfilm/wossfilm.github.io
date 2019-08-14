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
	
<div class="menu">
		<a id = "nav-logo"><img src="../resources/img/empty-logo.png"></a>
		<div id = "barcontcont"></div>
			<div class="container" onClick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
		
		<ul class="nav">
			<li><a>Home</a></li>
			<li><a>Gallery</a></li>
			<li><a>SignUp</a></li>
			<li><a>Contact</a></li>
			
		</ul>
	</div>
<div class="menu-hide"></div>
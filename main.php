 <!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lifeline.in</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	
	
	
	
	<style type="text/css">
	
	input[type="text"]::-webkit-input-placeholder {
color: white !important;
}
 
input[type="text"]:-moz-placeholder { /* Firefox 18- */
color: white !important;  
}
 
input[type="text"]::-moz-placeholder {  /* Firefox 19+ */
color: white !important;  
}
 
input[type="text"]:-ms-input-placeholder {  
color: white !important;  
}
	
	
.button.big {
		
		font-family: "Lato", Helvetica, sans-serif;
			font-size: 1.55em;
		}
.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index:999;
	background: url('page.gif') 50% 50% no-repeat rgb(0,0,0);
}	

#banner {
		background: url("images/overlay.png"), url("../images/banner1212.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		color: #ffffff;
		padding: 10em 0em 14em;
		text-align: center;
	}
 		
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>



	<body class="landing">
<div id="jump"></div>
		<!-- Header -->
			<header id="header">
				<h1><a href="main.php"><img src="lifelinelogo2.png" style="padding-top:4px;"height="90" width="250"></img></a></h1>
				<nav id="nav">
					<ul> 
						<li><a href="main.php"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a></li>
						<li><a href="helpe.php">E-Help!</a></li>
						<li><a href="index.html">Path Labs</a></li>
						<li><a href="hospitals.php">Hospitals</a></li>
						<li><a href="clinic.php">Clinics</a></li>
			
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Lifeline.in</h2>
				
				<h1 class="ribbon">
   <span style="font-family:'Lato', Helvetica, sans-serif;font-size:15pt;color:#FFFFFF;"class="ribbon-content">Instant Med-Help!</span>
</h1><hr />
				
                     
					
					<hr /><ul class="actions">
					<li><button class="button fit" onclick="" ><i class="fa fa-thumb-tack fa-fw"></i>&nbsp;&nbsp;Emergency Help!</i></button></li></ul>
				   <ul class="actions"><li><a class="button big" href="index.html" ><i class="fa fa-thumb-tack fa-fw"></i>&nbsp;&nbsp;Path Labs</i></a></li>
					<li><button class="button big" onclick="" ><i class="fa fa-thumb-tack fa-fw"></i>&nbsp;&nbsp;Hospitals</i></button></li>
					<li><button class="button big" onclick="" ><i class="fa fa-thumb-tack fa-fw"></i>&nbsp;&nbsp;Clinics</i></button></li>
					</ul>
				
				<script> 
function animate() {
$('#jump').toggleClass("loader");
	
}

function getLocation() {

       animate();
        navigator.geolocation.getCurrentPosition(showPosition);}
    


function showPosition(position) {
    
     	var la =  position.coords.latitude ;
           var lo = position.coords.longitude;
 
	$('input#latitude').val(position.coords.latitude);
    $('input#longitude').val(position.coords.longitude);
	
	
	document.getElementById("autosub").submit();
	}
</script>



<form  id="autosub"action="locate.php#two" method="post">
<input type="hidden"  name="lat"id="latitude"/>
					<input type="hidden" name="lon" id="longitude"/>
					
</form>

			</section>
<!-- two -->

			
			
			
			
		<!-- One -->
			
			<div id="corusel"></div>
	
<section id="one" class="wrapper style1 align-center">
			  <div class="container">
			    
			    <div class="row 200%">
			      
			      <section class="4u 12u$(small)"> <i class="icon big rounded fa-inr"></i>
			        <p>Get emergency help in a click.One click ambulance help.</p>
		          </section>
				  <section class="4u 12u$(small)"> <i class="icon big rounded fa-clock-o"></i>
			        <p>Compare Rates & book Pathology tests in less than five minutes.
			          COMPARE PRICES.SAVE TIME. SAVE MONEY!</p>
		          </section>
			      <section class="4u$ 12u$(small)"> <i class="icon big rounded fa-user"></i>
			        <p>Find and Contact Nearby Hospitals and Clinics in a click.</p>
		          </section>
		        </div>
		      </div>
    </section>





		<!-- Three -->
			

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Introduction!</h3>
							<p>We are first of our kind with striking features
                             which makes this portal more user friendly.
                            In lifeline we work for the benefit of people.</p>
							<ul class="list">
								<li>COMPARE PRICES.SAVE TIME. SAVE MONEY!</li>
								<li>Find and Compare Nearby Hospitals in a click.</li>
								<li>Find and Compare Nearby Clinics in a click.</li>
								<li>Compare & book pathology test in less than five minutes.</li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Shortcuts</h3>
							
							<ul class="alt">
								<li><a href="main.php">Home</a></li>
								<li><a href="helpe.php">E-Help!</a></li>
						<li><a href="index.html">Path Labs</a></li>
						<li><a href="hospitals.php">Hospitals</a></li>
						<li><a href="clinic.php">Clinics</a></li>
						        
							</ul>
						</section>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								
								<li>
									<h3>Mail</h3>
									<a href="mailto:asklifeline@gmail.com">asklifeline@gmail.com</a>
								</li>
								<li>
									<h3>Phone</h3>
									(+91) 9717-06-5383
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; lifeline.in. All rights reserved.</li>
						
						
					</ul>
				</div>
			</footer>

	</body>
</html>
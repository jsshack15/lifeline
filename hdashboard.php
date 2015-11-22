   <?php
 require_once("hauth.php");?>
 <?php include("dbaseconnection2.php");

$user=$_SESSION['SESS_USERNAME'];
 ?>
 <!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Dashboard</title>
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
		.file-input-wrapper {
    width: 100%;
   
    overflow: hidden;
    position: relative;
}
.file-input-wrapper > input[type="file"] {
    font-size: 200px;
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0;
}
.file-input-wrapper > .btn-file-input {
    display:visible;
    width: 100%;
	padding-top:8px;
	padding-bottom:8px;
   font-size:20px;
	background-color: rgba(0, 204, 102, 0.95);
	border-radius:10px;
	font-family: "Lato", Helvetica, sans-serif;
	color:white;
}
.file-input-wrapper:hover > .btn-file-input {
    background-color: rgba(0, 204, 102, 0.68);
}

		</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="main.php"><img src="lifelinelogo2.png" style="padding-top:4px;"height="90" width="250"></img></a></h1>
				<nav id="nav">
					<ul>
					<li><a href="">User :<span style="color:green;font-size:20px;"> <?php print $_SESSION['SESS_USERNAME']?></span></a></li>
						<li><a href="hupdatedetails.php">Home</a></li>
						
						                <li><a href="hdashboard.php">Dashboard</a></li>
						<li><a style="font-size:20px;color:green;"href="hlablogin.php">Logout</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
		
			<section id="main" class="wrapper">
			
				<div id="return" class="container" >

					<header style="text-align:center;">

                         <h1 style="font-size:60px;">Dashboard</h1>
                         <p >For help : +91-9717-06-5383</p>
					</header>				
						<hr /><hr /><hr /><hr /><hr />
		
				<?php

$sql=mysql_query("select name,counter,id,time,date,lat,lon from dashboard where username='$user' order by id DESC");
echo'<div class="table">
				    <table>';
while($row=mysql_fetch_row($sql))
{

if($row[1]>0){$rgb="#F4A460";}
else{$rgb="#FFE4B5";}
echo'
                      <tr style="background:'.$rgb.';">
                      <td >Latitude : <span style="color:green;font-size:20px;">'.$row[5].'<span></td>
					  <td >Longitude: <span style="color:green;font-size:20px;">'.$row[6].'<span></td>
                      <td >Time : <span style="color:red;font-size:20px;">'.$row[3].'<span></td>
					  <td ><a class="button small" >PLAY Message</a></td>
                    </tr>';
               
					echo'<tr style="background:'.$rgb.';">
                      
					  <td colspan="2">Message : <span style="color:green;font-size:20px;">**********<span></td>
					  <td colspan="2">Date : <span style="color:green;font-size:20px;">'.$row[4].'<span></td>
</tr>';

                     
					  


$sql6=mysql_query("update dashboard set counter=counter+1 where id='$row[2]'");
}

				echo'
                    </table>
				  
					</div>
';




?>		 
		
				</div>
			</section>

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
								
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Shortcuts</h3>
							
							<ul class="alt">
								
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
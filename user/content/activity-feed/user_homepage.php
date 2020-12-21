<?php
	session_start();

?>
<!DOCTYPE html>
<html lang="en" >
	<link rel="stylesheet" href="user_homepage-style.css">
<head>

	<meta charset="UTF-8">
	<?php echo"<title>**** you, {$_SESSION['username']}!</title>" ?>

	<!-- FONTS BELOW -->
	<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bebas+Neue&family=Bungee&family=Fjalla+One&family=Major+Mono+Display&family=Pacifico&family=Permanent+Marker&family=Press+Start+2P&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'><link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- FONTS ABOVE -->
	<!-- OTHER STUFF BELOW -->
	<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- OTHER STUFF ABOVE -->
</head>

<body onload="enableLightTheme()">
<!-- Content Area -->

<?php
require 'C:\xampp\htdocs\Git\res\phpScripts\sidebar.php'; ?>


<div class="main">
<div id="centertxt">
		<div id="top_text" >
			<?php echo"<h4 style='margin: 0px;  text-shadow: 12px 7px black; font-size: 150px; text-align: center;'>Welcome, {$_SESSION['username']}!</h4>" ?>
		</div>
		<div id="video_background">
			<video autoplay muted loop src="../../res/videos/advanced.mp4" type=video/mp4  style="position: inherit; box-shadow: rgba(0, 0, 0, 0.19) 0 0 8px 0; width: 100%; height: 100%; display: flex"></video>
		</div>
</div>

<div class="content">

<script type = "text/javascript">
				$(document).ready(function() {
					$('.sidebar-mini').hover(function () {
						$('.sidebar').delay(50000).toggleClass('dropdown_expand');
					})
					$('.sidebar').hover(function () {
						$('.sidebar').toggleClass('dropdown_expand');
						$('.sidebar-mini').toggleClass('hide');	

					})
				})
	</script>

	<div class="container-section1">
		<div class="cont1_top">
			<div id="cont1_top_left">
			<img id="img_tl" style="width: 100px; height: 100px" src="../res/images/user_images/MINDtek logo.png" type="img/png">
				 <h3> DMs</h3>
				 <h3> Tags</h3>
				 <h3> Comments</h3>
				 <h3> Points</h3>
			</div> 
				 
			<div id="cont1_top_right">
				
			</div>
		</div>
		<div class="cont1_mid">
			<div id="cont1_mid_left">

			</div>

			<div id="cont1_mid_right-1">
			</div>

			<div id="cont1_mid_right-2">
			</div>
		</div>
		<h2 style="margin-top: 50px; margin-bottom: 50px; font-size: 75px;">Messages</h2>
		<div class="cont1_bottom">

			<div id="cont1_bottom-1">
			</div>

			<div id="cont1_bottom-2">
			</div>

			<div id="cont1_bottom-3">
			</div>
		</div>
	</div>
	<h2 style="margin-top: 50px; margin-bottom: 50px; font-size: 75px;">StoryLight Suggests</h2>	
	<div class="container-section2">
		<div id="cont2_top>">

		</div>

		<div id="cont2_bottom">

		</div>
	</div>

	<div class="container-section3">
		<div id="card-1">
		</div>
		<div id="card-2">
		</div>
		<div id="card-3">
		</div>
	</div>
</div>
</div>

<!--Theming Support-->
<script>
		
</script>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
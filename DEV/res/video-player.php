<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" >
    <link rel="stylesheet" href="video_player-style.css">
<head>

	<meta charset="UTF-8">
	<title></title>

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
<?php require 'C:/xampp/htdocs/Git/res/phpScripts/topbar.php'; ?>

<div class="main"> <!-- I ADDED PADDING THE THIS TO MAKE IT LOOK BETTER .MrLive. -->
	<div id="centertxt" style="text-align: center;">
		<div id="top_text">
			<h1 style=" margin-top: 0; margin-bottom: -70px; text-align: center; color: white; text-shadow: 12px 7px black; font-size: 50px">Video Player</h1>
		</div>
		<div id="video_background">
			<video autoplay muted loop src="..\res\videos\advanced.mp4" type=video/mp4  style="position: inherit; box-shadow: rgba(0, 0, 0, 0.19) 0 0 8px 0; width: 100%; height: 100%; display: flex"></video>
		</div>
</div>

<div class="content">
	<div class="video-section">
      
    </div>

	<div class = "video-metadata">
        <h1 id="video-title">This is a test</h1>
        <br>
        <h2 id="video-data">Uploaded 7/19/2020 | 540,658,487,548 views</h2>
        <br>
        <div id="metadata_flex">
          <img id="user_image" src="/res/images/user-images/MINDtek logo.png " type="img/png" >
          <h3 id="username">MINDtek</h3>
        </dvi>
    </div>
    
    <div class="video-bottom">
        <div id="video-bottom_left">
        
    </div>

    <div id="video-bottom_right">
        <div id="user-post">

</div>

    <div id="user-video1">

    </div>

    <div id="user-video2">

    </div>

    </div>
</div>

</div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
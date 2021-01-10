<?php
session_start();
?>

<html>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bebas+Neue&family=Bungee&family=Fjalla+One&family=Major+Mono+Display&family=Pacifico&family=Permanent+Marker&family=Press+Start+2P&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<body>
<?php 
require "C:/xampp/htdocs/git/res/phpScripts/ConnectDb.php";
require "C:/xampp/htdocs/git/res/phpScripts/topbar-universal.php"; ?>

<div id="centertxt">
		<div id="top_text" >
			<?php echo"<h4 style='margin: 0px;  text-shadow: 12px 7px black; font-size: 150px; text-align: center;'>{channel}</h4>" ?>
		</div>
		<div id="video_background">
			<video autoplay muted loop src="{videoChannelArt}" type=video/mp4  style="position: inherit; box-shadow: rgba(0, 0, 0, 0.19) 0 0 8px 0; width: 100%; height: 100%; display: flex"></video>
		</div>
</div>

<ul id="usernav">
    <li id="custom-item"><a class="active" href="#">Homepage</a></li>
    <li id="custom-item"><a id="customItema" href="{pageOption1url}">{pageOption1}</a></li>
    <li id="custom-item"><a id="customItema" href="{pageOption2url">{pageOption2}</a></li>
</ul>   
</body>
<div id="content-widget">
<?php require "C:/xampp/htdocs/git/res/phpScripts/videoWidget.php"; ?>
</div>
<h1>Latest videos</h1>
<div id ="video-suggestion-section">
<?php 
$findAllVideos = mysqli_query($conn, "SELECT video_location, video_description, video_created, video_title, video_username, video_pageurl, video_thumbnail_url, videos_views FROM videos WHERE video_username = 'administrator'");
$x = 0;
while ($rowV = $findAllVideos->fetch_row()){
    $x++;
echo "<div id='group1'> ";
    if ($x < 10){
        echo "
        <style>
        #video-smallWidget$x {
            margin-left: 20px;
            margin-bottom: 30px;
            position: relative;
            width: 30%;
        }
        </style>

        <div id='video-smallWidget$x'>
        <a href='$rowV[5]'> <img id='video-thumbnail' src='$rowV[6]' width='100%'></a>
        <a href='$rowV[5]'> <video autoplay id='hoverVid' src='$rowV[0]' width='100%'></a>
           <a href='$rowV[5]'> <h2 id='video-title'>$rowV[3]</h2></a>
            <br>
            <p id='video-description'>$rowV[1]</h2>
        </div>
    
        ";
    }
}
?>
</div>
<h1></h1>
</html>

<style>
#hoverVid {
    margin-top: -150px;
    
}
#video-description {
    font-size: 30px;
    margin-top: -20px;
}
#video-title{
    padding: 0px;
    margin: 0;
    font-size: 50px;
}
#video-suggestion-section {
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 22px 0px;
    background-color: white;
    border-radius: 5px;
    padding: 20px;
    display: flex;
}
a {
    text-decoration: none;
}
#widget-bottom {
    
}
#content-widget {
    overflow: hidden;
}
#usernav {
    display: flex;
    justify-content: center;
    text-align: center;
    height: 80px;
    background-color: black;
    border-radius: 5px;
    margin-top: 15px;
    overflow: none;
}

#custom-item {
    width: 30%;
}

#customItema {
    color: white;
    font-family: "Bebas Neue";
    font-size: 45px;
    text-decoration: none;
    list-style-type: none;
    transition: 300ms ease;
}

#customItema:hover {
    font-size: 47px;

}
.active {
    font-size: 50px;
    color: orange;
    text-decoration: none;
}
body {
    font-family: "Bebas Neue";
    padding: 10px;
}

#centertxt{
    margin-top: 10px;;
      box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
      color: white;
      overflow: hidden;
      position: relative;
      width: 100%;
      height: 200px;
      box-shadow: rgba(0, 0, 0, 0.19) 10px 0 8px 0;
      border-radius: 10px;
}

#top_text {
    position: absolute;
    width: 100%;
    height: 100%;
    font-size: 150px;
    float: center;
    background-color: rgba(42, 54, 165, 0.562); 
}

#video_background {
  width: 1920px;
  height: 1080px;
}
</style>
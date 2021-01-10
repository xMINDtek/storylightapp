<?php include "../../tools/https.php"; ?>
<?php session_start(); ?>
<!-- Welcome to StoryLight Inc. (C) 2020 -->
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <title>StoryLight - Video Player Template Page</title>
      <link rel="stylesheet" href="videoplayerpage.css">
      <script src="https://kit.fontawesome.com/dd6b81437c.js" crossorigin="anonymous"></script>
      <?php if ($_SESSION['theme'] == 'Dark') { include "./../../requirements/css/dark_theme_main.php"; } else { include "./../../requirements/css/light_theme_main.php"; } ?>
      <?php include "./../../requirements/css/sidebar_load.php"; ?>
    </head>
<body>
<html>
<header>
<?php include "./../../requirements/html/sidebar_load.php"; ?>
</header>
<body>
<div class="tertiary-container">
  <div class="videoplayer">
    <video controls>
      <source src="https://r2---sn-aigzrn7z.c.drive.google.com/videoplayback?expire=1608740187&ei=GzXjX8asIYTOhwa2xot4&ip=78.148.230.208&cp=QVRFWkhfT1FWSFhPOl9hWXZEQ3lWT01qUDJIcWk5X1MzaDdTd1BQcHpWQXR6QkZIYWVlVS1Nb2M&id=9e672b3bc2140067&itag=22&source=webdrive&requiressl=yes&mh=Wt&mm=32&mn=sn-aigzrn7z&ms=su&mv=u&mvi=2&pl=20&sc=yes&ttl=transient&susc=dr&driveid=11hQfPR03WUMKJV3vE72bJ42TFda_OKsY&app=explorer&mime=video/mp4&vprv=1&prv=1&dur=235.868&lmt=1608725770568933&mt=1608725137&sparams=expire,ei,ip,cp,id,itag,source,requiressl,ttl,susc,driveid,app,mime,vprv,prv,dur,lmt&sig=AOq0QJ8wRgIhAPC5rMC-1j8JEoqM38-qoXxbemmVZqsgE8eYgu_2sw4hAiEAkRalRVyavcxJNQQxqIpQ4CyQhytjb-IBuRSnZgEcfx0=&lsparams=mh,mm,mn,ms,mv,mvi,pl,sc&lsig=AG3C_xAwRQIhAIUznXfkd70_gtbIH0aEGPjjZ_MqK_EAn_20c2ixUR71AiAVyEeQD7HbiVEwUh2cYawkllNx5J_4i9sYY4nl0bDlZg==&cpn=yL3mW5YxjbwnvmVH&c=WEB_EMBEDDED_PLAYER&cver=20201218" type="video/mp4">
    </video>
    <div class="videoinfo">
      <div class="video-title">
        Lions Inside - Valley of Wolves (LYRICS)
      </div>
      <div class="video-desc">
        Lyrics video for Lions Inside by Valley of Wolves. A great song that was requested. 
      </div>
    </div>
  </div>
</div>
<?php include "./../../requirements/footer/footer_load.php"; ?>
</body>
</html>
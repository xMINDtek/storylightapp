<?php include "tools/https.php"; ?>
<?php $null = NULL; session_start(); if($_SESSION['username'] == $null) { header("Location: /account/login.php?please-login"); } ?>
<!-- Welcome to StoryLight Inc. (C) 2020 -->
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <title>StoryLight - Home</title>
      <link rel="stylesheet" href="home.css">
      <script src="https://kit.fontawesome.com/dd6b81437c.js" crossorigin="anonymous"></script>
      <?php if ($_SESSION['theme'] == 'Dark') { include "./requirements/css/dark_theme_main.php"; } else { include "./requirements/css/light_theme_main.php"; } ?>
      <?php include "./requirements/css/sidebar_load.php"; ?>
    </head>
<body>
<html>
<header>
  <?php include "./requirements/html/sidebar_load.php"; ?>
</header>
<body>
    <div class="header-main">
      <div id="mid-color">
        <div id="top-text">
        <?php 
        $systemTime = date("G");
        
        if ($systemTime < 12) {
         print("Good morning, " . $_SESSION['username']);  
        } else if ($systemTime = 12 | $systemTime = 13 | $systemTime = 14){
          print("Good afternoon, " . $_SESSION['username']);  
        } else if ($systemTime > 14){
          print("Good evening, " . $_SESSION['username']);  
        }        
        ?>
        </div>
      </div>
    </div>
    <div class="secondary-container">
        <div class="text">Suggested Posts</div>
        <div class="suggested-post-cn">
          <div class="suggested-post-img">
          </div>
          <a href="#suggested-post-link">
            <div class="suggested-post-desc">
              Latest post from Liam Willson! Click here to view more!
            </div>
          </a>
        </div>
      </div>
    
      <div class="tertiary-container">
          <h1 class="text">Suggested Content</h1>
          <iframe src="https://www.storieslight.com/info/info-pg1.php" width="100%" height="300px" style="border-radius: 10px;"></iframe>
    </div>
  </div>
</div>
<?php include "./requirements/footer/footer_load.php"; ?>
    <?php
    $ban = $_SESSION['banned'];
    if ($ban == NULL) {
      print ("Not Banned");
    } else {
      print ("Banned");
    }
    ?>
</body>
</html>
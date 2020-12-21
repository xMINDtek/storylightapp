<?php include "tools/https.php"; ?>
<?php $null = NULL; session_start(); if($_SESSION['username'] == $null) { header("Location: /account/login.php?please-login"); } ?>
<!-- Welcome to StoryLight Inc. (C) 2020 -->
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <title>StoryLight - Home</title>
      <link rel="stylesheet" href="./spotlight.css">
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
    [ StoryLight - Spotlight! ]
  </div>
  <div class="achivment">
    <img src="account/userimages/MrLiveChannelIcon_V8.png" class="achivment-img"><div class="achivment-info">MrLiveStudio earned the badge of video production</div>
  </div>
</body>
<?php include "./requirements/footer/footer_load.php"; ?>
</html>
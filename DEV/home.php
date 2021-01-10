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
      <div class="tertiary-container">
        
          <h1 class="text">Suggested Groups</h1>
          
          <div class="suggested-post-cn">
            <div class="suggested-post-img" style="background: linear-gradient(90deg, rgba(228, 100, 179, 0.397) 0%, rgba(143,69,208, 0.397) 35%, rgba(58,167,185, 0.397) 100%), url(https://images.pexels.com/photos/246753/pexels-photo-246753.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) center;">
            </div>
            <a href="#suggested-post-link">
              <div class="suggested-post-desc">
                Liam Taylors 3D Printing Group and Support Help!
              </div>
            </a>
          </div>
          
        </div>
      </div>
    
      <div class="tertiary-container">
        
          <h1 class="text">Suggested Content</h1>
          
          <div class="suggested-post-cn">
            <div class="suggested-post-img" style="background: linear-gradient(90deg, rgba(228, 100, 179, 0.397) 0%, rgba(143,69,208, 0.397) 35%, rgba(58,167,185, 0.397) 100%), url(https://images.pexels.com/photos/906484/pexels-photo-906484.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) center;">
            </div>
            <a href="#suggested-post-link">
              <div class="suggested-post-desc">
                MrLive posted a new video on his post! Click here to see more!
              </div>
            </a>
          </div>
          
          <br>
          
          <div class="suggested-post-cn">
            <div class="suggested-post-img" style="background: linear-gradient(90deg, rgba(228, 100, 179, 0.397) 0%, rgba(143,69,208, 0.397) 35%, rgba(58,167,185, 0.397) 100%), url(https://images.pexels.com/photos/906494/pexels-photo-906494.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) center;">
            </div>
            <a href="#suggested-post-link">
              <div class="suggested-post-desc">
                Join Liam Taylors group! His invisonary quest to find small creators
              </div>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "./requirements/footer/footer_load.php"; ?>
</body>
</html>
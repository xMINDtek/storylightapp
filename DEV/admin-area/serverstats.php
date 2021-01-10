<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>StoryLight - Admin Dashboard</title>
      <link rel="stylesheet" href="./style.css">
    </head>
<body>
<html>
    <body>
    <?php
      include("sidebar.php")
    ?>
    <div class="main">
    <div class="main-container" style="font-size: 20px; font-weight: 800; color: #40acff;">
            | Server Status |
        </div>
        <div class="main-container">
          <div class="monitor-name">
            Server Status: (https://www.storieslight.com)
          </div>
          <div class="monitor-status">
            <?php
                   error_reporting(0);
                   ini_set("default_socket_timeout","05");
                   set_time_limit(5);
                   $f=fopen("http://storieslight.com/","r");
                   $r=fread($f,1000);
                   fclose($f);
                   if(strlen($r)>1) {
                   echo("<span class='online-status'>Online</span>");
                   }
                   else {
                   echo("<span class='offline-status'>Offline</span>");
                   }
            ?>  
          </div>
    </div>
    <div class="main-container">
          <div class="monitor-name">
            Server Status: (https://storydev.epizy.com)
          </div>
          <div class="monitor-status">
            <?php
                   error_reporting(0);
                   ini_set("default_socket_timeout","05");
                   set_time_limit(5);
                   $f=fopen("https://storydev.epizy.com","r");
                   $r=fread($f,1000);
                   fclose($f);
                   if(strlen($r)>1) {
                   echo("<span class='online-status'>Online</span>");
                   }
                   else {
                   echo("<span class='offline-status'>Offline</span>");
                   }
            ?>  
          </div>
    </div>
    <div class="main-container">
          <div class="monitor-name">
            Server Status: (https://www.joehighton.co.uk)
          </div>
          <div class="monitor-status">
            <?php
                   error_reporting(0);
                   ini_set("default_socket_timeout","05");
                   set_time_limit(5);
                   $f=fopen("https://www.joehighton.co.uk","r");
                   $r=fread($f,1000);
                   fclose($f);
                   if(strlen($r)>1) {
                   echo("<span class='online-status'>Online</span>");
                   }
                   else {
                   echo("<span class='offline-status'>Offline</span>");
                   }
            ?>  
          </div>
    </div>
    <div class="main-container" style="font-size: 20px; font-weight: 800; color: #40acff;">
            | This Server Info |
        </div>
        <div class="main-container">
          <div class="monitor-name">
            CURRENT LOCATION
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['PHP_SELF']; ?>
          </div>
        </div>
        <div class="main-container">
          <div class="monitor-name">
            SERVER NAME
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['SERVER_NAME']; ?>
          </div>
        </div>
        <div class="main-container">
          <div class="monitor-name">
            HTTP HOST NAME
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['HTTP_HOST']; ?>
          </div>
        </div>
        <div class="main-container">
          <div class="monitor-name">
            SERVER SOFTWARE
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['SERVER_SOFTWARE']; ?>
          </div>
        </div>
        <div class="main-container">
          <div class="monitor-name">
            HTTP USER AGENT
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
          </div>
        </div>
        <div class="main-container">
          <div class="monitor-name">
            SERVER PROTOCOL
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['SERVER_PROTOCOL']; ?>
          </div>
        </div>
        <div class="main-container">
          <div class="monitor-name">
            CURRENT REMOTE USER
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['REMOTE_USER']; ?>
          </div>
        </div>
        <div class="main-container">
          <div class="monitor-name">
            CURRENT REMOTE PORT
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['REMOTE_PORT']; ?>
          </div>
        </div>
        <div class="main-container">
          <div class="monitor-name">
            SERVER PORT
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['SERVER_PORT']; ?>
          </div>
        </div>
        <div class="main-container">
          <div class="monitor-name">
            SERVER_ADMIN
          </div>
          <div class="monitor-status">
            <?php echo $_SERVER['SERVER_ADMIN']; ?>
          </div>
        </div>
    </div>
</div>
<script src="main.js"></script>
</body>
</html>
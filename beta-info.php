<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>StoryLight - BETA Program</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/beta-info.css" rel="stylesheet">
  
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-C6HSE6D6KP"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-C6HSE6D6KP');
  </script>
</head>

<body>
<?php require "nondev-assets/navbar-bootstrap.php" ?>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h2 id="hd-title" class="masthead-heading mb-0">Storylight BETA Program</h2>
      </div>
    </div>
    <div class="bg-circle-4 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-1 bg-circle"></div>
  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="p-5">
            <div class="info-1">
                <div id='info-left'> <h3>What is the BETA program?</h3> </div>
                <div id='info-right'>
                <p>The StoryLight BETA Program is designed to allow our most dedicated fans to get a glimpse into our new platform. Register to BETA test the platform and begin creating on StoryLight! </p>
                </div>
            </div>
            <div class="info-2">
                <div id="info-left">
                <h3>Why should I join?</h3>
                </div>
                <div id="info-right">
                <p>By joining this program, you will have direct access to the StoryLight BETA Discord server so you can communicate with the developers quickly.  You will also have a ‘Founders’ badge when the site launches to the public to let your friends know you played a role in making the site possible.</p>
                </div>
            </div>
            <div class="info-3">
                <div id="info-left">
                <h3>What are the requirements?</h3>
                </div>
                <div id="info-right">
                <p>This platform is still in active development, so by registering as a BETA tester you are expected to provide feedback/detailed bug reports.  Also, you must understand that some errors may occur in our backend systems that may require you to re-configure accounts and re-upload content.  Understand that you are not registering for a completed platform.             
                </div>
                </div>
                <div class="bugger-off">
                    <h1>Come back 01 January 2021 at 00:00 GMT to register!</h1>
                </div>
                <!--
            <div class="registration">
                <h1 style='text-align: center'>Sign me up!</h1>
                <form method="POST" action="betaRegister.php">
                    <div id="info-left">
                        
                    </div>
                    <div id="info-right">
                    </div>
                    <input type="text" name="username-signup" placeholder="Username" required="required" /> <br><br>
                    <input type="password" name="password-signup" placeholder="Password" required="required" /> <br><br>
                    <input type="email" name="email-signup" placeholder="Email" required="required" /> <br><br>
                    <h4>Choose a theme</h4>
                    <select id="theme_dropdown" name="theme">
                            <option value="Light">Light</option>
                            <option value="Dark">Dark</option>
                    </select> <br><br>
                    <h4>Upload a profile picture</h4>
                    <input id="imgFile" type="file" name="imgFile"> <br><br><br>
                    <button type="signup-submit" name="signup-submit" class="btn btn-primary btn-block btn-large">Register!</button>
                 </form>
            </div>
            !-->
            
        </div>
      </div> 
    </div>
    <div class='con-platform-join'>
    
    </div>
    <br>
  </section>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
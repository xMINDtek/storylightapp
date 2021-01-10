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
  <title>StoryLight Inc - Coming Soon!</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
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
<!--I consolidated the navbar code into navbar-bootstrap.php located in the non-restricted folder 'nondev-assets'.  This will make it easier to implement the responsive navbar on different pages. 
If this interferes with bootstrap, please let me know since I know nothing about bootstrap.  The change can easily be reverted. !-->

<?php require "nondev-assets/navbar-bootstrap.php" ?>
  
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">StoryLight</h1>
        <h3 class="masthead-subheading mb-0">Where small creators unite</h3>
        <a href="beta-info.php" class="btn btn-primary btn-xl rounded-pill mt-5">Join the beta program!</a>
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
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle-1" src="img/logo.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h4>Don't know what StoryLight is?</h4>
              <p>StoryLight Plans on becoming the next platform for small contnet creators and with they way our systems are designed to help small creators we help you become the next big star!</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section id="dark">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <h4>A few words from the CEO/Founder of StoryLight</h4>
              <p>As a platform we are willion to work as hard as possible to help small creators grow!</p>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <img class="img-fluid rounded-circle-1" src="img/1.jpg" alt="Joe Highton - CEO/Founder of StoryLight Inc">
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

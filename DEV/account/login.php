<?php include "../tools/https.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoryLight Inc. - Login</title>
    <?php include "./../requirements/css/background_load.php"; ?>
  </head>
  <body>
		<div class="login">
    	<h1>Login</h1>
        <form method="POST" action="loginauth.php">
            <input type="text" name="username-login" placeholder="Username or Email" required="required" />
            <input type="password" name="password-login" placeholder="Password" required="required" />
            <button type="submit" name="login-submit" class="btn btn-primary btn-block btn-large">Login me in.</button>
            <a href="signup.php">Dont have an account?</a>
        </form>
    </div>
  </body>
  <script>
    $('.message a').click(function(){
       $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
  </script>
  <script type = "text/javascript">
  	$(document).ready(function() {
  		$('.magicLink').click(function () {
  			$('.sign-up_box').toggleClass('signUP');
  			$('.magicLink').toggleClass('pressed');
  		})
  	})
  </script>
</html>
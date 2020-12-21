<?php include "../tools/https.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="css/singup.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoryLight Inc. - Create Account</title>
    <?php include "./../requirements/css/background_load.php"; ?>
  </head>
  <body>
		<div class="login">
    	<h1>Join StoryLight</h1>
    	<h1 style="font-size: 15px">The Platform for small content creators!</h1>
        <form method="POST" action="signupauth.php">
            <input type="text" name="username-signup" placeholder="Username" required="required" />
            <input type="password" name="password-signup" placeholder="Password" required="required" />
            <input type="email" name="email-signup" placeholder="Email" required="required" />
            <select id="theme_dropdown" name="theme">
      				<option value="Light">Light</option>
      				<option value="Dark">Dark</option>
            </select>
            <input id="imgFile" type="file" name="imgFile">
            <button type="signup-submit" name="signup-submit" class="btn btn-primary btn-block btn-large">Create my account.</button>
            <a href="login.php">Already have an account?</a>
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
<html>
<link rel="stylesheet" href="signup-script.css">
<head>
    <title>Confidential Storylight Private Beta</title>
</head>

<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bebas+Neue&family=Bungee&family=Fjalla+One&family=Major+Mono+Display&family=Pacifico&family=Permanent+Marker&family=Press+Start+2P&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<body>

<div class="header">
    <h4>Don't have an account?  Register today!</h4>
</div>
<div class="sign-up_box">
	<div id="sign-up_contentArea">
		
		<form method="post" action="/scripts/InterpretUserFormData.php" enctype="multipart/form-data">
			Username :       <input id="box" type="text" name="username" placeholder="Create a username"><br><br>
			Password :       <input id="box" type="password" name="password"  placeholder="Create a password"><br><br>
			Email Address:    <input id="box" type="text" name="email"  placeholder="Enter an email address"><br><br>
		  <h4>User Customization</h4>
			<div>Choose your profile picture:</div>
            <div class="comment-text">Only .png, .jpg, or .gif are only allowed, Recommended size 100x100px</div>
            <input id="imgFile" type="file" name="imgFile">
        <br><br>
            Choose a background theme:
            <div class="comment-text">More themese are yet to be added to StoryLight!</div>
            <select id="theme_dropdown" name="theme">
				<option value="Light">Light</option>
				<option value="Dark">Dark</option>
            </select>
        <br><br>
            <div class="comment-text">By registering with Storylight, you agree to the our Terms and Conditions / Privacy Policy</div>
        <br>
			<input id="button" name="Register now!" type="submit" value="Submit">
		</form>
	</div>
</div>
</body>
</html>

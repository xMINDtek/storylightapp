<div class="sign-up_box">
<h2 style="font-size: 60px; padding: 0px;">Login</h2>
		<form method="POST" action="res/scripts/login.php">
			<input id="textinput" type="text" name="username-login" placeholder="Enter your username"><br><br>
			<input id="textinput" type="password" name="password-login"  placeholder="Enter your password"><br><br>
			<input style="background-color: red; color: white; width: 105%; height: 70px;" id="button" name="login-submit" type="submit" value="Submit">
</form>
</div>
<style>
.sign-up_box{
    font-size: 30px;
    z-index: 1;
    color: white;
    font-size: 40px;
    position: fixed;
    display: none;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    background-color: rgba(3, 3, 3, 0.637);
    box-shadow: black;
}
#returnBack {
    position: fixed;
    z-index: -1;
    width: 100%;
    height: 100%;
}

#sign-up_contentArea{
    width: 600px;
    height: 500px;
    font-family: "Bebas Neue";
    background-color: rgba(36, 36, 36, 0.993);
    padding: 100px;
    border-radius: 7px;
}

#textinput {
    width: 100%;
    border: none;
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
    font-family: "Bebas Neue";
    border-radius: 3px;
    height: 50px;
    padding: 20px;
}
</style>
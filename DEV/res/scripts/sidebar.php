<div class="sidebar-mini">
	<div id="mini-top">
		<img id="top-section_userImage" style="margin-bottom: 20px; padding: 6px; border-radius: 10px; width: 40px; height; 40px; margin-top: 30px;" src="/git/res/images/user_images/MINDtek logo.png" type="img/png">
		<img id="mini_sidebar-content" style="padding: 10px; width: 30px; height: 30px;" src="/res/images/smiley-face.png" type="img/png">
		<p style="text-align: center; margin-top: 0px; font-size: 18px; color: white">Content</p>
	</div>
				
	<div id="mini-mid">
		<img id="mini_sidebar-content" style="padding: 10px; width: 30px; height: 30px;" src="/res/images/smiley-face.png" type="img/png">
		<p style="text-align: center; margin-top: 0px; font-size: 18px; color: white">Create</p>
	</div>

	<div id="mini-bottom">
		<img id="mini_sidebar-content" style="padding: 10px; width: 30px; height: 30px;" src="/res/images/smiley-face.png" type="img/png">
		<p style="text-align: center; margin-top: 0px; font-size: 18px; color: white">Profile Options</p>
	</div>
</div>
<nav class="sidebar">
	<ul id="sidebar_top">
		<div id="top-section_sidebar">
			<img class="top-section_userImage" style="border-radius: 5px; width: 40px; height; 40px;" src="/Git/res/images/user_images/MINDtek logo.png" type="img/png">
			<?php echo "<h5>{$_SESSION['username']}</h5>" ?>
		</div>
		<li id="liBig"><img id="image_sidebar-content" style="width: 30px; height: 30px;" src="\res\images\smiley-face.png" type="img/png"><a class="sidebar_main1" herf="#">Content</a></div></li>
		<div class="dropdown1">
			<li id="liSmall"><a id="sidebar_dropdown" href="#">Activity Feed</a></li>
			<li id="liSmall"><a id="sidebar_dropdown" href="#">Channels</a></li>
			<li id="liSmall"><a id="sidebar_dropdown" href="#">Groups</a></li>
			<li id="liSmall"><a id="sidebar_dropdown" href="#">Messages</a></li>
		</div>
	</ul>

	<ul id="sidebar_mid">
		<li id="liBig"><img id="image_sidebar-content" style="width: 30px; height: 30px;" src="/res/images/smiley-face.png" type="img/png"><a class="sidebar_main2" herf="#">Create</a></li>
			<div class="dropdown2">
				<li id="liSmall"><a id="sidebar_dropdown" href="#">New Video</a></li>
				<li id="liSmall"><a id="sidebar_dropdown" href="#">New Post</a></li>
				<li id="liSmall"><a id="sidebar_dropdown" href="#">New Event</a></li>
			</div>
	</ul>

	<ul id="sidebar_bottom">
	<li id="liBig"><img id="image_sidebar-content" style="width: 30px; height: 30px; " src="/res/images/smiley-face.png" type="img/png"><a class="sidebar_main3" herf="#">Profile Options</a></li>
		<div class="dropdown3">
			<li id="liSmall"><a id="sidebar_dropdown" href="#">Edit Channel</a></li>
			<li id="liSmall"><a id="sidebar_dropdown" href="#">Edit Groups</a></li>
			<li id="liSmall"><a id="sidebar_dropdown" href="#">User Settings</a></li>
		</div>
	</ul>
	<script src = "https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type = "text/javascript">
				$(document).ready(function() {
					$('.dropdown1').hover(function () {
						$('.dropdown1').toggleClass('dropdown_expand');
					})
					$('.dropdown2').hover(function () {
						$('.dropdown2').toggleClass('dropdown_expand');
					})
					$('.dropdown3').hover(function () {
						$('.dropdown3').toggleClass('dropdown_expand');
					})

					$('.sidebar_main1').hover(function () {
						$('.dropdown1').fadeIn();				
					})
					$('.sidebar_main2').hover(function () {
						$('.dropdown2').fadeIn();
					})
					$('.sidebar_main3').hover(function () {
						$('.dropdown3').fadeIn();
					})
				})
	</script>
</nav>

<style>
.sidebar {
    height: 100%;
    display: none;
    width: 200px;
    z-index: 999;
    position: fixed;
    background-color: rgba(0, 0, 0, 0.950);
}

h5 {
	color: white; 
	display: inline-block;
	margin-left: 5px;
	font-size: 30px;
}
ul {
    margin-top: 30px;
    margin-left: -30px;
}
#liBig, #liSmall {
    list-style-type: none;
}
#liBig a, #liSmall a {
    transition: 300ms ease;
    text-decoration: none;
    font-size: 28px;
    color: white;
    text-shadow: 2px 2px black;
}
#liBig a:hover, #liSmall a:hover{
    color: rgb(69, 9, 167);
    font-size: 30px;
}
.hide {
    display: none;
}
.dropdown1, .dropdown2, .dropdown3 {
    display: none;
}
.dropdown_expand {
    display: block;
}
#sidebar_dropdown {
    font-size: 26px;
    padding-left: 45px;
}

#sidebar_top {
  margin-top: 0px;
}

.sidebar-mini {
    text-align: center;
    height: 1500px;
    width: 70px;
    position: fixed;
    background-color: black;
    margin: 0px;
    padding: 0px;
    margin-top: -10px;
}
</style>
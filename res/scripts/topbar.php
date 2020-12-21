<nav class="top-bar" data-topbar>

	<ul class="title-area">
	  <li><a href="index.php" id="mainText">StoryLight</a></li>
	  <li class="menu-icon"><a >Menu</a></li>
	</ul>

	<section class="top-bar-section">
	  <ul class="left">
		  <ul class="dropdown dropdown-wrapper">
		  </ul>
	  </ul>
	  <ul class="left">
    <li class="has-dropdown1"><a id="bigname_dropdown" href="#">Trending</a></li>
    <div class="div-dropdown1">
		  <ul class="dropdown1">
        <li><a id="dropdown-element" href="#">Channels</a></li>
        <li><a id="dropdown-element" href="#">Videos</a></li>
        <li><a id="dropdown-element" href="#">Playlists</a></li>
        <li><a id="dropdown-element" href="#">Livestreams</a></li>
      </ul>
    </div>
		</li>
    <li class="has-dropdown2"><a id="bigname_dropdown" href="#">Top Categories</a></li>
    <div class="div-dropdown2">
		  <ul class="dropdown2">
        <li><a id="dropdown-element" href="#">Gaming</a></li>
        <li><a id="dropdown-element" href="#">Tutorials</a></li>
        <li><a id="dropdown-element" href="#">Vlogs</a></li>
        <li><a id="dropdown-element" href="#">Variety</a></li>
     </ul>
</div>
		 <li><button style=";" onclick="location.href='/res/signup.php'" id="interface_control"  href="#">Signup</a></li>
		<?php
		if (isset($_SESSION['username'])) {
	
      echo"
          
          <li class='has-dropdown3'><img style='width: 50px; height: 50px; border-radius: 10px; margin-right: 10px;' src='{$_SESSION['avitar']}' type='img/png'><a id='bigname_dropdown'>{$_SESSION['username']}</a></li>
          <div class='div-dropdown3'>
          <ul class='dropdown3'>
            <li><a id='dropdown-element' href='/user/user_homepage.php'>User Homepage</a></li>
            <li><a id='dropdown-element' href='/video/scripts/videoUploadTechTest.php'>Upload Techtest</a></li>
            <li><a id='dropdown-element' href='/video/scripts/videoPageTemplate.php'>upload template</a></li>
            <li>
            <form action='/res/scripts/logout.php' method='POST'>
              <button id='interface_control' type='submit' name='logout-submit'>Logout</button>
            </form>
            </li>
         </ul>
    </div>
          
       ";
		} else {
			echo'<li ><button class="magicLink" id="interface_control" >Login</button></li>';
		}
		?>
     <script src = "https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type = "text/javascript">
				$(document).ready(function() {

					$('.has-dropdown1').hover(function () {
         				$('.div-dropdown1').toggleClass('dropdown-activate');
					})
					$('.has-dropdown2').hover(function () {
						$('.div-dropdown2').toggleClass('dropdown-activate');
          })
          $('.has-dropdown3').hover(function () {
						$('.div-dropdown3').toggleClass('dropdown-activate');
          })
          
  
					$('.div-dropdown1').hover(function () {
						$('.div-dropdown1').toggleClass('dropdown-activate');
					})
					$('.div-dropdown2').hover(function () {
						$('.div-dropdown2').toggleClass('dropdown-activate');
					})
          $('.div-dropdown3').hover(function () {
						$('.div-dropdown3').toggleClass('dropdown-activate');
					})
				})
  </script>

  <script>
    setInterval(function(){
      var scrolledLength = window.pageYOffset;
      if (scrolledLength > 520){
        $('.top-bar').fadeIn(300);
        } else if (scrolledLength < 600) {
          $('.top-bar').fadeOut();
        }
    });
  </script>

		</li>
	  </ul>
	</section>
  </nav>

  <style>

.top-bar {
    z-index: 999;
    margin-top: -5px;
    padding-bottom: 30px;
    display: none;
    position: fixed;
    width: 95%;
    margin-right: 35px;
    margin-left: 35px;
    height: 70px;
    background-color: rgba(39, 38, 38, 0.91);
    margin-bottom: 100px;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
}

#mainText {
  font-family: "Bebas Neue";
  text-decoration: none;
  margin: 0px;
  padding: 0px;
  color: white;
  font-size: 45px;
  text-shadow: 6px 5px black
}
.fixedPos {
  display: block;
}
.reversePos {
  display: none;
}
.title-area {
  list-style-type: none;
}

.left{
    list-style-type: none;
}

.div-dropdown1{
  display: none;
}
.div-dropdown2 {
  display: none;
}
.div-dropdown3 {
  display: none;
}

.dropdown-activate {
  display: block;
}

.div-dropdown1 {
  position: fixed;
  width: 110px;
  background-color: rgba(20, 20, 20, 0.75);
  margin-left: 186px;
  margin-top: 75px;
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
}

.div-dropdown2 {
  width: 175px;
  background-color: rgba(20, 20, 20, 0.75);
  position: absolute;
  margin-left: 295px;
  margin-top: 70px;
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
}
.div-dropdown3 {
  width: 205px;
  background-color: rgba(20, 20, 20, 0.75);
  position: absolute;
  margin-left: 87%;
  height: 300px;
  margin-top: 70px;
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
}


.div-dropdown2 li{
  margin-right: 50px;
}
#dropdown-element {
  text-decoration: none;
  list-style-type: none;
  width: 100%;
  color: white;
  font-size: 22px;
  font-family: "Bebas Neue";
  margin-left: -30px;
}

.has-dropdown1, .has-dropdown2 {
    float: left;
    margin-right: 10px;
    height: 60px;
    
}
.has-dropdown3{
  display: flex;
  align-content: center;
  justify-items: center;
  float: right;
}
.name {
    text-decoration: none;
    color: white;
    font-size: 45px;
    font-family: "Bebas Neue";
}

#bigname, #bigname_dropdown{
    transition: all 300ms ease-out;
    text-decoration: none;
    margin-top: 14px;
    text-shadow: 2px 2px black;
    color: white;
    font-family: "Bebas Neue";
    display: flex;
    font-size: 30px;
}

#interface_control {
  margin-top: 10px;
    border: none;
    color: black;
    font-family: "Bebas Neue";
    font-size: 30px;
    width: 85px;
    height: 40px;
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
}

#nav_home-icon {
    box-shadow: black;
}

.has-dropdown1:hover, .has-dropdown2:hover, .has-dropdown3:hover{
    background-color: rgba(20, 20, 20, 0.25);
}

#dropdown-element:hover {
  font-size: 24px;
}

.menu-icon{
    display: none;
}

li{
    float: left;
    margin-right: 10px;
    padding: 7px;
    height: 60px;
    text-decoration: none;
}

  </style>

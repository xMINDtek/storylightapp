
<nav class="top-bar" data-topbar>

<ul class="title-area">
  <li><a href="index.php" id="mainText">StoryLight</a></li>
  <li class="menu-icon"><a >Menu</a></li>
</ul>

<section class="top-bar-section">
  <ul class="left">
      <ul class="topDropdown topDropdown-wrapper">
      </ul>
  </ul>
  <ul class="left">
<li class="has-topDropdown1"><a id="bigname_topDropdown" href="#">Trending</a></li>
<div class="div-topDropdown1">
      <ul class="topDropdown1">
    <li><a id="topDropdown-element" href="#">Channels</a></li>
    <li><a id="topDropdown-element" href="#">Videos</a></li>
    <li><a id="topDropdown-element" href="#">Playlists</a></li>
    <li><a id="topDropdown-element" href="#">Livestreams</a></li>
  </ul>
</div>
    </li>
<li class="has-topDropdown2"><a id="bigname_topDropdown" href="#">Top Categories</a></li>
<div class="div-topDropdown2">
      <ul class="topDropdown2">
    <li><a id="topDropdown-element" href="#">Gaming</a></li>
    <li><a id="topDropdown-element" href="#">Tutorials</a></li>
    <li><a id="topDropdown-element" href="#">Vlogs</a></li>
    <li><a id="topDropdown-element" href="#">Variety</a></li>
 </ul>
</div>
     <li><button style=";" onclick="location.href='/res/signup.php'" id="interface_control"  href="#">Signup</a></li>
    <?php
    if (isset($_SESSION['username'])) {

  echo"
      
      <li class='has-topDropdown3'><img style='width: 50px; height: 50px; border-radius: 10px; margin-right: 10px;' src='{$_SESSION['avitar']}' type='img/png'><a id='bigname_topDropdown'>{$_SESSION['username']}</a></li>
      <div class='div-topDropdown3'>
      <ul class='topDropdown3'>
        <li><a id='topDropdown-element' href='/user/user_homepage.php'>User Homepage</a></li>
        <li><a id='topDropdown-element' href='/video/scripts/videoUploadTechTest.php'>Upload Techtest</a></li>
        <li><a id='topDropdown-element' href='/video/scripts/videoPageTemplate.php'>upload template</a></li>
        <li>
        <form action='/Git/res/phpScripts/logout.php' method='POST'>
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

                $('.has-topDropdown1').hover(function () {
                     $('.div-topDropdown1').toggleClass('topDropdown-activate');
                })
                $('.has-topDropdown2').hover(function () {
                    $('.div-topDropdown2').toggleClass('topDropdown-activate');
      })
      $('.has-topDropdown3').hover(function () {
                    $('.div-topDropdown3').toggleClass('topDropdown-activate');
      })
      

                $('.div-topDropdown1').hover(function () {
                    $('.div-topDropdown1').toggleClass('topDropdown-activate');
                })
                $('.div-topDropdown2').hover(function () {
                    $('.div-topDropdown2').toggleClass('topDropdown-activate');
                })
      $('.div-topDropdown3').hover(function () {
                    $('.div-topDropdown3').toggleClass('topDropdown-activate');
                })
            })
</script>

    </li>
  </ul>
</section>
</nav>

<style>

.top-bar {
z-index: 998;
position: relative;
margin-bottom: 10px;
margin-top: -15px;
height: 75px;
background-color: black;
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

.div-topDropdown1{
display: none;
}
.div-topDropdown2 {
display: none;
}
.div-topDropdown3 {
display: none;
}

.topDropdown-activate {
display: block;
}

.div-topDropdown1 {
position: fixed;
width: 110px;
background-color: rgba(20, 20, 20, 0.75);
margin-left: 186px;
margin-top: 75px;
border-radius: 5px;
box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
}

.div-topDropdown2 {
width: 175px;
background-color: rgba(20, 20, 20, 0.75);
position: absolute;
margin-left: 295px;
margin-top: 70px;
border-radius: 5px;
box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
}
.div-topDropdown3 {
width: 205px;
background-color: rgba(20, 20, 20, 0.75);
position: absolute;
margin-left: 87%;
height: 300px;
margin-top: 70px;
border-radius: 5px;
box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 5px 0px;
}


.div-topDropdown2 li{
margin-right: 50px;
}
#topDropdown-element {
text-decoration: none;
list-style-type: none;
width: 100%;
color: white;
font-size: 22px;
font-family: "Bebas Neue";
margin-left: -30px;
}

.has-topDropdown1, .has-topDropdown2 {
float: left;
margin-right: 10px;
height: 60px;

}
.has-topDropdown3{
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

#bigname, #bigname_topDropdown{
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

.has-topDropdown1:hover, .has-topDropdown2:hover, .has-topDropdown3:hover{
background-color: rgba(20, 20, 20, 0.25);
}

#topDropdown-element:hover {
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

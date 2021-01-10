<?php
    $serverName = "sql108.byetcluster.com";
    $username = "epiz_27352816";
    $password = "oHFmpqiKtysaJ";
    $dbName = "epiz_27352816_maindb";

$conn = mysqli_connect($serverName, $username, $password, $dbName);
print($conn->error);
if (!$conn) {
    header("Location: index.php?error=connectionFailed");
}

$findContent = mysqli_query($conn, "SELECT video_location, video_description, video_created, video_title, video_username, videos_views FROM videos");
print($conn->error);

while ($row = $findContent->fetch_row()){
    $vLocation[] = $row[0];
    $vDescription[] = $row[1];
    $vDate[] = $row[2];
    $vTitle[] = $row[3];
    $vUsername[] = $row[4];
    $vViews = $row[5];
}

$key = mysqli_connect_error();
?>
<div class="widgetContainer">
    <div class="videoWidget1">
        <?php echo"
        <div id='left'>
            <video autoplay muted controls src='$vLocation[1]' type='video/mp4'  style='border-radius: 5px; position: absolute; box-shadow: rgba(0, 0, 0, 0.05) 0 0 8px 0; height: 100%;'></video>
        </div>

        <div id='right1'>
              <h2 id='right-wing-title'>$vTitle[1]...</h2>
            <div id='right-top'>
                <img src='res\images\user_images\MINDtek logo.png' style = 'width: 100px; height: 100px; border-radius: 10px' type='img/png'>
                <h2 id='video-uploader-text'>$vUsername[1] $key</h2>
                </div>
                <h4 id='video-metadata'>Uploaded $vDate[1] | 127,978 views</h4>
                <br>
                <p id='video-description-text' >$vDescription[1]</h3>
                <br>
                <a href='#'>View more</a>
      
                "; ?>

        <br>
        <a class="translateOne">NEXT</a>
    </div>

</div>

<div class="videoWidget2">

    <?php echo"
        <div id='left'>
            <video autoplay muted controls src='$vLocation[2]' type='video/mp4'  style='border-radius: 5px; position: absolute; box-shadow: rgba(0, 0, 0, 0.05) 0 0 8px 0; width: 1065px;'></video>
        </div>

        <div id='right1'>
              <h2 id='right-wing-title'>$vTitle[2]...</h2>
            <div id='right-top'>
                <img src='res\images\user_images\MINDtek logo.png' style = 'width: 100px; height: 100px; border-radius: 10px' type='img/png'>
                <h2 id='video-uploader-text'>$vUsername[2]</h2>
                </div>
                <h4 id='video-metadata'>Uploaded $vDate[2] | 127,978 views</h4>
                <br>
                <p id='video-description-text' >$vDescription[2]</h3>
                <br>
                <a href='#'>View more</a>
                "; ?>

    <a class="translateTwo">NEXT</a>
    <br>
    <a class="translateOne">PREVIOUS</a>
</div>

</div>

<div class="videoWidget3">

    <?php echo"
        <div id='left'>
            <video autoplay muted controls src='$vLocation[8]' type='video/mp4'  style='border-radius: 5px; position: absolute; box-shadow: rgba(0, 0, 0, 0.19) 0 0 8px 0; height: 100%;'></video>
        </div>

        <div id='right1'>
              <h2 id='right-wing-title'>$vTitle[8]...</h2>
            <div id='right-top'>
                <img src='res\images\user_images\MINDtek logo.png' style = 'width: 100px; height: 100px; border-radius: 10px' type='img/png'>
                <h2 id='video-uploader-text'>$vUsername[8]</h2>
                </div>
                <h4 id='video-metadata'>Uploaded $vDate[8] | 127,978 views</h4>
                <br>
                <p id='video-description-text' >$vDescription[8]</h3>
                <br>
                <a href='#'>View more</a>
                "; ?>

    <a class="translateThree">FIRST</a>
</div>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.translateOne').click(function() {
        $('.videoWidget1').toggleClass('translate100b');
        $('.videoWidget2').toggleClass('translate100b');
    })
    $('.translateTwo').click(function() {
        $('.videoWidget2').toggleClass('translate100b');
        $('.videoWidget3').toggleClass('translate200b');
    })
    $('.translateThree').click(function() {
        $('.videoWidget1').toggleClass('translate100f');
        $('.videoWidget3').toggleClass('translate200b');
        $('.videoWidget1').toggleClass('translate50f');
    })

})
</script>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
#arrowOverlay {
    position: absolute;
    z-index: 998;
    margin-top: 40%;

}

.translate100b {
    transform: translateX(-100%)
}

.translate200b {
    transform: translateX(-200%)
}

.translate200f {
    transform: translateX(200%)
}

.translate100f {
    transform: translateX(100%)
}

.translate50f {
    transform: translateX(0%)
}

.translateOne:hover {
    font-size: 30px;
}

.translateTwo:hover {
    font-size: 30px;
}

.translateThree:hover {
    font-size: 30px;
}

.widgetContainer {
    display: flex;
    width: 300%;
    height: 100%;
}

.videoWidget1,
.videoWidget2,
.videoWidget3 {
    z-index: 1;
    overflow: hidden;
    display: flex;
    position: relative;
    width: 33.333%;
}

#left {
    width: 70%;
    display: flex;
}

#right1,
#right2,
#right3 {
    margin-right: -10%;
    padding: 20px;
    width: 30%;
    border-radius: 10px;
    position: relative;
}

#right1 {
    background-color: rgb(37, 31, 63, .97);
}

#right2 {
    background-color: rgb(17, 94, 35, .97);
}

#right3 {
    background-color: rgb(169, 44, 44, .97);

}

#right-top {
    display: flex;
}

#right-wing-title {
    font-size: 50px;
    color: white;
    text-shadow: 2px 2px black;
    margin: 0px;
}

#video-uploader-text {
    margin-left: 10px;
    font-size: 40px;
    color: white;
    text-shadow: 2px 2px black;
}

#video-title-text {
    font-family: "Open Sans";
    font-size: 40px;
    margin: 0px;
    text-shadow: 2px 2px black;
    color: white;
}

#video-description-text {
    font-size: 25px;
    color: white;
}

#video-metadata {
    font-family: "Open Sans";
    text-align: left;
    color: white;
    text-shadow: 2px 2px black;
    font-size: 26px;
    margin: 0px;
}
</style>
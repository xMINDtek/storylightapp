<?php include "tools/https.php"; ?>
<!-- Welcome to StoryLight Inc. (C) 2020/2021 [BETA] -->
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StoryLight Inc. - Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=PT+Sans&family=Pacifico&family=Permanent+Marker&family=Quicksand&family=Righteous&family=Rubik:wght@300&family=Staatliches&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./requirements/css/background_load.php"; ?>
</head>

<body>
    <div class="main">
        <div class="header-container">
            <div class="header-inside-container">
                <div class="header-inside-maintext">
                    StoryLight Where Creators begin...
                </div>
            </div>
        </div>
        <br>
        <a href="account/signup.php">
            <button class="btn draw-border">Sign up today!</button>
        </a>
        <br><br>
        <div class="header-container">
            <div class="header-inside-container">
                <div class="header-inside-smalltext1">
                    Commonly Asked Questions.
                </div>
                <br>
                <div class="questions">
                    WHy should i choose to start on StoryLight instead of other Platforms?
                </div>
                <div class="answer">
                    <p>Good Question! Here at StoryLight we strive towards creativity and we want small creators to grow and gain a name for your brand or channel</p>
                </div>
                <div class="questions">
                    WHy will StoryLight help to build my brand?
                </div>
                <div class="answer">
                    <p>Good Question! On our platform we offer you a variety of diffrent tools and toturials into help make and improve the content you produce as a creator!</p>
                </div>
                <div class="questions">
                    What sort of content can i post on StoryLight?
                </div>
                <div class="answer">
                    <p>You can post anything you'd like as long as it doesnt contain the following: Nudity, Violence, Sexual Content, also keep in mind if you content you upload contains music or video you dont own it will be subject to deletion by DMCA Act</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
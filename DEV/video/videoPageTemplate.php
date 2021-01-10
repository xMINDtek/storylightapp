<?PHP
session_start();


$serverName = "sql311.byetcluster.com";
$username = "epiz_26786365";
$password = "mHVmZP2qXlXaGUe";
$dbName = "epiz_26786365_maindb";

$conn = mysqli_connect($serverName, $username, $password, $dbName);
print($conn->error);
if (!$conn) {
    header("Location: /Git/index.php?error=connectionFailed");
}

?>

<script>
var feedback = document.getElementById("feedback");
function selected() {
    feedback.classList.toggle("selected");
}

}
</script>

<!DOCTYPE html>
<html lang="en">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bebas+Neue&family=Bungee&family=Fjalla+One&family=Major+Mono+Display&family=Pacifico&family=Permanent+Marker&family=Press+Start+2P&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<head>
    <title>Watch - {title}</title>
</head>

<body onload="countView()">
<?php require "/home/vol6_1/epizy.com/epiz_26786365/htdocs/res/scripts/topbar-universal.php"; ?>
<div class="videoSec">
    <div id="left">
        <video controls src='{location}' width="100%", height="100%">
    </div>  
    <div id = "right">
       <h1>{title}</h1>
       <?php
       $RATING = mysqli_query($conn, "SELECT videos_score FROM videos WHERE video_dbid = '{videoID}'");
       while ($rowA = $RATING->fetch_row()){
           $rawRating[] = $rowA[0];
       }
       if ($rawRating[0] > 5) {
           $videoRating = '😁';
       } else if ($rawRating[0] > 0) {
           $videoRating = '🙂';
       } else if ($$rawRating[0] = 0) {
           $videoRating = '😐';
       } else if ($$rawRating[0] < 0) {
           $videoRating = '🙁';
       } else if ($$rawRating[0] < 5) {
           $videoRating = '😠';
       } else {
           $videoRating = "MYSQL ERROR.  CONTACT ADMIN";
       }
       echo "<p>{views} views | $videoRating</P>"
       ?>
     
       <h3>{date}</h3>
       <p>{description}</p>  

       <div id="right_bottom">
            <img id="user_avitar" src="{avitar}" width="100px" height="100px">
            <h2>{username}</h2>
            <button id="follow">Follow</h3>
       </div>
    </div>  
</div>

<div class="bottom">
    <div class="bottom-left">
        <div id="comment-write">
            <form id = "writeform" method="POST" action="/home/vol6_1/epizy.com/epiz_26786365/htdocs/Git/res/phpScripts/comment-Add.php">
        <div id="write-left">
            <br>
            <p id="feedback-tag">Rating:</p>
                <label onclick = "selected()" id="feedback"><input id="hide" type="radio" name="feedback" value='1'>🙂</label>
                <label onclick = "selected()" id="feedback"><input id="hide" type="radio" name="feedback" value='0'>😐</label>
                <label onclick = "selected()" id="feedback"><input id="hide" type="radio" name="feedback" value='-1'>🙁</label>
                <br>
                <br>
        </div>
            <div id="write-right">
                <?php echo"<p id='commentwrite-notice'>Commenting as {$_SESSION['username']}</p>" ?>
                <br>
                <input id="comment_text" type="long-text" name="comment-text" placeholder="Write your comment here..."><br>
                <input style='display: none' name='videoID' type='hidden' value ='{videoID}'>
                <button id="submit-comment" type="input" name="submit">Post</buttom>
            </div>
            </form>
        </div>
            <?php 

                $findComment = mysqli_query($conn, "SELECT comment_id, comment_text, comment_username, friendly_date, comment_rating FROM comments WHERE comment_video_id = '{videoID}'");
            $x = 0;
            while($row = $findComment -> fetch_row()){
                $x++;
                $commentID[] = $row[0];
                $users[] = $row[2];
                $dates[] = $row[3];
                $comments[] = $row[1];
                
                if ($row[4] = -1) {
                    $commentFeedback = '🙁';
                } else if ($row[4] = 0) {
                    $commentFeedback = '😐';
                } else if ($row[4] = 1){
                    $commentFeedback = '🙂';
                }
                echo "
                <style>
                #comment$x {
                    display: flex;
                    border-radius: 5px;
                    width: 100%;
                    height: auto;
                    flex-wrap: wrap;
                    background-color: white;
                    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 10px 0px;
                    margin-top: 20px;
                    margin-bottom: 30px;
                }
                </style>
                <div id='comment$x'>
                    <div id='comment-1'>
                        <img id='commenter-avitar' src='/home/vol6_1/epizy.com/epiz_26786365/htdocs/Git/res/images/user_images/MINDtek logo.png' width='80px' height='80px' type='img/png'>
                        <h2 id='commenter-name'>$row[2]</h2>
                        <p id='commenter-rating'>$commentFeedback</h2>
                    </div>
                    <div id='comment-2'
                        <p id='commenter-date'>$row[3]</p>
                        <p id='commenter-text'>$row[1]</p>
                   
                        ";

                        $findCorrectReply = mysqli_query($conn, "SELECT comment_replies_id, originalcomment_id, commentReply_text, commentReply_username, friendlDate FROM comment_replies WHERE originalcomment_id = '$row[0]'");

                        while ($rowR = $findCorrectReply->fetch_row()){
                            $replyID[] = $rowR[0];
                            $originalCommentID[] =  $rowR[1];
                            $replyText[] = $rowR[2];
                            $replyUsername[] = $rowR[3];
                            $replyDate[] = $rowR[4];
                            echo "
                            <div id='inlinereply'>
                                <img id='commenter-avitar_reply' src='/home/vol6_1/epizy.com/epiz_26786365/htdocs/Git/res/images/user_images/MINDtek logo.png' width='40px' height='40px' type='img/png'>
                                <h2 id='commenter-name_reply'>$rowR[3]</h2>
                                <p id='commenter-text_reply'>$rowR[2]. </p></br>
                            </div>
                            ";
                        
                    }
                        echo "
                 
                        <form method='POST' action='/home/vol6_1/epizy.com/epiz_26786365/htdocs/Git/res/phpScripts/commentReply-Add.php'>
                            <input id='comment_text' type='text' name='commentReply-text' placeholder='Write your reply here...'>
                            <input style='display: none' name='originalID' type='hidden' value ='$row[0]'>
                            <button id='submit-comment' type='input' name='submit'>Reply</buttom>
                        </form>

                    </div>
                    
            
                </div>

                    ";
              
            }
            
            ?>
           

    </div>

    <div class='bottom-right'>
            <h1>More content by {username}</h1>
            <h2>Videos</h2>
            <?php
            $selectOtherContent = mysqli_query($conn, "SELECT video_title, video_description, video_created, video_category, video_pageurl, video_thumbnail_url FROM videos WHERE video_username = '{username}' LIMIT 3 ");
                $suggestionNum = 0;
                while ($rowV = $selectOtherContent->fetch_row()){
                    $suggestionNum++;
                    echo "
                    <style>
                        #vidSuggestion$suggestionNum {
                            display: flex;
                        }
                        #vidSuggestionBottom {
                            display: block;
                            padding: 10px;
                        }
                    </style>
                    <div id='vidSuggestion$suggestionNum'>
                    <a href='$rowV[4]'> <img href='$rowV[4]' id='vid_suggestion_thumbnail' src='$rowV[5]' width='208px' height='117px'></a>
                        <div id='vidSuggestionBottom'>
                            <a href='$rowV[4]' id='vid_suggestion_title'>$rowV[0]</a>
                            <p id='vid_suggestion_description'>$rowV[1]</p>
                        </div>
                    </div>
                        <br>
                    ";
                }
            ?>
            <h2>Posts</h2>
    </div>
  


</div>

</body>
</html>

<style>
/*Styling for all template elements */
#feedback-tag {
    margin-top: -30px;
    margin-bottom: -10px;
}
#writeform {
    width: 100%;
    display: flex;
}
.selected {
    background-color: green;
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 10px 0px;
}

body {
    padding: 10px;
    font-family: "Bebas Neue";
    font-size: 30px;
    background-color: rgb(247, 245, 245);
}
#vidSuggestionBottom {
    margin-top: -20px;
}

#vid_suggestion_title {
    text-decoration: none;
    color: black;
    font-weight: bold;
    font-size: 40px;
}

#vid_suggestion_title:hover {
    font-size: 45px;
}

#feedback {
    font-size: 35px;
    margin-bottom: 1000px;
}
#hide {
    display: none;
}
#feedback:hover {
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 10px 0px;
}
.videoSec {
    border-radius: 5px;
    padding: 15px;
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 10px 0px;
    display: flex;
    background-color: white;
}

#left {
width: 70%;
height: 700px;
margin-right: 50px;
box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 10px 0px;
}

#right {
width: 30%;
}

.bottom {
    margin-top: 30px;
    display: flex;
    flex-direction: row;
}

.bottom-left {
    width: 60%;

}

.bottom-right{
    margin-left: 50px;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 10px 0px;
    padding: 10px;
    width: 40%;
    background-color: white;
}


#comment-write {
    display: flex;
    border-radius: 20px;
    margin-bottom: 20px;
    padding: 10px;
    background-color: white;
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 10px 0px;
}

#write-left {
    width: 20%;
}

#write-right {
    width: 80%;
}

#submit-comment {
    font-family: "Bebas Neue";
    font-size: 25px;
    width: 19%;
    height: 50px;
    border: none;
    float: right;
    transition: 300ms ease;
}
#submit-comment:hover{
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 10px 0px;
}
#comment_text {
    font-family: "Teko";
    font-size: 25px;
    width: 75%;
    height: 50px;
    margin-top: 10px;
    border: none;
    transition: 300ms ease;
    border-radius: 5px;
}
#comment_text:hover {
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 10px 0px;
}

#comment-1 {
    width: 20%;
    height: 100%;
   text-align: center;
}
#comment-2 {
    width: 80%;
    margin-bottom: 100px;
}

#comment-date {
    margin-bottom: 20px;
}
#commenter-text{
    font-family: "Teko";
    font-size: 30px;
    margin: 0;
    padding-right: 10px;
}
#commenter-text_reply{
    font-family: "Teko";
    font-size: 25px;
    padding: 5px;
    margin: 0;
}
#commenter-name {
    margin: 0;
    margin-top: -15px;

}
#commenter-name_reply {
    margin: 0;
    margin-top: 5px;
    font-size: 30px;
    margin-right: 10px;

}
#commentwrite-notice {
    margin-top: 10px;
    margin-bottom: -50px;
}

#commenter-avitar {
    border-radius: 15px;
    padding: 10px;
}

#commenter-avitar_reply {
    border-radius: 5px;
    padding: 3px;
}

#magicText {
    text-align: right;
    margin: 0;
    padding: 5px;
}

#expanded-section {
    text-align: left;
    padding: 20px;
}
#inlinereply {
    margin-top: 40px;
    display: flex;
}
</style>


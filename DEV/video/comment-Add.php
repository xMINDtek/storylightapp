<?php
session_start();
$serverName = "sql311.byetcluster.com";
$username = "epiz_26786365";
$password = "mHVmZP2qXlXaGUe";
$dbName = "epiz_26786365_maindb";

$conn = mysqli_connect($serverName, $username, $password, $dbName);
if (!$conn) {
    header("Location: /Git/index.php?error=connectionFailed");
}

$comment = $_POST['comment-text'];
$videoID = $_POST['videoID'];

//below variables are for video feedback.  In the HTML form, I have the value set as an emoji because that is what shows to the user.  As a result, I am converting the unicode into text values to calculate a raw score to display in the database.
$feedback = $_POST['feedback'];

//check to see if the Comment text is blank.  Return user to homepage with error in URL if so 
if(empty($comment)) {
    header("Location: /Git/res/phpScripts/videoPageTemplate.php?error=emptyComment");
    exit();
} else {
    //Generate the date in PHP so that the user doesn't see the exact time.  I have called this 'friendly date' in the database.
    $friendlyDate = date("m/d/y");
    //Execute query to insert comment into database.  May be useful to implement statements so that malicious code cannot be inserted into the database, but that will have to come in the future.
    mysqli_query($conn, "INSERT INTO comments (comment_text, comment_user_id, comment_video_id, comment_username, friendly_date) VALUES('$comment', '{$_SESSION['userID']}', '$videoID', '{$_SESSION['username']}', '$friendlyDate')");
    mysqli_query($conn, "UPDATE comments SET comment_rating = $feedback WHERE comment_text = $comment");
    mysqli_query($conn, "UPDATE videos SET videos_score = videos_score + $feedback WHERE video_dbid = $videoID");
    header("Location: /Git/res/phpScripts/userVideos/uvid$videoID.php?$feedback+$conn->error+$videoID");
}

?>
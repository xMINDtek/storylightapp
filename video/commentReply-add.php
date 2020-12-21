
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
//basically the same code as the comment-Add system, but altered for the different database.  One of the important things happening here is we're telling the comment where it's replying to... so it knows where to show up!

$commentReply = $_POST['commentReply-text'];
$originalID = $_POST['originalID'];

//check to see if the Comment Reply text is blank.  Return user to homepage with error in URL if so 
if(empty($commentReply)) {
    header("Location: /Git/res/phpScripts/videoPageTemplate.php?error=emptyReply");
    exit();
} else {
    //Generate the date in PHP so that the user doesn't see the exact time.  I have called this 'friendly date' in the database.
    $friendlyDate = date("m/d/y");
    //Execute query to insert comment into database.  May be useful to implement statements so that malicious code cannot be inserted into the database, but that will have to come in the future.
    mysqli_query($conn, "INSERT INTO comment_replies (originalcomment_id, commentReply_user_id, commentReply_text, commentReply_username, friendlDate) VALUES('$originalID', '{$_SESSION['userID']}', '$commentReply', '{$_SESSION['username']}', '$friendlyDate')");
    
    header("Location: /Git/res/phpScripts/videoPageTemplate.php?Success-CommentAdded($conn->error)");
}

?>
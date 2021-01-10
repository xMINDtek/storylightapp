<script>
//The user is brought to this page after submitting.  It will display an error message (specified under 'print').  Below JS will take user off of page after 3 seconds
function delayedRedirect() {
      window.location = "/video/videoUploadTechTest.php?try_again";
}
</script>
<body onload="setTimeout('delayedRedirect()', 3000000000000)"></body>
<?PHP
session_start();
$serverName = "sql311.byetcluster.com";
$username = "epiz_26786365";
$password = "mHVmZP2qXlXaGUe";
$dbName = "epiz_26786365_maindb";

$conn = mysqli_connect($serverName, $username, $password, $dbName);
print($conn->error);
if (!$conn) {
    header("Location: index.php?error=connectionFailed");
}

PRINT("ERROR ACCESSING DATABASE INFORMATION FILE");
print($conn->error);
//Defining all possible variables for Thumbnail upload
$imageFileName = $_FILES['imageFile']['name'];
$imageFileExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);
$imageFileTmp = $_FILES['imageFile']['tmp_name'];

//Defining all possible variables for Video upload
$videoFileName = $_FILES['videoFile']['name'];
$videoFileSize = $_FILES['videoFile']['size'];
$videoFileTmp = $_FILES['videoFile']['tmp_name'];
$videoFileExtension = pathinfo($videoFileName, PATHINFO_EXTENSION);
$videoDir = "/htdocs/video/userVideo/";
$newVideoNameClean = rand();
$newVideoName = "$newVideoNameClean" . "." . $videoFileExtension;
$newImageName = "$newVideoNameClean" . "." . $imageFileExtension;

$imageFileLocation = $videoDir . $newImageName;
$imageFileLocDatabase = "/htdocs/video/" . $imageFileLocation;

$videoFileLocation = $videoDir . $newVideoName;
$videoFileLocDatabase = "/htdocs/video/" . $videoFileLocation;
//Info from POST variable... information given from TechTest HTML form
$videoTitleOld = $_POST['videoName'];
$videoTitle = str_replace("'", "", "$videoTitleOld");
$videoDescOld = $_POST['videoDescription'];
$videoDesc= str_replace("'", "`", "$videoDescOld"); //Important!  A ' inserted into the database will destroy the query
$videoCat = $_POST['videoCategory'];
$videoUploadDate = date("m/d/Y");

//Variables for filesystem operations
$phpPageLocation = "uvid" . $newVideoNameClean . ".php";
$dbURLLocation = $phpPageLocation;

if (isset($_POST['submit'])) {
    if ($videoFileExtension !== "mp4" && $videoFileExtension !== "mov" && $videoFileExtension !== "avi" && $videoFileExtension !== "wmv" && $videoFileExtension !== "flv" && $imageFileExtension !== "png" && $imageFileExtension !== "jpg" && $imageFileExtension !== "jpeg" && $imageFileExtension !== "webp") {
        print("You selected a file with an invalid file type.  For videos, Storylight only suppots .MOV, .MP4, .AVI, .WMV, and .FLV files.  For images, Storylight only supports .PNG and .JPG files.  Please try again.");
        print("<br>Redirecting back to previous page in 3 seconds.");
    } else if ($videoFileSize > 50000000000000000000000000000000) {
        //Onsite compression would be best.
        // i do agree that mindtek
        print("Due to storage limitations, Storylight only supports video files up to 10MB.  Please compress your video using software like Handbreak and try again.");
        print("<br>Redirecting back to previous page in 3 seconds.");
    } else if (empty($videoTitle) || empty($videoDesc) || empty($videoCat)) {
        print("You have empty fields!  Please give your video a name, description, and identify it into a category before proceeding.");
    } else if(move_uploaded_file($videoFileTmp, $videoFileLocation)) {
        if (move_uploaded_file($imageFileTmp, $imageFileLocation)){
            chmod($imageFileLocation);
            mysqli_query($conn, "INSERT INTO videos (video_dbid, video_location, video_description, video_user_id, video_title, video_username, video_category, video_pageurl, video_thumbnail_url) VALUES ('$newVideoNameClean', '$videoFileLocDatabase', '$videoDesc', '{$_SESSION['userID']}', '$videoTitle', '{$_SESSION['username']}', '$videoCat', '$dbURLLocation', '$imageFileLocDatabase')");
            mysqli_query($conn, "UPDATE videos SET videos_score = 0");
            $template = file_get_contents('videoPageTemplate.php');
            $template = str_replace('{title}', "$videoTitle", $template);
            $template = str_replace("{username}", "{$_SESSION['username']}", $template);
            $template = str_replace('{date}', "$videoUploadDate", $template);
            $template = str_replace('{description}', "$videoDesc", $template);
            $template = str_replace('{location}', "$videoFileLocDatabase", $template);
            $template = str_replace("{videoID}", "$newVideoNameClean", $template);
            $template = str_replace("{avitar}", "{$_SESSION['avitar']}", $template);
            file_put_contents("$phpPageLocation", $template);
            PRINT("WORKED");
            header("Location: $dbURLLocation?upload_success");
        }
        
    } else {
        PRINT("MYSQLI ERROR");
      
    }
} else {
    PRINT("NO AUTHENTICATION");
    header("Location: index.php?error=noauth");
    } 
?>
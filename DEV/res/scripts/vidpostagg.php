<?PHP
$serverName = "sql311.byetcluster.com";
$username = "epiz_26786365";
$password = "mHVmZP2qXlXaGUe";
$dbName = "epiz_26786365_maindb";

$conn = mysqli_connect($serverName, $username, $password, $dbName);
print($conn->error);
if (!$conn) {
    header("Location: index.php?error=connectionFailed");
}
$findContent = mysqli_query($conn, "SELECT video_description, video_created, video_title, video_username, video_thumbnail_url FROM videos");
print($conn->error);

$vidID = 0;

echo '    <div id="video-section"> ';
while ($row = $findContent->fetch_row()){
    $vDescription[] = $row[0];
    $vDate[] = $row[1];
    $vTitle[] = $row[2];
    $vUsername[] = $row[3];
    $vThumbnail[] = $row[4];

    $vidID++;

    echo "
        <div id='video-showcase-$vidID'>
            <img id='video-thumbnail' src=$row[4] type='img/png' width='256px;' height='144px'>
            <h2 id='video-title'>$row[2]</h2>
            <p id='video-description'>$row[0]</p>
        </div>

        <style>
            #video-showcase-$vidID {
                width: 128px;
                height: 90px;
                display: block
                background-color: black;
                padding-left: 20px;
            }
           
        </style>
  
    ";
}

echo '</div>';


?>

<style>
    #video-section {
        display: flex;
    }
</style>
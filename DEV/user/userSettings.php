<?php
    $serverName = "sql108.byetcluster.com";
    $username = "epiz_27352816";
    $password = "oHFmpqiKtysaJ";
    $dbName = "epiz_27352816_maindb";

$conn = mysqli_connect($serverName, $username, $password, $dbName);
print($conn->error);
if (!$conn) {
    header("Location: ./home.php?error=connectionFailed");
}

?>

<!DOCTYPE html>
<link rel='stylesheet' type='text/css' href="userSettings-style.css">
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bebas+Neue&family=Bungee&family=Fjalla+One&family=Major+Mono+Display&family=Pacifico&family=Permanent+Marker&family=Press+Start+2P&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<head>
    <?php echo"<title>Options - {$_SESSION['username']}</title>"; ?>
</head>
<body>

<div id="centertxt">
		<div id="top_text" >
			<?php echo"<h4 style='margin: 0px;  text-shadow: 12px 7px black; font-size: 150px; text-align: center;'>Account Options</h4>" ?>
		</div>
		<div id="video_background">
			<video autoplay muted loop src="/git/res/videos/video test.mp4" type=video/mp4  style="position: inherit; box-shadow: rgba(0, 0, 0, 0.19) 0 0 8px 0; width: 100%; height: 100%; display: flex"></video>
		</div>
</div>
<div class="content">
    <div id="housekeeping">  
        <br>

        <?php
        $findUserOptions = mysqli_query($conn, "SELECT username, email, avitar FROM users WHERE username = ");

        while ($row = $findUserOptions->fetch_row()){
            $username = $row[0];
            $email = $row[1];
            $avitar = $row[2];
            echo "<form method='POST' action='/res/scripts/updateUserSettings.php' id='settingsModityForm' enctype='multipart/form-data'>
            Enter old password (required): <input type='password' id='box' name='passfieldOld' placeholder='Enter old password...'>
            <br>
            <br>
            Update Username ($row[0]): <input type='text' id='box' name='userfield' placeholder='$row[0]'>
            <br>
            Update Email($row[1]): <input type='text' id='box' name='emailField' placeholder='$row[1]'>
            <br>
            Update Password: 
            <input  type='password'id='box' name='passfieldNew' placeholder='Enter new password...'>
            <br>
            <br>
            <div id='iconCrap'>
                Old Icon:
                <br>
                <img id='oldIcon' src='$row[2]' width='150px' height='150px'>
            </div>
            Select a new file: <input type='file' id='file' name='newIcon'>
            <br>
            <br>
            <input type='submit' id='button' name='submit' value='Update Settings'>
            </form>
       
            ";

        }
        ?>
    </div>
    <div id="visual">
        <br>
        <form id="visual" action="/res/scripts/updateUserSettings.php">
        Light Mode: <select id="select" name="lightmode">
                        <option value="light">Light</option>
                        <option value="dark">Dark</option>
    </select>         
    <br>  
        Theme Color: <select id="select" name="theme-color">
                        <option value="#1e64a6">Wonderful Blue</option>
                        <option value="#d4260f">Vibrant Red</option>
                        <option value="#0f0402">Dead Black</option>
    </select>
    <br>
        Theme: <select id="select" name="art=theme">
                    <option value="space">Space (default)</option>
                    <option value="nature">Nature</option>
                    <option value="tech">Tech</option>
                    <option value="cities">Cities</option>
    </select>
    <br>
        <button type='submit' id='button' name='newsubmit'>Update Settings</button>
    </form>
    </div>
    </div>
</body>

</html>



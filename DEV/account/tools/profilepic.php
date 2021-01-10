<?php include "../../tools/https.php"; ?>
<html>
  <body style="text-align: center;">
    <h3>
        <?php
            session_start();
            $pfp = $_SESSION["avitar"];
            echo "$pfp";
            echo "<img id='img_tl' style='width: 100px; height: 100px' src='../.$pfp' type='img/png'>";
        ?>
    </h3>
  </body>
</html>
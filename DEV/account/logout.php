<?php include "./../tools/https.php"; ?>
<?php
session_start();
session_unset();
session_destroy();
header("Location: ./login.php?logout_success");
?>
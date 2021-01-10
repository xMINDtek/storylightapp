<?php

$serverName = "sql311.byetcluster.com";
$username = "epiz_26786365";
$password = "mHVmZP2qXlXaGUe";
$dbName = "epiz_26786365_maindb";

$conn = mysqli_connect($serverName, $username, $password, $dbName);
print($conn->error);
if (!$conn) {
    header("Location: /Git/index.php?error=connectionFailed");
}
hi there
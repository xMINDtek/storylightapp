<?php include "../tools/https.php"; ?>
<?php

if (isset($_POST['login-submit'])) {
    //Initialize connection to the MySQL database
    $serverName = "sql108.epizy.com";
    $username = "epiz_27352816";
    $password = "oHFmpqiKtysaJ";
    $dbName = "epiz_27352816_maindb";

    $conn = mysqli_connect($serverName, $username, $password, $dbName);
    print($conn->error);
    if (!$conn) {
        //return the user to the index page if the connection to the MySQL database failed.  Abort
        header("Location: index.php?error=connectionFailed");
    }
    
    $emailORusername = $_POST['username-login'];
    $password = $_POST['password-login'];

    if (empty($emailORusername) || empty($password)) {
        header("Location: login.php?error=emptyfields; username=".$username."&email=".$email);
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username=? OR email=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: login.php?error=server-failure");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $emailORusername, $emailORusername);
            mysqli_stmt_execute($stmt);
            $checkUsername = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($checkUsername)) {
                $passwordcheck = password_verify($password, $row['password']);
                if ($passwordcheck == false) {
                    header("Location: login.php?error=incorrect-password");
                    exit();
                } else if ($passwordcheck == true) {
                    session_start();
                    $_SESSION['userID'] = $row['users_id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['avitar'] = $row['avitar'];
                    $_SESSION['theme'] = $row['theme'];
                    $_SESSION['banned'] = $row['banned'];
                    $_SESSION['whitelisted'] = $row['whitelisted'];
                    header("Location: ./../home.php");
                }
            } else {
                header("Location: login.php?error=incorrect-username");
                exit();
            }
            
        }
    }
} 
else{
    header("Location: index.php?illegal-access");
    exit();

}
    

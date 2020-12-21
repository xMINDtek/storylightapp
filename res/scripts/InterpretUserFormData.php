<?php

if (isset($_POST['submit'])){
    $serverName = "sql311.byetcluster.com";
    $username = "epiz_26786365";
    $password = "mHVmZP2qXlXaGUe";
    $dbName = "epiz_26786365_maindb";
    
    $conn = mysqli_connect($serverName, $username, $password, $dbName);
    print($conn->error);
    if (!$conn) {
        header("Location: signup.php?error=connectionFailed");
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if(empty($username) || empty($password) || empty($email)) {
        header("Location: signup.php?error=emptyfields&username=".$username."&email=".$email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/, $username")) {
        header("Location: signup.php?error=invalid-email&username=");
        exit();

    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?invalid-email&email=".$username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: signup.php?error=invalid-username&email=".$email);
        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: signup.php?error=major-failure; email=".$email);
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("Location: signup.php?error=UsernameTaken; email=".$email);
                exit();
            } else {
                $sql = "INSERT INTO users (username, password, email) VALUES(?,?,?)";
                $statement2 = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($statement2, $sql)) {
                    header("Location: signup.php?error=general_sql_error; email=".$email);
                    exit();
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($statement2, "sss", $username, $hashedPassword, $email);
                    mysqli_stmt_execute($statement2);
                    header("Location: ./../home.php?signup=Success!");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo "<h1>Looks like you know some inspect element!  Now bugger off!</h1>";
    header("Location: signup.php?error=illegal-connection");
}
<?php

if (isset($_POST['signup-submit'])){
    $serverName = "sql108.byetcluster.com";
    $username = "epiz_27352816";
    $password = "oHFmpqiKtysaJ";
    $dbName = "epiz_27352816_maindb";
    
    $conn = mysqli_connect($serverName, $username, $password, $dbName);
    print($conn->error);
    if (!$conn) {
        header("Location: signup.php?error=connectionFailed");
    }
    $username = $_POST['username-signup'];
    $password = $_POST['password-signup'];
    $email = $_POST['email-signup'];
    $theme = $_POST['theme'];

    $avitarFileName = $_FILES['imgFile']['name'];
    $avitarFileExtention = pathinfo($avitarFileName, PATHINFO_EXTENSION);
    $avitarTempLocation = $_FILES['imgFile']['tmp_name'];
    $imageDir = "userimages";
    $newImageNameClean = "uimg";
    $newImageName = "$newImageNameClean" . "." . "$avitarFileExtention";
    $imageFileLocation = "./../../../../../../stored_data/user/profile_icon/" . "$newImageNameClean";
    $imageFileLocationDb = "./../../../../../../stored_data/user/profile_icon/" . "$newImageName";

    $defaultImageLocation = "./../../../../../../stored_data/user/profile_icon/default.png";    

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
            print ("There was an error binding the statement to the SQL object, please contact an administrator.  Reloading in 25 seconds");
            sleep(2550505050);
            header("Location: signup.php?error=unable-to-prepare-statement; email=".$email);
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                print ("Sorry, but this username has been taken.  Please try again.  Reloading in 25 seconds.");
                sleep(25);
                header("Location: signup.php?error=username-taken; email=".$email);
                exit();
            } else {
                $sql = "INSERT INTO users (username, password, email) VALUES(?,?,?)";
                $statement2 = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($statement2, $sql)) {
                    header("Location: signup.php?error=general_sql_error; email=".$email);
             
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($statement2, "sss", $username, $hashedPassword, $email);
                    mysqli_stmt_execute($statement2);
                    mysqli_query($conn, "UPDATE users SET theme = '$theme' WHERE username = '$username'");
                if (move_uploaded_file($avitarTempLocation, $imageFileLocationDb)) {
                    mysqli_query($conn, "UPDATE users SET avitar = '$imageFileLocationDb' WHERE username = '$username'");
                    header("Location: ./../home.php?signup=Success!");
                } else {
                    print "Note: the uploaded image was not transferred.";
                    mysqli_query($conn, "UPDATE users SET avitar = '$defaultImageLocation' WHERE username = '$username'");
                    header("Location: ./../home.php?signup=UserFileError!");
               
                }
                    
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
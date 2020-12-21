<?php include "../../tools/https.php"; ?>
<html>
  <body style="text-align: center;">
    <h3>
      <?php
        session_start();
        
        $userid = $_SESSION['userID'];
        $username = $_SESSION['username'];
        $useravitar = $_SESSION['avitar'];
        $usertheme = $_SESSION['theme'];
        $userban = $_SESSION['banned'];
        $whitelisted = $_SESSION['whitelisted'];
        
        print("User ID = $userid");
        print("<br><br>");
        print("User Username = $username");
        print("<br><br>");
        print("User Avitar = $useravitar");
        print("<br><br>");
        print("User Theme = $usertheme");
        print("<br><br>");
        print("User Ban Status = $userban");
        print("<br><br>");
        print("User WHitelist Status = $whitelisted");
        print("<br><br><br>");
        
        print("Var Dump Area for Debugging");
        print("<br><br>");
        debug_zval_dump($_SESSION);
        print("<br><br>");
        debug_zval_dump($_FILES);
        print("<br><br>");
        debug_zval_dump($_POST);
        print("<br><br>");
        debug_zval_dump($_COOKIE);
        print("<br><br>");
        debug_zval_dump($_SERVER);
        ?>
    </h3>
  </body>
</html>
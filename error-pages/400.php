<!DOCTYPE html>
<html>
    <head>
        <title>Error 400 - Page not found!</title>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Permanent+Marker&display=swap');
        body {
            padding: 20px;
            text-align: center;
            font-family: Permanent Marker;
        }

        form {
            text-align: center;
        }

        input {
            height: 60px;
            width: 100%;
            font-family: Permanent Marker;
            font-size: 20px;
        }

        p {
            font-size: 25px;
        }
    </style>
    <body>
        <h1>Error 400</h1>
        <p>Click "Go Back" to return the pervious page you where viewing!</p>
        <br>
        <?php
            include("goback.php")
        ?>
    </body>
</html>
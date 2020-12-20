<!DOCTYPE html>
<html>
    <head>
        <title>Error 404 - Page not found!</title>
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
            border-radius: 25px;
        }

        p {
            font-size: 20px;
        }

        .topheader {
            text-align: center;
            background: #ffffff;
            border-radius: 25px;
            padding: 25px
        }
    </style>
    <body>
        <div class="topheader">
            <h1>Error 404</h1>
            <p>Click "Go Back" to return the pervious page you where viewing!</p>
        </div>
        <br>
        <?php
            include("goback.php")
        ?>
    </body>
</html>
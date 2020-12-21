<?php

// Include iniOperations.php if it isn't included yet
require_once "iniOperations.php";

// Increase the number of visits by 1 and write to ini file
$ini["entiresite"]++;

write_php_ini($ini);

?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        body {
            padding-top: 25px;
            padding-bottom: 25px;
            text-align: center;
        }

        .counterbox {
            width: 90%;
            margin: 0 auto;
            background-color: #f2f2f2;
            text-align: center;
            padding-bottom: 5px;
            padding-top: 5px;
            border-radius: 20px;
            background-color: #00000;
            border: 3px solid #000000;
        }
        
        .countertitle {
            font-family: Ubuntu;
            font-size: 25px;
            padding-bottom: 5px;
            padding: 7px;
        }

        .countervalue {
            font-family: Ubuntu;
            font-size: 25px;
            padding: 7px;
        }

        #noselect {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none; 
            user-select: none;
        }
    </style>
    <body id="noselect">
        <div class="counterbox">
            <div class="countertitle">
                Total Site Visits!
            </div>
            <div class="countervalue">
                <?php
                    echo $ini["entiresite"];
                ?>
            </div>
        </div>
        <br>
        <div class="counterbox">
            <div class="countertitle">
                Singup Page vists!
            </div>
            <div class="countervalue">
                <?php
                    echo $ini["signup"];
                ?>
            </div>
        </div>
        <br>
        <div class="counterbox">
            <div class="countertitle">
                Login Page vists!
            </div>
            <div class="countervalue">
                <?php
                    echo $ini["login"];
                ?>
            </div>
        </div>
    </body>
</html>
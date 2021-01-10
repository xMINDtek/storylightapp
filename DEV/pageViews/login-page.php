<?php

// Include iniOperations.php if it isn't included yet
require_once "iniOperations.php";

// Increase the number of visits by 1 and write to ini file
$ini["login"]++;
$ini["entiresite"]++;

write_php_ini($ini);

?>
<?php
session_start();

$whitelist = $_SESSION['whitelisted'];

$permissionlevel_3 = 3; 
$permissionlevel_2 = 2;
$permissionlevel_1 = 1;
$permissionlevel_0 = NULL;

if($whitelist == $permissionlevel_3) {
  print("You have a premission level of 3");
} elseif($whitelist == $permissionlevel_2) {
  print("You have a permission level of 2");
} elseif($whitelist == $permissionlevel_1) {
  print("You have a permission level of 1");
} elseif($whitelist == $permissionlevel_0) {
  print("You have a permission level of 0");
}
?>
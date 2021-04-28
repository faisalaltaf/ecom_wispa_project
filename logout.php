<?php
require "config.php";

session_start(); 
unset($_SESSION['LOGIN_USER']);
unset($_SESSION['LOGIN_NAME']);
  unset($_SESSION['LOGIN_ID']);

  
header("Location: {$hostname}/");
die();
?>
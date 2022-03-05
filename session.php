<?php

session_start();

if(isset($_SESSION['loggedin'])!=true || !$_SESSION['username']){

  header("location: index.php");
 
}

if(isset($_SESSION['sestime']) && (time() - $_SESSION['sestime'] > 600)) {
  session_unset(); session_destroy();
  header("Location: index.php");
  exit;
  }
  $_SESSION['sestime'] = time();
?>
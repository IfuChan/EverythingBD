<?php

  require "connection.php";
  session_start();

  $_SESSION['email']='0';
  $_SESSION['message'] = "Logging Out Successful";
    header("Location: signupsignin.php");

?>

<?php

require "connection.php";
session_start();
$_SESSION['email']=$_POST['email'];



$errors = array();

$choice = $_POST['Choice'];


if (
$_POST['email'] &&
$_POST['password']
)
{
  $email = $_POST['email'];
  $password = $_POST['password'];;

  if (count($errors) == 0) {

    if($choice==="customer")
    {
  	$query = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {

      header("Location: customerlanding.php");

  	}else {
      echo "Wrong username or password or you have selected Administrator instead of Customer";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='signupsignin.php'\">Try again</button>");
  		array_push($errors, "");
  	}
    }
    else if($choice==="admin")
    {
      $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    	$results = mysqli_query($conn, $query);
    	if (mysqli_num_rows($results) == 1) {

        header("Location: summary.php");

    	}else {
        echo "Wrong username or password or you have selected Customer instead of Administrator";
        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo("<button onclick=\"location.href='signupsignin.php'\">Try again</button>");

    		array_push($errors, "Wrong username or password or you have selected Customer instead of Administrator");
    	}
    }
  }

}



?>

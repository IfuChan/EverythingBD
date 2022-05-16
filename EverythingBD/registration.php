<?php

require "connection.php";

$errors = array();


if ($_POST['name'] &&
$_POST['name'] &&
$_POST['email'] &&
$_POST['password'] &&
$_POST['passwordverification'] &&
$_POST['mobile'] &&
$_POST['address'] &&
$_POST['city'] &&

($_POST['password'] === $_POST['passwordverification'])
)

{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordv = $_POST['passwordverification'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $city = $_POST['city'];

  $emailver = "SELECT * FROM customer WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $emailver);
  $customerflag = mysqli_fetch_assoc($result);



    if (preg_match('~[0-9]+~', $name)) {

      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo "Names can't have numbers";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='signupsignin.php'\">Try again</button>");

      array_push($errors, "");
    }

    if (strlen($address)<10) {
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo "Address should be more elaborated. Try again.";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='signupsignin.php'\">Try again</button>");

      array_push($errors, "");
    }

    if (strlen($mobile)!=11) {
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo "Phone number should be a valid one. Try again.";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='signupsignin.php'\">Try again</button>");

      array_push($errors, "");
    }

    if (strlen($password)<8) {
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo "Password should be atleast 8 characters long. Try again.";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='signupsignin.php'\">Try again</button>");

      array_push($errors, "");
    }

    if ($customerflag) {
      if ($customerflag['Email']===$email) {
        echo "Email address already in use";

        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo("<button onclick=\"location.href='index.php'\">Back to Home</button>");

        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo("<button onclick=\"location.href='signupsignin.php'\">Try again</button>");

        array_push($errors, "");
      }
    }

    if (count($errors) == 0) {

   $query = "INSERT INTO customer (Full_name,Phone_num,Address,City,Email,password)
         VALUES('$name', '$mobile', '$address', '$city' , '$email', '$password')";
   mysqli_query($conn, $query);

   echo  nl2br ("\n");
   echo  nl2br ("\n");
   echo("<button onclick=\"location.href='signupsignin.php'\">Successful Registration. Sign In Now.</button>");

 }
}
else {
  echo "Registration Unsuccessful. Your passwords may not have matched.";
}

?>

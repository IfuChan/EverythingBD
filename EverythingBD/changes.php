<?php

require "connection.php";
$errors = array();
$newname = $_POST['newname'];
$nemail = $_POST['nemail'];
$newmobile = $_POST['nmobile'];
$newaddress = $_POST['naddress'];
$newcity = $_POST['ncity'];
$newpass = $_POST['npass'];
$accountchoice = $_POST['accountchoice'];
$noerrorcounter = 0;


    if (preg_match('~[0-9]+~', $newname)) {

      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo "Names can't have numbers";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='customerlanding.php'\">Try again</button>");

      array_push($errors, "");
    }

    if (strlen($newaddress)<10) {
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo "Address should be more elaborated. Try again.";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='customerlanding.php'\">Try again</button>");

      array_push($errors, "");
    }

    if (strlen($newmobile)!=11) {
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo "Phone number should be a valid one. Try again.";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='customerlanding.php'\">Try again</button>");

      array_push($errors, "");
    }

    if (strlen($newpassword)<8) {
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo "Password should be atleast 8 characters long. Try again.";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='customerlanding.php'\">Try again</button>");

      array_push($errors, "");
    }

if (
$_POST['veremail'] &&
$_POST['verpassword']
)

{
  $email = $_POST['veremail'];
  $password = $_POST['verpassword'];


  //verification for updating

  if($accountchoice==="update")
  {
  $query = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
  $results = mysqli_query($conn, $query);
  if (mysqli_num_rows($results) == 1) {


        if($newmobile)
        {
          $mobilesql =   "UPDATE CUSTOMER
                          SET Phone_num='$newmobile'
                          WHERE email='$email'";

          mysqli_query($conn, $mobilesql);

          echo "Mobile Changed!";
          echo  nl2br ("\n");
          $noerrorcounter=1;
        }

      if($newname)
      {
        $namesql =   "UPDATE CUSTOMER
                        SET Full_name='$newname'
                        WHERE email='$email'";
        mysqli_query($conn, $namesql);
        echo "Name Changed!";
        echo  nl2br ("\n");
        $noerrorcounter=1;
      }


      if($newaddress)
            {
              $addresssql =   "UPDATE CUSTOMER
                              SET address='$newaddress'
                              WHERE email='$email'";
              mysqli_query($conn, $addresssql);

              echo "Address Changed!";
              echo  nl2br ("\n");
              $noerrorcounter=1;
            }

      if($newcity)
            {
              $citysql =   "UPDATE CUSTOMER
                              SET city='$newcity'
                              WHERE email='$email'";
              mysqli_query($conn, $citysql);

              echo "City Changed!";
              echo  nl2br ("\n");
              $noerrorcounter=1;
            }

      if($newpass)
            {
              $passsql =   "UPDATE CUSTOMER
                              SET password=$newpass
                              WHERE email='$email'";
              mysqli_query($conn, $passsql);

              echo "Password Changed!";
              echo  nl2br ("\n");
              $noerrorcounter=1;


      if($nemail)
      {

        $emailver = "SELECT * FROM customer WHERE email='$nemail' LIMIT 1";
        $result = mysqli_query($conn, $emailver);
        $customerflag = mysqli_fetch_assoc($result);

          if ($customerflag) {
            if ($customerflag['Email']===$email)
            {
              echo "Email address already in use. Go back to the previous web page.";
              array_push($errors, "");
            }
          }

          if (count($errors) == 0)
          {
            $emailsql =   "UPDATE CUSTOMER
                            SET Email='$nemail'
                            WHERE email='$email'";
            mysqli_query($conn, $emailsql);

            echo "Email Changed!";
            echo  nl2br ("\n");
            $noerrorcounter=1;
          }
      }


    }}}

  //verification for deletion

  else if($accountchoice==="delete")
  {
    $query = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {


    echo "Account Succesfully Deleted!";
    echo  nl2br ("\n");
    $noerrorcounter=1;

    $deletingquery = "DELETE FROM customer WHERE email='$email' ";
    mysqli_query($conn, $deletingquery);

    }else {
      echo "Wrong username or password";
      array_push($errors, "");

    }}

    if ($noerrorcounter>0) {
      echo  nl2br ("\n");
      echo  nl2br ("\n");
    echo("<button onclick=\"location.href='index.html'\">Back to Home</button>");
  }else {
    echo  nl2br ("\n");
    echo  nl2br ("\n");
  echo("<button onclick=\"location.href='customerlanding.php'\">Try again</button>");
  }


}

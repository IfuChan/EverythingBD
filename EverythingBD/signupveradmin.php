  <?php

    require "connection.php";

    $updatechoice =  $_POST['DelChoice'];
    $delemail =  $_POST['delemail'];
    $delpassword =  $_POST['delpassword'];
    $delname =  $_POST['delname'];
    $delmb =  $_POST['delmb'];

    $emailver = "SELECT * FROM admin WHERE email='$delemail' LIMIT 1";
    $result = mysqli_query($conn, $emailver);
    $emailflag = mysqli_fetch_assoc($result);

    if ($updatechoice == "add") {

      if (preg_match('~[0-9]+~', $delname)) {

        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo "Names can't have numbers";
        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo("<button onclick=\"location.href='summary.php'\">Try again</button>");

        array_push($errors, "");
      }

      if (strlen($delmb)!=11) {
        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo "Phone number should be a valid one. Try again.";
        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo("<button onclick=\"location.href='summary.php'\">Try again</button>");

        array_push($errors, "");
      }

      if (strlen($delpassword)<8) {
        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo "Password should be atleast 8 characters long. Try again.";
        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo("<button onclick=\"location.href='summary.php'\">Try again</button>");

        array_push($errors, "");
      }

      if ($emailflag) {
        if ($emailflag['Email']===$delemail) {
          echo "Email address already in use";

          echo  nl2br ("\n");
          echo  nl2br ("\n");
          echo("<button onclick=\"location.href='index.php'\">Back to Home</button>");

          echo  nl2br ("\n");
          echo  nl2br ("\n");
          echo("<button onclick=\"location.href='summary.php'\">Try again</button>");

          array_push($errors, "");
        }
      }

      if (count($errors) == 0) {

      $feedbackdeletionsqld = "INSERT INTO admin
                               (Full_name, email, password, Phone_num)
                               VALUES ('$delname','$delemail','$delpassword','$delmb')";
      $feedbackdeletionsd = mysqli_query($conn, $feedbackdeletionsqld);

      echo "Addition Completion";
      echo  nl2br ("\n");
      echo  nl2br ("\n");
      echo("<button onclick=\"location.href='summary.php'\">Return</button>");
    }

    }else if ($updatechoice == "delete") {

      $feedbackdeletionsqladm = "DELETE FROM admin WHERE email = '$delemail' AND password = '$delpassword' ";
      $feedbackdeletionsadm = mysqli_query($conn, $feedbackdeletionsqladm);

      if ($feedbackdeletionsqladm) {
        echo "Deletion Completion";
        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo("<button onclick=\"location.href='summary.php'\">Return</button>");.
      }else {
        echo "Wrong Credentials";
        echo  nl2br ("\n");
        echo  nl2br ("\n");
        echo("<button onclick=\"location.href='summary.php'\">Try Again</button>");.
      }

    }

   ?>

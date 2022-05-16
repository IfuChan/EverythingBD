<!DOCTYPE html>
<html>
<head>
  <title>Customer Feedback Viewer</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

  <div class="maincontainer">
        <div class="navibar">
          <div class="Logo">
            <img src="images/Logo.png" width="200px">
          </div>
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="categories.php">Categories</a></li>
              <li><a href="signupsignin.php">Sign In/Up</a></li>
              <li><a href="about.html">About/Contact</a></li>
              <li><a href="summary.php">Admin Panel</a></li>
            </ul>
          </nav>
          <a href="shoppingcart.php"><img src="Images/scart.png" width=40px ></a>
        </div>
  </div>

    <br>


    <?php
    require "connection.php";
    session_start();
    if ($_SESSION['email']=='0')
      header("Location: signupsignin.php");
    ?>


    <form action="feedbackpage.php" method="post">

    <div class="">

            <table style="width:100%" cellpadding="2"  cellspacing="2" border="1">


              <tr>
                <th>Feedback Serial</th>
                <th>Order Date</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Customer Email</th>
                <th>Customer Feedback</th>
              </tr>




                    <?php
                    require 'connection.php';
                    $sql= "SELECT feedback.*, Full_name, Phone_num, address
                                FROM feedback, customer
                                  WHERE CustomerEmail = email";

                    $result=$conn->query($sql);

                    if($result-> num_rows>0){
                      while($row=$result->fetch_assoc()){
                        echo "<tr>
                        <td>".$row["feedbackSI"]."</td>
                        <td>".$row["DateOfOrder"]."</td>
                        <td>".$row["Full_name"]."</td>
                        <td>".$row["Phone_num"]."</td>
                        <td>".$row["address"]."</td>
                        <td>".$row["CustomerEmail"]."</td>
                        <td>".$row["Feedback"]."</td>
                        </tr>";
                    }
                    }
                    else{
                      echo"0 result";
                    }


                    ?>

            </table>

      <br>
    </div>
    </form>

    <form method="post">


        <div class="reg">FEEDBACK DELETION</div>

        <p style="text-align:center;" >Delete A Specific Feedback: </p>
        <input class="center-block" type="number" name="deletedSI"> <br>

        <br>
        <input class="center-block" type="submit" name="deletionSI" value="Delete"</input>

        <?php
        if (isset($_POST['deletionSI'])) {
          require "connection.php";

          $dSI = $_POST['deletedSI'];

          $feedbackdeletionsqlsi = "DELETE FROM feedback WHERE feedbackSI = '$dSI' ";
          $feedbackdeletionsi = mysqli_query($conn, $feedbackdeletionsqlsi);

          header("Location: feedbackview.php");

        }


         ?>


        <p style="text-align:center;" >Delete Feedbacks of A Specific Date: </p>
        <input class="center-block" type="date" name="deletedate"> <br>

        <br>
        <input class="center-block" type="submit" name="deletionconfirmation" value="Delete"</input>

        <?php
        if (isset($_POST['deletionconfirmation'])) {
          require "connection.php";

          $ddate = $_POST['deletedate'];

          $feedbackdeletionsql = "DELETE FROM feedback WHERE DateOfOrder = '$ddate' ";
          $feedbackdeletion = mysqli_query($conn, $feedbackdeletionsql);

          header("Location: feedbackview.php");

        }


         ?>

         <p style="text-align:center;" >Delete Feedbacks of A Specific Email: </p>
         <input class="center-block" type="email" name="deletemail"> <br>

         <br>
         <input class="center-block" type="submit" name="deletionconfirmation2" value="Delete"</input>

         <?php
         if (isset($_POST['deletionconfirmation2'])) {
           require "connection.php";

           $demail = $_POST['deletemail'];

           $feedbackdeletionsqle = "DELETE FROM feedback WHERE CustomerEmail = '$demail' ";
           $feedbackdeletione = mysqli_query($conn, $feedbackdeletionsqle);

           header("Location: feedbackview.php");

         }
          ?>

          <p style="text-align:center;" >Delete Feedbacks of A Specific Date and Email Combo: </p>
          <input class="center-block" type="email" name="deletemailcombo"> <br>
          <input class="center-block" type="date" name="deletedatecombo"> <br>

          <br>
          <input class="center-block" type="submit" name="deletionconfirmation3" value="Delete"</input>

          <?php
          if (isset($_POST['deletionconfirmation3'])) {
            require "connection.php";

            $demailc = $_POST['deletemailcombo'];
            $ddatec = $_POST['deletedatecombo'];

            $feedbackdeletionsqlc = "DELETE FROM feedback WHERE
                                    CustomerEmail = '$demailc'
                                    AND
                                    DateOfOrder = '$ddatec'";

            $feedbackdeletionc = mysqli_query($conn, $feedbackdeletionsqlc);

            header("Location: feedbackview.php");

          }


           ?>

      <br>

    </form>


      <form action="logout.php" method>

              <input class="center-block" type="submit" name="logoutbtn" value="Logout"</input>

      </form>


<br><br>
 <div class="siteFooter">
   <div class="container">
     <div class="row1">
       <div class="fcol1">
         <h3>This site is created for CSE 311 course</h3>
       </div>
       <div class="fcol2">
       <h3>Created By: </h3>
       <ul>
         <li>Ifad Uz Zaman</li>
         <li>Peyal Rahman</li>
         <li>Kamran Ahmed</li>
       </ul>
       </div>
       <div class="fcol3">
         <h3>Visit Us</h3>
         <ul>
           <li><a href="https://www.facebook.com/Scarxcia" target="_blank">Ifad</a></li>
           <li><a href="https://www.facebook.com/pialhrhmn/" target="_blank">Peyal</a></li>
           <li><a href="https://www.facebook.com/thisaintkamran/" target="_blank">Kamran</a></li>
         </ul>
       </div>
     </div>

   </div>

 </div>



</body>
</html>

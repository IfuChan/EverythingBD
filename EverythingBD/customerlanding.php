<!DOCTYPE html>
<html>
<head>
  <title>Customer Landing Page</title>
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


    <form action="signinver.php" method="get">


    <div class="frame1">
            <div class="reg">EXISTING CREDENTIALS</div>

          <?php
            require "connection.php";

            $sessionemail = $_SESSION['email'];

            $fetchingsql = "SELECT * FROM customer WHERE email='$sessionemail'";
          	$fetcheddata = mysqli_query($conn, $fetchingsql);

            if (mysqli_num_rows($fetcheddata) > 0) {

            while($row = mysqli_fetch_assoc($fetcheddata)) {
              echo  nl2br ("\n");
              echo "Full Name: ".$row["Full_name"];
              echo  nl2br ("\n");
              echo "Email: ".$row["Email"];
              echo  nl2br ("\n");
              echo "Mobile: ".$row["Phone_num"];
              echo  nl2br ("\n");
              echo "Street Address: ".$row["Address"];
              echo  nl2br ("\n");
              echo "City: ".$row["City"];
              echo  nl2br ("\n");

            }}
           ?>

          <br>


    </div>
    </form>

    <form action="changes.php" method="post">
      <div class="frame1">
        <div class="reg">UPDATE CREDENTIALS</div>
               <br>
               <input class="center-block" type="text" placeholder="New Full Name" name="newname">
               <input class="center-block" type="email" placeholder="New Email" name="nemail">
               <input class="center-block" type="text" placeholder="New Mobile" name="nmobile">
               <input class="center-block" type="text" placeholder="New Address" name="naddress">
               <input class="center-block" type="text" placeholder="New City" name="ncity">
               <input class="center-block" type="password" placeholder="New Password" name="npass">
               <br>
      </div>

    <div class="frame1">
        <div class="reg">VERIFY AUTHENTICITY</div>

        <br>
        <input class="center-block" type="email" placeholder="Enter Unchanged Email ID" name="veremail" required>
        <input class="center-block" type="password" placeholder="Enter Password" name="verpassword" required> <br>
        <br>

        <select class="center-block" name= "accountchoice">
          <option value="update">Update Account</option>
          <option value="delete">Delete Account</option>
        </select> <br>

        <button class="center-block" type="submit" name="confimation">Confirm Changes</button>


      <br>
    </div>
    </form>


    <form  method="post">

    <div class="frame1">
        <div class="reg">FEEDBACK</div>

        <br>
        <input class="center-block" type="email" placeholder="Enter Email ID" name="feedbackemail" required>

        <p style="text-align:center;" >Place Date of Order: </p>
        <input class="center-block" type="date" name="feedbackdate" required> <br>

        <p style="text-align:center;" >Enter Feedback: </p>
        <textarea class="center-block" rows = "5" cols = "30" name = "feedbacktext" required>

        </textarea>
        <br>

        <input class="center-block" type="submit" name="feedbackconfirmation" value="Submit Feedback"</input>

        <?php
        if (isset($_POST['feedbackconfirmation'])) {
          require "connection.php";


                    $femail = $_POST['feedbackemail'];
                    $fdate = $_POST['feedbackdate'];
                    $fback = $_POST['feedbacktext'];

                    $feedbackinductionsql = "INSERT INTO feedback(DateOfOrder, CustomerEmail, Feedback)
                                            VALUES ('$fdate','$femail','$fback')";
                    $feedbackinduction = mysqli_query($conn, $feedbackinductionsql);
        }


         ?>

      <br>
    </div>

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

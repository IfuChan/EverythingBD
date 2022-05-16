<!DOCTYPE html>
<html>
<head>
  <title>Sign In and Sign Up</title>
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

    <?php
    session_start();
    if(isset($_POST['loginbutton'])){
      $inputtedemail = $_POST['email'];
      $_SESSION['email']= $inputtedemail;
    }

     ?>




  <form action="signinver.php" method="post">

    <div class="frame1">

      <br>
      <div class="reg">SIGN IN</div>

      <br>
      <input class="center-block" type="email" placeholder="Enter Unique Email ID" name="email" required>
      <input class="center-block" type="password" placeholder="Enter Password" name="password" required> <br><br>

      <select class="center-block" name= "Choice">
        <option value="customer"> Customer</option>
        <option value="admin"> Administrator</option>
      </select> <br><br>

      <input class="center-block" type="submit" name="loginbutton" value="Login" /input>

    </div>
 </form>

<br>

 <form action="registration.php" method="post">
  <div class="frame1">

    <br>
    <div class="reg">SIGN UP AS NEW CUSTOMER</div>

<br>

    <input class="center-block" type="text" placeholder="Enter Full Name" name="name" id="name" required>
    <input class="center-block" type="email" placeholder="Enter Email" name="email" id="email" required></br>
    <input class="center-block" type="password" placeholder="Enter Password" name="password" id="password" required>
    <input class="center-block" type="password" placeholder="Repeat Password" name="passwordverification" id="passwordverification" required><br>

    <input class="center-block" type="number" placeholder="Enter Mobile" name="mobile" id="mobile" required>
    <input class="center-block" type="text" placeholder="Enter Street Address" name="address" id="address" required>
    <input class="center-block" type="text" placeholder="Enter City" name="city" id="city" required><br>

    <br>

    <button class="center-block" type="submit" class="registerbtn">Register</button>
  </div>
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

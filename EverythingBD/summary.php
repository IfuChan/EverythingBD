<!DOCTYPE html>
<html>
<head>
  <title>Administrator Summary</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>


<body>

<div class="maincontainer">
        <div class="navibar">
          <div class="Logo">
            <a href="index.php"><img src="images/Logo.png" width="200px"></a>
          </div>
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="categories.php">Categories</a></li>
              <li><a href="summary.php">Admin Panel</a></li>
              <li><a href="signupsignin.html">Sign In/Up</a></li>
              <li><a href="about.html">About/Contact</a></li>
            </ul>
          </nav>
          <a href="shoppingcart.html"><img src="Images/scart.png" width=40px ></a>
        </div>


<h2>ADMINISTATOR SUMMARY PAGE</h2>

<?php
require "connection.php";
session_start();
if ($_SESSION['email']=='0')
  header("Location: signupsignin.php");
?>



  <div class="box1">
    <br>
    <div class="sum">View all Customers and Admins:</div>
    <br>
    <a href="customersandadmins.php"><button class="center-block">Go</button></a>
  </div>

<br>

  <div class="box1">
    <br>
    <div class="sum">Most Selling Products of The Week:</div>
    <br>
    <a href="mostsoldproduct.php"><button class="center-block">Go</button></a>
  </div>

<br>

<div class="box1">
  <br>
  <div class="sum">Most Rated Products:</div>
  <br>
  <a href="mostratedproducts.php"><button class="center-block">Go</button></a>
</div>

<br>

<div class="box1">
  <br>
  <div class="sum">Add Product</div>
  <br>
  <a href="addproduct.php"><button class="center-block">Go</button></a>
</div>

<br>

<div class="box1">
  <br>
  <div class="sum">View Customer Feedbacks</div>
  <br>
  <a href="feedbackview.php"><button class="center-block">Go</button></a>
</div>

<br>

<div class="box1">
  <br>
  <div class="sum">View All Orders</div>
  <br>
  <a href="ordersinfo.php"><button class="center-block">Go</button></a>
</div>

<br>

<div class="box1">
<div class="sum">Revenues:</div>
  <style>
  table {
border-spacing: 15px;
}
</style>
  <table>
    <tr>
      <th>Total Income (BDT) :</th>
    </tr>
    <?php
    require 'connection.php';
$sql= "SELECT SUM(order_ammount) FROM ordernum";
$result=$conn->query($sql);
if($result-> num_rows>0){
while($row=$result->fetch_assoc()){
  echo "<tr><td>".$row["SUM(order_ammount)"]."</td></tr>";
}
}
else{
echo"0 result";
}

     ?>
  </table>
</div>

<br><br><br><br>


  <form action="signupveradmin.php" method="post">

      <br>
      <div class="reg">Add/Delete an Administrator</div>

      <br>
      <input class="center-block" type="Name" placeholder="Enter New Name of Admin" name="delname">
      <input class="center-block" type="number" placeholder="Enter New Mobile of Admin" name="delmb">
      <input class="center-block" type="email" placeholder="Enter Email ID of Admin" name="delemail" required>
      <input class="center-block" type="password" placeholder="Enter Password of Admin" name="delpassword" required> <br><br>

      <select class="center-block" name= "DelChoice">
        <option value="add">Add</option>
        <option value="delete">Delete</option>
      </select> <br><br>

      <input class="center-block" type="submit" name="updateadmin" value="Update" /input>

    </form>


</div>

<br><br>

  <form action="logout.php" method>

          <input class="center-block" type="submit" name="logoutbtn" value="Logout"</input>

  </form>


<br>

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

<!DOCTYPE html>
<html>
<head>
  <title>Orders Info</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="stylep.css">
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
              <li><a href="signupsignin.php">Sign In/Up</a></li>
            </ul>
          </nav>
          <a href="viewcart.php"><img src="Images/scart.png" width=40px ></a>
        </div>

        <table>
        <caption><b>Orders</caption>
        <tr>
        <th>Order ID</th>
        <th>Customer ID</th>
        <th>Product ID</th>
        <th>Customer Name</th>
        <th>Product Name</th>
        <th>Order Date</th>
        <th>Order Amount</th>
        </tr>
        <?php
             $con = mysqli_connect("localhost","root","","everythingbd");

              if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              exit();
              }

              $sql = "SELECT * FROM ordernum";
              $result = mysqli_query($con, $sql);
              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr><td>".$row["order_num"]."</td><td>".$row["Customer_id"]."</td><td>".$row["product_id"]."</td><td>".$row["Customer_name"]."</td><td>".$row["Product_name"]."</td><td>".$row["Order_Date"]."</td><td>".$row["Order_Ammount"]."</td></tr>";
                }
              } else {
                echo "0 results";
              }

              ?>
        </table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="istyle.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="maincontainer">
        <div class="navibar">
          <div class="Logo">
            <a href="index.php">
              <img src="images/Logo.png" width="200px">
            </a>
          </div>
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="categories.php">Categories</a></li>
              <li><a href="signupsignin.php">Sign In/Up</a></li>
            </ul>
          </nav>
          <a href="shoppingcart.php"><img src="images/scart.png" width=40px ></a>
        </div>
      </div>

      <div class="scartcontainer">

        <table>
          <tr>
            <th>ProductID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
          <?php
             $con = mysqli_connect("localhost","root","","everythingbd");

              if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              exit();
              }

              session_start();

              if(isset($_POST['id']) && isset($_POST['qty'])){
                $prod_id = $_POST['id'];
                $prod_qty = $_POST['qty'];
                }

              else{
                echo "Nothing In Cart<br>";
              }

              $sql = "SELECT Product_id, Product_name FROM product WHERE Product_id = '$prod_id'";
              $result = mysqli_query($con, $sql);

              $sql2 = "SELECT Price FROM product WHERE Product_id = '$prod_id'";
              $result2 = mysqli_query($con, $sql2);
              $row2= mysqli_fetch_assoc($result2);

              $mul_pri = $row2['Price'] * $_POST['qty'];

              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr><td>".$row["Product_id"]."</td><td>".$row["Product_name"]."</td><td>$prod_qty</td><td>$mul_pri</td></tr>";
                }
              } else {
                echo "0 results";
              }

          ?>
        </table>
        <div class="tprice">
          <table>
          <?php
            echo "<tr>
            <td><td><td><td><td><td><td>Total: $mul_pri</td></td></td></td></td></td></td>
            </tr>";
            ?>

          </table>

        </div>

        <form method="POST" action="orderver.php">

        <div>

          <br><br><br><br>
          <div class="reg">Order Verification</div>

          <br>
          <input class="center-block" type="email" placeholder="Enter Unique Email ID" name="email" required> <br>
          <input class="center-block" type="password" placeholder="Enter Password" name="password" required> <br>
          <input type="submit" class="button2" name="submit" onclick="return confirm('Are you sure?')" value="Confirm Order">
          <input type="hidden" name="prod_id" value="<?php echo $prod_id; ?>">
          <input type="hidden" name="order_val" value="<?php echo $mul_pri; ?>">

        </div>
        </form>

      </div>

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
            <li><a href="https://www.facebook.com/thisaintkamran/" target="_blank">Peyal</a></li>
            <li><a href="https://www.facebook.com/pialhrhmn/" target="_blank">Kamran</a></li>
          </ul>
        </div>
      </div>

    </div>

  </div>

  </body>
</html>

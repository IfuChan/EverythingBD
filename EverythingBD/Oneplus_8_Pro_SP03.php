<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oneplus 8 Pro</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <div class="maincontainer">
    <div class="navibar">
      <div class="Logo">
        <img src="Prod_Img/Logo.png" width="200px">
      </div>
      <nav>
        <ul>
          <li><a class="anchor" href="index.php">Home</a></li>
          <li><a class="anchor" href="categories.php">Categories</a></li>
          <li><a class="anchor" href="signupsignin.php">Sign In/Up</a></li>
          <li><a href="about.html">About/Contact</a></li>
        </ul>
      </nav>
      <a href="viewcart.php">
      <img src="Prod_Img/scart.png" width=40px>
      </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                      <img src="Prod_Img/oneplus-8-pro-1.jpg" class="d-block w-100" alt="8 Pro 1">
                      </div>
                      <div class="carousel-item">
                        <img src="Prod_Img/oneplus-8-pro-2.jpg" class="d-block w-100" alt="8 Pro 2">
                      </div>
                      <div class="carousel-item">
                        <img src="Prod_Img/gsmarena_003_op8pro.jpg" class="d-block w-100" alt="8 Pro 3">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>

            <div class="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2 class="title">Oneplus 8 Pro</h2>
                <p>Product Code: XYZ003</p>
                <img src="Prod_Img/stars.png" class="stars" alt="stars">
                <p class="price">BDT 65,000.00</p>
                <p><b>Availability: </b>In Stock</p>
                <p><b>Warranty: </b>1 Year(s)</p>
                <p><b>Brand: </b>Oneplus</p>
                <p>Quantity: </p>
                <form action="viewcart.php" method="POST">
                <input type="text" name="qty" value="1">
                <input type="hidden" name="id" value="3">
                <button type="submit" class="cart">Add to cart</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div>
        <div>
            <p class="desc"><b>Description: </b>The 8 Pro has an impressive spec sheet: high-end CPU, 10-bit high-end AMOLED screen, Warp Charge 30T, and for the first time from OnePlus: support for wireless charging and even reverse-wireless charging for sharing juice with an accessory or a to give some juice to a friend.</p>
        </div>
    </div>

    <br>
    <br>

    <div class="divcent">
      <a class="anchor" href="iphone_12_mini_SP02.php">
        <button class="prev">Previous</button>
      </a>
      <a class="anchor" href="Sony_Xperia_5_II_SP04.php">
        <button class="nxt">Next</button>
      </a>
    </div>

    <br>
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
              <li><a class="anchor" href="https://www.facebook.com/Scarxcia" target="_blank">Ifad</a></li>
              <li><a class="anchor" href="https://www.facebook.com/thisaintkamran/" target="_blank">Peyal</a></li>
              <li><a class="anchor" href="https://www.facebook.com/pialhrhmn/" target="_blank">Kamran</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


</body>
</html>

<?php
  $con = mysqli_connect("localhost","root","","everythingbd");

  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
  }
?>

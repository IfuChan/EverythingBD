<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony KD-X8000G 75 Inch Android 4K Ultra HD SMART LED TV</title>
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
                      <img src="Prod_Img/kd-x800g-65-1-500x500.jpg" class="d-block w-100" alt="4K 1">
                      </div>
                      <div class="carousel-item">
                        <img src="Prod_Img/kd-x800g-65-2-500x500.jpg" class="d-block w-100" alt="4K 2">
                      </div>
                      <div class="carousel-item">
                        <img src="Prod_Img/x8500d-side.jpg" class="d-block w-100" alt="4K 20 3">
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
                <h2 class="title">Sony KD-X8000G 75 Inch Android 4K Ultra HD SMART LED TV</h2>
                <p>Product Code: XYZ009</p>
                <img src="Prod_Img/stars.png" class="stars" alt="stars">
                <p class="price">BDT 2,25,000.00</p>
                <p><b>Availability: </b>In Stock</p>
                <p><b>Warranty: </b>5 Year(s)</p>
                <p><b>Brand: </b>Sony</p>
                <p>Quantity: </p>
                <form action="viewcart.php" method="POST">
                <input type="text" name="qty" value="1">
                <input type="hidden" name="id" value="9">
                <button type="submit" class="cart">Add to cart</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div>
        <div>
            <p class="desc"><b>Description: </b>Display Type:	LCD
              Screen Size:	75" (74.5")
              Resolution:	3840x2160
              Operating System:	Android
              Storage:	16GB
              Dimension: (L x W x H)	DIMENSION OF TV WITHOUT STAND (W X H X D) Approx. Approx. 1686x970x80 mm
              DIMENSION OF TV WITH STAND (W X H X D) Approx. Approx. 1686x1034x402 mm
              DIMENSION OF PACKAGE CARTON (W X H X D) Approx. 1817 x 1108 x 190 mm
              Weight:	WEIGHT OF TV WITHOUT STAND Approx. 30.7 Kg
              WEIGHT OF TV WITH STAND Approx. 32.5 Kg
              WEIGHT OF PACKAGE CARTON (GROSS) Approx. 44 kg</p>
        </div>
    </div>

    <br>
    <br>

    <div class="divcent">
      <a class="anchor" href="#">
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asus ROG Zephyrus G14 GA401IV</title>
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
                      <img src="Prod_Img/zephyrus-g14-01-500x500.jpg" class="d-block w-100" alt="Zephyrus 1">
                      </div>
                      <div class="carousel-item">
                        <img src="Prod_Img/zephyrus-g14-02-500x500.jpg" class="d-block w-100" alt="Zephyrus 2">
                      </div>
                      <div class="carousel-item">
                        <img src="Prod_Img/ad79f0b6ed4d4ebd0481ae9353260fd0690a0670.jpeg" class="d-block w-100" alt="Zephyrus 3">
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
                <h2 class="title">Asus ROG Zephyrus G14 GA401IV</h2>
                <p>Product Code: XYZ008</p>
                <img src="Prod_Img/stars.png" class="stars" alt="stars">
                <p class="price">BDT 1,80,000.00</p>
                <p><b>Availability: </b>In Stock</p>
                <p><b>Warranty: </b>1 Year(s)</p>
                <p><b>Brand: </b>Asus</p>
                <p>Quantity: </p>
                <form action="viewcart.php" method="POST">
                <input type="text" name="qty" value="1">
                <input type="hidden" name="id" value="8">
                <button type="submit" class="cart">Add to cart</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div>
        <div>
            <p class="desc"><b>Description: </b>Processor	AMD Ryzen 9 4900HS (8 Cores , 3.0GHz up to Up to 4.3GHz) Processor
              Display:	14-inch Full HD (1920 x 1080) IPS-level panel, Anti-glare, 120Hz, 100% sRGB, 72% NTSC Display
              Brightnes: 300
              Contrast: 1000:1
              Memory:	8GB DDR4 on board + 8GB DDR4 3200MHz SO-DIMM RAM
              Storage:	1TB M.2 NVMe PCIe 3.0 SSD
              Graphics:	NVIDIA GeForce RTX 2060 Max-Q with 6GB GDDR6 Graphics
              Operating System:	Windows 10
              Battery:	76WHrs, 4S1P, 4-cell Li-ion
              Adapter:	ø6.0
              180W AC Adapter
              Output: 20V DC, 9A, 180W
              Input: 100~240V AC, 50/60Hz universal
              Audio:	Built-in array microphone
              2 x 0.7W tweeter
              2 x 2.5W speaker with smart AMP technology
              Dolby Atmos Software
              Special Feature:	Finger Print Sensor,
              ROG Impact Gaming Mouse</p>
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

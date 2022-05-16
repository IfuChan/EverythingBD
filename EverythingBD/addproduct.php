<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
  <link rel="stylesheet" href="CSS/styleap.css">
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
<br>

<form action="action_addproduct.php" method="post">
  <div class="container">
    <h1>Add Product</h1>
    <p>Please enter details of the product.</p>
    <hr>

    <b>Product Name: </b></label>
    <input type="text" name="product_name" id="product_name" required>

    <b>Price: </b></label>
    <input type="text" name="price" id="price" required>

    <b>Stock: </b></label>
    <input type="text" name="stock" id="stock" required>

    <b>Category: </b></label>
    <input type="text" name="category" id="category" required>

    <b>Discounted Price: </b></label>
    <input type="text" name="disc_price" id="disc_price" >

    <hr>


    <button type="submit" class="registerbtn">Add</button>
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

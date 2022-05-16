<?php

require "connection.php";

$errors = array();


if (isset($_POST['product_name']) &&
isset($_POST['price']) &&
isset($_POST['stock']) &&
isset($_POST['category']) &&
isset($_POST['disc_price']))
{
  $pname = $_POST['product_name'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];
  $category = $_POST['category'];
  $disc = $_POST['disc_price'];



   $query = "INSERT INTO product (product_name,price,stock,category,disc_price,rating,review)
         VALUES('$pname', '$price', '$stock', '$category' , '$disc',null,null)";
   $is_inserted=mysqli_query($conn, $query);

   if($is_inserted){
     echo 'Product is inserted!';
   }else{
     echo 'Opps error!';
   }

 }
else {
  echo "Insertion Unsuccessful.";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin</title>
  </head>
  <body>
    <a href="index.php"><button class="center-block">Go Home</button></a>
  </body>
</html>

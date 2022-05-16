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


<h2>Most Rated Products:</h2>


    <style>
    table {
      margin-left: auto;
      margin-right: auto;
  border-spacing: 15px;
}
th{
  border: 1px solid black;
}
</style>
    <table>
      <tr>
        <th>Product Name</th>
        <th>Rating</th>
      </tr>
      <?php
      require 'connection.php';
$sql= "SELECT product_name,rating FROM product WHERE product_id IN (SELECT product_id from product GROUP BY rating HAVING rating>3)
ORDER BY rating DESC";
$result=$conn->query($sql);
if($result-> num_rows>0){
  while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["product_name"]."</td><td>".$row["rating"]."</td></tr>";
  }
}
else{
  echo"0 result";
}

       ?>
    </table>

<br>




</body>
</html>

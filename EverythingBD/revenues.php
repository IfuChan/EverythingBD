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
            <img src="images/Logo.png" width="200px">
          </div>
          <nav>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="categories.html">Categories</a></li>
              <li><a href="http://127.0.0.1:3000/summary.html">Admin Panel</a></li>
              <li><a href="signupsignin.html">Sign In/Up</a></li>
              <li><a href="about.html">About/Contact</a></li>
            </ul>
          </nav>
          <a href="shoppingcart.html"><img src="Images/scart.png" width=40px ></a>
        </div>


<h2>Revenues:</h2>


  <div class="box1">
    <style>
    table {
  border-spacing: 15px;
}
</style>
    <table>
      <tr>
        <th>Total Income</th>
      </tr>
      <?php
      require 'connection.php';
$sql= "SELECT SUM(total_cost) FROM shoppingcart";
$result=$conn->query($sql);
if($result-> num_rows>0){
  while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["SUM(total_cost)"]."</td></tr>";
  }
}
else{
  echo"0 result";
}

       ?>
    </table>
  </div>

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

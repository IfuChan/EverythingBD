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


<h2>List of Customers</h2>



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
        <th>Name</th>
        <th>Email</th>
      </tr>
      <?php
      require 'connection.php';
$sql= "SELECT Full_name,email FROM customer";
$result=$conn->query($sql);
if($result-> num_rows>0){
  while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["Full_name"]."</td><td>".$row["email"]."</td></tr>";
  }
}

else{
  echo"0 result";
}
?>
</table>
<h2>List of Admins</h2>
    <style>
    table {
      margin-left: auto;
      margin-right: auto;
  border-spacing: 15px;
}
</style>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
      <?php
require 'connection.php';
$sql2= "SELECT Full_name,email FROM admin";
$result2=$conn->query($sql2);
if($result2-> num_rows>0){
  while($row2=$result2->fetch_assoc()){
    echo "<tr><td>".$row2["Full_name"]."</td><td>".$row2["email"]."</td></tr>";
  }
}
else{
  echo"0 result";
}

       ?>
    </table>

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

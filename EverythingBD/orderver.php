<img src="Images/LOGO.png" alt="everythingbd">
<br>
<br>

<?php

require "connection.php";
$errors = array();

session_start();

$email = "";
$password = "";
$prod_id = 0;


if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['prod_id']) && isset($_POST['order_val'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $prod_id = $_POST['prod_id'];
  $order_val = $_POST['order_val'] ;
}

    $sql = "SELECT * FROM customer WHERE Email = '$email'";
              $result = mysqli_query($conn, $sql);
              $row= mysqli_fetch_assoc($result);

              $cus_id = $row['Customer_id'];
              $cus_name = $row['Full_name'];
            
    $sql2 = "SELECT * FROM Product WHERE Product_id = '$prod_id'";
              $result2 = mysqli_query($conn, $sql2);
              $row2= mysqli_fetch_assoc($result2);

              $prod_name = $row2['Product_name'];



  if (count($errors) == 0) {
  	$query = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
        echo "<script>
        alert('Order Confirmed!');
        window.location.href='index.php';
        </script>";



        $query = "INSERT INTO ordernum (Customer_id,product_id,Customer_name,Product_name,Order_Ammount)
        VALUES('$cus_id', '$prod_id', '$cus_name', '$prod_name', '$order_val')";
        mysqli_query($conn, $query);
    }
  	else {
      echo "Oops! Wrong email or password!";
  		array_push($errors, "Oops! Wrong email or password!");
  	}
}
?>

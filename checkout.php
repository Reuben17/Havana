<!DOCTYPE html>
<html>
 <head>
 <title>Check Out</title>
 <link rel="stylesheet" type="text/css" href="havanaCSS.php">
 </head>
<body>
<div class="div1">
<ul>
  <li><a href="havana.php">HOME</a></li>
  <li><a href="news.php">NEWS</a></li>
  <li><a href="#contact">CONTACT</a></li>
  <li><a href="about.php">ABOUT</a></li>
  <li><a href="login.php">LOG IN</a></li>
  <li><a href="signUp.php">SIGN UP</a></li>
</ul> 
</div>


<?php 
require_once('connect.php');
$link = connect();
session_start();
$_SESSION["username"] = $_POST["username"];
$username  = $_SESSION["username"];
$sql1 = "SELECT * FROM tblorderdetails WHERE username = '$username' AND status = 'pending'";
$result1 =mysqli_query($link,$sql1);

if (mysqli_num_rows($result1) > 0) {
?>
  <table>
  
  <thead>
    <th>Order Number</th>
    <th>User Name</th>
    <th>Food Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
  </thead>
<?php
$i=0;
  while($row = mysqli_fetch_array($result1)) {
    ?>
  <td><?php echo $row["order_no"]; ;?></td>
    <td><?php echo $row["username"]; ;?></td>
   <td><?php echo $row["food_name"]; ;?></td>
  <td><?php echo $row["food_price"]; ;?></td>
  <td><?php echo $row["quantity"]; ;?></td>
   <td><?php echo ($row["food_price"]*$row["quantity"]); ;?></td>
</tr>
<?php
$i++;
}
}
?>
 </table>


<form action = "updateOrder.php" method="post">
<br>    
<label for="orderNumber">Change Order? Enter Order Number:</label>
<br>
<input type="text" name="orderNumber" id="orderNumber">
<input type="submit" name="updateOrder" value="submit" id="updateOrder">
</form>


<form action = "process_deleteOrder.php" method="post">
<br>    
<label for="orderNo">Delete Order? Enter Order Number:</label>
<br>
<input type="text" name="orderNo" id="orderNo">
<input type="submit" name="delete" value="submit" id="submit">
<br>
</form>

 <form action = "process_checkOut.php" method="post">
<br>
<input type="submit" name="checkout" value="checkout">

<div class="div6" id="contact">
<p>Imara Daima,Embakasi</p> 
<p>+254729504432</p>
<p>Havana@gmail.com</p>
<p>P.O.BOX 21456-88287</p>
</div>


</body>
</html>
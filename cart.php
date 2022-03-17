<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
<title>Shopping Cart</title>
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
require_once("connect.php");
$link = connect();
session_start();
$_SESSION["username"] = $_POST["username"];
$username  = $_SESSION["username"];
$food_name = $_POST["food_name"];
$quantity  = $_POST["quantity"];

$sql1 ="INSERT INTO tblorderdetails (customer_id,username, food_name, food_price, quantity, status)
VALUES(
(SELECT id FROM tbluserdetails WHERE username ='$username'),
(SELECT username FROM tbluserdetails WHERE username ='$username'),
'$food_name',
(SELECT food_price FROM tblfooddetails WHERE food_name = '$food_name'),
'$quantity',
'pending')";

echo setData($sql1);

$sql2 = "SELECT * FROM tblorderdetails WHERE username = '$username' AND status = 'pending'";

$result2 =mysqli_query($link,$sql2);

if (mysqli_num_rows($result2) > 0) {
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
  while($row = mysqli_fetch_array($result2)) {
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

<form action = "order.php" method="post">
<br>
<input type="submit" name="shopping" value="Continue Shopping">
<br>
</form>

<button class="buttons" onclick="window.location.href='havana.php';" id="finishShopping">Finish shopping</button>
<div class="div6" id="contact">
<p>Imara Daima,Embakasi</p> 
<p>+254729504432</p>
<p>Havana@gmail.com</p>
<p>P.O.BOX 21456-88287</p>
</div>

</body>
</form>
</html>
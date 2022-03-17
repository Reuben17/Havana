 <?php

include_once 'connect.php';
$link = connect();
$sql2 = "SELECT food_name FROM tblfooddetails";
$result2 =mysqli_query($link,$sql2);

if (isset($_POST["updateOrder"])){
session_start();
$_SESSION["orderNumber"] = $_POST["orderNumber"];
$orderNumber = $_SESSION["orderNumber"];
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
<title>Update Order</title>
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

<div class = "divloginandsignup">
<div class = "divsignup" style="width:500px; margin:0 auto;">
<form action = "process_updateOrder.php" method="post">
<br>	
<label for="food_name">Food Name:</label>
<br>
  <input list="food_name" name="food_name">
  <datalist id="food_name">
  	<?php
$i=0;
while($row = mysqli_fetch_array($result2)) {
?>
<tr>
  <option value="<?php echo $row["food_name"]; ?>"> 
</tr>
<?php
$i++;
}
?>
</datalist>

<br>
<label for="quantity">Quantity:</label>
<br>
<input type="text" name="quantity" id="quantity">
<br>
<input type="reset" name="message" value="reset">
<input type="submit" name="update" value="Update Order" id="update">
</div>
</div>
<div class="div6" id="contact">
<p>Imara Daima,Embakasi</p> 
<p>+254729504432</p>
<p>Havana@gmail.com</p>
<p>P.O.BOX 21456-88287</p>
</div>
</body>
</html>
 <?php
require_once('connect.php');
$link = connect();
$sql1 = "SELECT username FROM tbluserdetails WHERE user_type ='Customer'";
$result1 =mysqli_query($link,$sql1);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
<title>Order Food</title>
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
<form action = "checkout.php" method="post">
<br>	
<label for="username">Username:</label>
<br>
  <input list="username" name="username">
  <datalist id="username">
  	<?php
$i=0;
while($row = mysqli_fetch_array($result1)) {
?>
<tr>
  <option value="<?php echo $row["username"]; ?>"> 
</tr>
<?php
$i++;
}
?>
</datalist>

<br>
<br>
<input type="reset" name="message" value="reset">
<input type="submit" name="proceedToCheckout" value="Proceed to Checkout" id="cart">
</form>
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
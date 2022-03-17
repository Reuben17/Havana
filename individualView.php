<?php

require_once('connect.php');
$link = connect();
$sql = "SELECT * FROM tbluserdetails";
$result =mysqli_query($link,$sql);
$test = getData($sql);

?>
<!DOCTYPE html>
<html>
 <head>
 <title>View User Details</title>
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

<p class="username"><?php session_start();$username = $_SESSION["username"];echo "Welcome ".$_SESSION["username"];?></p>
<?php 
echo "Account Details";
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <thead>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Email</th>
    <th>User Name</th>
    <th>Date of Birth</th>
    <th>Gender</th>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result) ) {
if ($row["username"] == $_SESSION["username"]){
?>
<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["second_name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["date_of_birth"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
</tr>
<?php
$i++;
}
}
?>
</table>
<br>
 <?php
echo "Purchase History";
}
else{
    echo "No result found";
}
?>

<?php
$sql2 = "SELECT * FROM tblorderdetails WHERE username = '$username' AND status = 'complete'";

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


<div class="div6" id="contact">
<p>Imara Daima,Embakasi</p> 
<p>+254729504432</p>
<p>Havana@gmail.com</p>
<p>P.O.BOX 21456-88287</p>
</div>


</body>
</html>
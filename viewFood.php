 <?php

require_once('connect.php');
$link = connect();
$sql = "SELECT * FROM tblfooddetails";
$result =mysqli_query($link,$sql);
$test = getData($sql);

?>

<!DOCTYPE html>
<html>
 <head>
 <title>View Food Items</title>
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

<p class="username"><?php session_start();echo "Welcome ".$_SESSION["username"];?></p>
<?php 
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <thead>
     <th>ID</th>
    <th>Name</th>
    <th id="image_header">Image</th>
    <th id="price_header">Price</th>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
   <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["food_name"]; ?></td>
    <td> <img src="<?php echo $row["imagepathname"]; ?>" height = "100px" width = "100%" style="display:block;" ></td>
    <td><?php echo $row["food_price"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
<form action = "updateFood.php" method="post">
<br>    
<label for="id">Change Food Item? Enter ID:</label>
<br>
<input type="text" name="id" id="id">
<input type="submit" name="update" value="submit" id="submit">
</form>
<form action = "process_deleteFood.php" method="post">
<br>    
<label for="id">Delete Food Item? Enter ID:</label>
<br>
<input type="text" name="id" id="id">
<input type="submit" name="delete" value="submit" id="submit">
</form>
 </body>

 <div class="div6" id="contact">
<p>Imara Daima,Embakasi</p> 
<p>+254729504432</p>
<p>Havana@gmail.com</p>
<p>P.O.BOX 21456-88287</p>
</div>

</html>
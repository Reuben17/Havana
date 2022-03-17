<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
<title>Add food items into Havana</title>
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
<form action = "process_upload.php" method="post" enctype="multipart/form-data">
<br>	
<label for="food_name">Food Name:</label>
<br>
<input type="text" name="food_name" id="food_name">
<br>	
<label for="food_image">Food Image:</label>
<br>
<input type="file" name="food_image" id="food_image" required="true">
<br>
<label for="food_price">Food Price:</label>
<br>
<input type="text" name="food_price" id="food_price">
<br>	
<input type="reset" name="message" value="reset">
<input type="submit" name="addFood" value="add food" id="addFood">
<br>
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
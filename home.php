<?php include ('config.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<h1>Welcome Back, Amirah.</h1>

	<div class="btn-group-vertical">
    	<input type=button onClick="location.href='calculate.html'" href="<?php echo ROOT_URL; ?>" class="btn" value="CALCULATE BMI">
    	<input type=button onClick="location.href='progress_update.html'" href="<?php echo ROOT_URL; ?>" class="btn" value="PERFORMANCE">
    	<input type=button onClick="location.href='advice.php'" href="<?php echo ROOT_URL; ?>" class="btn" value="NUTRITIONAL ADVICE">
	</div>

<?php
echo 'This is Home Page';
?>
</body>
</html>

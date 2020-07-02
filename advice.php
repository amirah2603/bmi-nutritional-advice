<?php include ('db.php')?>
<?php include ('config.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Nutririonl Advice</title>
	<link rel="stylesheet" type="text/css" href="advice.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

 	<div class="container my-container">
		<div class="row my-row">
			<div class="col my-col">
				<div class="centered">
					<img  class= "image" src="https://deenamik.com/wp-content/uploads/2018/11/tip-2-1.jpg" alt="Image">
  					<div class="advice-group-vertical">
    					<input type=button onClick=location.href="<?php echo ROOT_URL; ?>index" class="advice" value="HOME">
					</div>
				</div>
			</div>
  		<div class="col my-col">
  			<div class="centered">
  				<?php
				$host        = "host=ec2-34-197-188-147.compute-1.amazonaws.com";
   				$port        = "port=5432";
   				$dbname      = "dbname = danoh2mjnt7j0s";
   				$credentials = "user = xaiwgzulsgxtkb password=fc7a410c7df6fb94b409aa0d78e3f2fb15440e42f75b694fbb2a966e448ad8d6";
   				$db = pg_connect( "$host $port $dbname $credentials"  );
  				if(!$db) {
      					echo "Error : Unable to open database\n";
   				} else {
      					echo "Opened database successfully\n";
   				}
				$sql = "SELECT user_id, user_bmi, created_at FROM bmi WHERE timestamp = (SELECT MAX(created_at) FROM bmi);";
// 				$result = $pdo->prepare($sql);
				$ret = pg_query($db, $sql);
   				if(!$ret) {
      					echo pg_last_error($db);
      				exit;
  				 } 
				$result = pg_fetch_row($ret)
// 				$result = $conn-> query($sql);
// 				$result->execute();
// 				$result = $result-> fetch_assoc(); 
// 				$details = $result->fetch();
				$BMI = .$row[4] .;
// 				$BMI = $result["user_bmi"];
//  				$BMI = 19;
				echo "<h4>Your BMI is ".$BMI;

				if ($BMI < 18.5){
					echo ". You are Underweight.";
					echo "</h4>";
					echo "</h2>";
					echo "<ol>";
					echo "<li>Eat more frequently. Eat 5-6 smaller meals during the day rather than 2-3 large meals.</li>";
					echo "<li>Choose high calories foods. this is temmporary until healthy weight is achieved.</li>";
					echo "<li>Exercise regularly. At least once a week. </li>";
					echo "<li>Increase intake of food with high protein in every meal. </li>";
					echo "<li>Eat more vegetables and fruits.</li>";
					echo "<li>Increase intake of Whole Grain/Fiber.</li>";
					echo "<li>Eat according to Malaysian Healthy Plate method every meals: </li>";
					echo "<ul>";
					echo "<li>1/3 portion of Carbohydrates.</li>";
					echo "<li>1/3 portion of Protein.</li>";
					echo "<li>1/3 portion of WHole Grain/Fiber.</li>";
					echo "</ul>";
					echo "</ol>";
				}
				else if(($BMI > 18.5) & ($BMI < 24.9)){
					echo ". You are Normal.";
					echo "</h4>";
					echo "</h2>";
					echo "<ol>";
					echo "<li>Increase intake of Whole Grain/Fiber.</li>";
					echo "<li>Keep your eating patter consistent.</li>";
					echo "<li>Get daily physical activity.</li>";
					echo "<li>Monitor your diet and activity. Keeping a food and physical activity journal can help you track your progress and spot trends.</li>";
					echo "<li>Monitor your weight. Check your weight regularly.</li>";
					echo "<li>Eat more vegetables and fruits</li>";
					echo "</ol>";
				}
				else if(($BMI > 25) & ($BMI < 29.9)){
					echo ". You are Overweight.";
					echo "</h4>";
					echo "</h2>";
					echo "<ol>";
					echo "<li>Eat according to meal time. Avoid doing anything else while eating to help you aware with the amount of food you consume.</li>";
					echo "<li>Reduce intake of fats. Take at most 1 tablespoon of fat in one meal.</li>";
					echo "<li>Limit intake of sugar-sweetened drinks. Take at most 1 glass in one day.</li>";
					echo "<li>Choose food high in fiber. Take vegetable at least 3 times every day, fruits at least 2 times every day and whole grain food at least once every day.</li>";
					echo "<li>Limit intake of complex carbohydrates such as rice and noodle. Take at most 200 gram in one meal.</li>";
					echo "<li>Moitor weight loss which at most 2 kg per month to avoid abrupt weight loss that can cause other illness.</li>";
					echo "</ol>";
				}
				else{
					echo ". You are Obese.";
					echo "</h4>";
					echo "</h2>";
					echo "<ol>";
					echo "<li>Eat according to meal time. Avoid doing anything else while eating to help you aware with the amount of food you consume.</li>";
					echo "<li>Reduce intake of fats. Take at most 1 tablespoon of fat in one meal.</li>";
					echo "<li>Limit intake of sugar-sweetened drinks. Take at most 1 glass in one day.</li>";
					echo "<li>Choose food high in fiber. Take vegetable at least 3 times every day, fruits at least 2 times every day and whole grain food at least once every day.</li>";
					echo "<li>Limit intake of complex carbohydrates such as rice and noodle. Take at most 200 gram in one meal.</li>";
					echo "<li>Moitor weight loss which at most 2 kg per month to avoid abrupt weight loss that can cause other illness.</li>";
					echo "</ol>";
				}

				echo "</h2>";
   				pg_close($db);
// 				$conn-> close(); 
				?>
  			</div>
		
		</div>
	</div> 
</div>

</body>
</html>

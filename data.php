<?php include ('db.php')?>
<?php include ('config.php')?>
<?php
/**
 * filename: data.php
 * description: this will return the score of the teams.
 */

//query to get data from the table
// $query = sprintf("SELECT  created_at FROM bmi ORDER BY created_at");
$sql = 'SELECT user_id, user_bmi FROM bmi ORDER BY created_at';

//execute query
// $result = $mysqli->query($query);
$stmt = $pdo->prepare($sql);
//loop through the returned data
$data = array();
foreach ($stmt as $row) {
  $data[] = $row;
}

?>

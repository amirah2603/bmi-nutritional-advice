<?php
/**
 * filename: data.php
 * description: this will return the score of the teams.
 */

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'ec2-34-197-188-147.compute-1.amazonaws.com');
define('DB_USERNAME', 'xaiwgzulsgxtkb');
define('DB_PASSWORD', 'fc7a410c7df6fb94b409aa0d78e3f2fb15440e42f75b694fbb2a966e448ad8d6');
define('DB_NAME', 'danoh2mjnt7j0s');

//get connection
$db_connection = pg_connect("host=DB_HOST dbname=DB_NAME user=DB_USERNAME password=DB_PASSWORD");

if(!$db_connection){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
// $query = sprintf("SELECT  created_at FROM bmi ORDER BY created_at");
$query = pg_query($db_connection, "SELECT user_id, user_bmi FROM bmi ORDER BY created_at");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$db_connection->close();

//now print the data
print json_encode($data);

?>

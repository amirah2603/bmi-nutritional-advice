<?php include ('db.php')?>
<?php include ('config.php')?>
<?php
/**
 * filename: data.php
 * description: this will return the score of the teams.
 */

//setting header to json
header('Content-Type: application/json');

$sql = 'SELECT * FROM bmi ORDER BY user_id DESC';
$stmt = $pdo->prepare($sql);
$data = array();
$users = $stmt->fetchAll();
foreach ($users as $user)
{
    data[] = $user;
}
//loop through the returned data

// foreach ($result as $row) {
//   $data[] = $row;
// }

//free memory associated with result

//now print the data
print json_encode($data);

?>

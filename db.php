<?php

// $db = parse_url(getenv("postgres://xaiwgzulsgxtkb:fc7a410c7df6fb94b409aa0d78e3f2fb15440e42f75b694fbb2a966e448ad8d6@ec2-34-197-188-147.compute-1.amazonaws.com:5432/danoh2mjnt7j0"));

// $pdo = new PDO("pgsql:" . sprintf(
//     "host=%s;port=%s;user=%s;password=%s;dbname=%s",
//     $db["ec2-34-197-188-147.compute-1.amazonaws.com"],
//     $db["5432"],
//     $db["xaiwgzulsgxtkb"],
//     $db["fc7a410c7df6fb94b409aa0d78e3f2fb15440e42f75b694fbb2a966e448ad8d6"],
//     ltrim($db["composer.json"], "/")
// ));


$host = "ec2-34-197-188-147.compute-1.amazonaws.com";
$user = "xaiwgzulsgxtkb";
$password = "fc7a410c7df6fb94b409aa0d78e3f2fb15440e42f75b694fbb2a966e448ad8d6";
$dbname = "danoh2mjnt7j0s";
$port = "5432";

try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";

  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
  ?>

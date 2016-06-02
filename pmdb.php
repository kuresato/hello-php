<?php
$host = "192.168.1.204";
$dsn = "mysql:dbname=sampledb;host=".$host;
$user = "user1";
$pass = "user1";

try {
  $dbh = new PDO($dsn, $user, $pass);
  $sql = "select * from sample";
  foreach($dbh->query($sql) as $row) {
    print($row['name']);
    print(',');
    print($row['amount']);
    print('<br>');
  }
} catch (PDOException $e) {
  print('Error:'.$e->getMessage());
  die();
}
$dbh = null;
?>


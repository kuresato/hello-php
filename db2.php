<?php
$host = getenv('MYSQL_SERVICE_HOST');
$dsn = "mysql:dbname=sampledb;host=".$host;
$user = "user1";
$pass = "user1";

try {
  $dbh = new PDO($dsn, $user, $pass);
  $sql = "select * from sample";
  foreach($dbh->query($sql) as $row) {
    print($row['f1']);
    print(',');
    print($row['f2']);
    print('<br>');
  }
} catch (PDOException $e) {
  print('Error:'.$e->getMessage());
  die();
}
$dbh = null;
?>


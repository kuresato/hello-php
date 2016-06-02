<?php
$host = "192.168.1.212";
$dsn = "mysql:dbname=redmine;host=".$host;
$user = "user1";
$pass = "user1";

try {
  $dbh = new PDO($dsn, $user, $pass);
  $sql = "select * from users";
  foreach($dbh->query($sql) as $row) {
    print($row['id']);
    print(',');
    print($row['lastname']);
    print('<br>');
  }
} catch (PDOException $e) {
  print('Error:'.$e->getMessage());
  die();
}
$dbh = null;
?>


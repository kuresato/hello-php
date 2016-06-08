<?php
header("Content-Type: application/json; charset=UTF-8");
header("X-Content-Type-Option: nosniff");
//$pdo = new PDO('sqlite:/tmp/test.db');
$pdo = new PDO('mysql:dbname=sampledb;host='.getenv('MYSQL_SERVICE_HOST'), 'user1', 'user1');
$st = $pdo->query("SELECT * FROM sample");
echo json_encode($st->fetchAll(PDO::FETCH_ASSOC));
switch($_SERVER['REQUEST_METHOD']){
  case 'GET':
    $st = $pdo->query("SELECT * FROM sample");
    echo json_encode($st->fetchAll(PDO::FETCH_ASSOC));
    break;
  case 'POST':
    $in = json_decode(file_get_contents('php://input'), true);
    $st = $pdo->prepare("INSERT INTO sample(key,value) VALUES(:key,:value)");
    $st->execute($in);
    break;
  case 'DELETE':
    $st = $pdo->prepare("DELETE FROM sample WHERE key=?");
    $st->execute($_GET['key']);
    break;
}
?>

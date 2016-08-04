<?php
<?php
header("Content-Type: application/json; charset=UTF-8");
header("X-Content-Type-Option: nosniff");

//$pdo = new PDO('sqlite:/tmp/test.db');
//$pdo = new PDO('mysql:dbname=sampledb;host='.getenv('MYSQL_SERVICE_HOST'), 'user1', 'user1');

for ($i = 0; $i < 10; $i++) {
    $sql = "INSERT INTO sample(f1, f2) VALUES(?, ?)";
    print  "<p>$sql</p>";
    //$st = $pdo->prepare($sql);
    //$st->execute(i, i);
}
?>

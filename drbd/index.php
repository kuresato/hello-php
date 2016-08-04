<?php
header("Content-Type: application/json; charset=UTF-8");
header("X-Content-Type-Option: nosniff");

$DB_HOST=getenv('MYSQL_SERVICE_HOST');
$DB_USER='user1';
$DB_PASS='user1';

print "<html><body>\n";
print "<div>$DB_HOST</div>\n";

$file = fopen("/data/test.txt", "a+");
flock($file, LOCK_EX);

$pdo = new PDO('mysql:dbname=sampledb;host='.$DB_HOST, $DB_USER, $DB_PASS);

for ($i = 0; $i < 300; $i++) {
    print  "$i\n";
    fputs($file, "$i\n");

    $sql = "INSERT INTO sample(f1, f2) VALUES(:F1, :F2)";
    $st = $pdo->prepare($sql);
    $st->execute(array(':F1'=>$i, ':F2'=>rand()));
    sleep(1);
}

flock($file, LOCK_UN);

print "</body></html>\n";
?>

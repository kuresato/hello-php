<?php
header("Content-Type: text/html; charset=UTF-8");
header("X-Content-Type-Option: nosniff");

$DB_HOST=getenv('MYSQL_SERVICE_HOST');
$DB_USER='user1';
$DB_PASS='user1';

print "<html><body>\n";
print "<div>$DB_HOST</div>\n";



for ($i = 0; $i < 300; $i++) {
    print  "$i\n";

    $file = fopen("/data/test.txt", "a+");
    print "<p>file: $file</p>\n";
    if(!$file)  {
        print "file is FALSE\n";
        break;
    }
    flock($file, LOCK_EX);
    fputs($file, "$i\n");
    flock($file, LOCK_UN);
    fclose($file);

    $pdo = new PDO('mysql:dbname=sampledb;host='.$DB_HOST, $DB_USER, $DB_PASS);
    $sql = "INSERT INTO sample(f1, f2) VALUES(:F1, :F2)";
    $st = $pdo->prepare($sql);
    $st->execute(array(':F1'=>$i, ':F2'=>rand()));
    $pdo = null;

    flush();
    sleep(1);
}

print "</body></html>\n";
?>

<?php
echo "<pre>";
echo getenv('MYSQL_SERVICE_HOST');
echo "</pre>";
$link = mysql_connect(getenv('MYSQL_SERVICE_HOST'), 'user1', 'user1');
$db_selected = mysql_select_db('sampledb', $link);
$result = mysql_query('SELECT * FROM sample');
while ($row = mysql_fetch_assoc($result)) {
    print($row['f1']);
    print($row['f2']);
}
mysql_close($link)
?>


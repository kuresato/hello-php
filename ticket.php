<html>
<body>
<pre>
<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://192.168.1.212/redmine/issues.json?key=532ec91ea8a3e113b5c94510b0ecd229e5be48a3');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($curl);
$header = curl_getinfo($curl);
$code = $header['http_code'];
print("code: $code\n\n");
print($res);
?>
</pre>
</body>
</html>


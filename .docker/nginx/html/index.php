<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Title</title>
</head>

<body>
    Hello World!!

<?php
$mysql = new mysqli($_ENV['DATABASE_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
if (!$mysql) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$sql = "INSERT INTO hoges(created_at) VALUES('" . date('Y-m-d H:i:s') . "')";
$result = $mysql->query($sql);
$sql = "SELECT * FROM hoges ORDER BY hoge_id desc limit 1";
$result = $mysql->query($sql)->fetch_row();
echo '<pre class="log">';
var_dump($result);
echo '</pre>';
mysqli_close($mysql);

phpinfo();
?>

</body>
</html>
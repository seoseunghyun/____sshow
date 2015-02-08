<?php
$set = explode(',', $_POST['set']);

foreach($set as $v){
	$_value = explode(':', $v);
	$value[$_value[0]] = $_value[1];
}

$link = mysql_connect($value['hostname'], $value['username'], $value['password']);

if (!$link) {
    die($link.'Could not connect: ' . mysql_error());
}

echo '1';

mysql_close($link);


?>
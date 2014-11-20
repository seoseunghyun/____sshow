<?php
	$set = explode(',', $_POST['set']);
	foreach($set as $v){
		$_value = explode(':', $v);
		$value[$_value[0]] = $_value[1];
	}
	print_r($value);


$link = mysql_connect($value['hostname'], $value['username'], $value['password']);
if (!$link) {
    die($link.'Could not connect: ' . mysql_error());
}
echo $link.'Connected successfully';
mysql_close($link);


?>
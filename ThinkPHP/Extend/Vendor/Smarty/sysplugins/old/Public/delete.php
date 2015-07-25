<?php

mysql_connect('localhost','root','zkeys');
mysql_select_db('tp');

$sql = 'delete from myphoto_image';
$result = mysql_query($sql);
var_dump($result);
?>
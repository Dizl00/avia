<?php
	
	//начальные данные 
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_base = 'aviato';

// соединяемся с сервиром бд

$link = mysqli_connect($host, $user, $password, $db_base);
if ($link->connect_errno) exit ('ошибка соединения с бд');
$link->set_charset('utf8');
?>
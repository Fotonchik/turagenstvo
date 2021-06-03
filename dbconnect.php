<?php
$mysqli = new mysqli('localhost', 'mysql', 'mysql', 'YP');
// Проверяем, прошло ли подключение без ошибок
if ($mysqli->connect_error){
die(' Connect Error ('. $mysqli->connect_error.')'.$mysqli->connect_error);}
?>
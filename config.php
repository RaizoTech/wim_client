<?php

$server = 'localhost';
$user = 'u653730158_wimjay';
$pass_ = 'Wimjay#123';
$db_name = 'u653730158_wim';

$connection = mysqli_connect(server, user, pass, db);
if(!$connection){
	die("Connection Error".mysqli_connect_error());
}

?>

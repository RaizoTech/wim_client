<?php

define('server', 'localhost');
define('user','root');
define('pass','');
define('db','wim');

$connection = mysqli_connect(server, user, pass, db);
if(!$connection){
	die("Connection Error".mysqli_connect_error());
}

?>
<?php

require_once 'config.php';

// Macbeth Images
$sql = "SELECT * FROM macbeth_models";
$result = mysqli_query($connection, $sql);

// TVC Images
$tvc_query = "SELECT * FROM tvc";
$result1 = mysqli_query($connection, $tvc_query);

?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'header.php' ?></head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
	<div class="ts-page-wrapper" id="page-top">
		<!--NAVIGATION ******************************************************************************************-->
		<?php require 'hero.php' ?>
		<?php require 'navbar.php' ?>
		<?php require 'content.php' ?>
		<?php require 'footer.php' ?>
	</div>
	<?php require 'modals.php' ?>
	<?php require 'script.php' ?>
</body>
</html>
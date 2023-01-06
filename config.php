<?php
error_reporting(0);
$db=mysqli_connect('localhost','root','','koya');

if (!$db) {
	mysqli_connect_error($db);
	echo "failed Connect To Database";
}

?>
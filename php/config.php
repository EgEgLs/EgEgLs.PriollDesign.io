<?php
$dblocation = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbbase = "bd2";

$dbcon = @mysqli_connect($dblocation, $dbuser, $dbpassword);
if (!$dbcon) {
	exit("<P>Сервер не доступен</P>");
}

if (!mysqli_select_db($dbcon, $dbbase)) {
	exit("<P>База не доступна</P>");
}


?>


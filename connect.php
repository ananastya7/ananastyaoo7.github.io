<?php
$db = mysql_connect("localhost", "root","");
mysql_select_db("pravpitBase",$db);
mysql_query("SET NAMES cp1251");
if ($mysql_connect_error) {
	die ('Ошибка подключения ('. $mydql_connect_errno . ')'
	. $mysql_connect_error);
}

if (mysqli_connect_error()) {
	die ('Ошибка подключения  (' . $mydql_connect_errno() . ')'
	. mysqli_connect_error());
}

$user_name = $_SESSION['user_name'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>
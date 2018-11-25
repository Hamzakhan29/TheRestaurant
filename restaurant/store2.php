<?php

mysql_connect('localhost','root','') or die("could not connect to the database");
$db_name = "restaurant";
$tbl_name = "takeaway";
	mysql_select_db("$db_name")or die("cannot select DB");
$name = $_POST['name'];
$time = $_POST['contact'];
$table = $_POST['order'];


$sql = "INSERT INTO $tbl_name (`id`, `name`, `contact`,`order`) VALUES (NULL,'$name', '$contact', '$order')";
		mysql_query($sql) or die(mysql_error());
		



?>
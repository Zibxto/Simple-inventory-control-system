<?php

function query($sql) {

	global $conn;
	return mysqli_query($conn, $sql);
}

function confirm($result) {
	global $conn;
	if (!$result) {
		die("Query failed ".mysqli_error($conn));
	}
}

function escape_string($string) {
	global $conn;
	return mysqli_real_escape_string($conn, $string);
}

function fetch_array($result) {
	return mysqli_fetch_array($result);
}

?>
<?php
	$connect = mysqli_connect('localhost','pemrogramaninet','password','db_perpusuniga');

	if(mysqli_connect_error()){
		printf("Connect failed", mysqli_connect_error());
		exit();
	}
?>
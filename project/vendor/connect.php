<?php

	$connect = mysqli_connect( host:('localhost'), user:('root'), password: (' ') , database: ('practice'));
	if (!$connect) {
		die('Error connect to DataBase');
	}
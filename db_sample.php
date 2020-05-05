<?php

	require('db_connect.php');

	# SELECT * FROM tbl_name
	$db->get('tbl_name');

	# INSERT INTO tbl_name (keys) VALUES (values)
	$data = array(
		'key' => 'value',
		'key2' => 'value2'
	);
	$db->insert('tbl_name', $data);

	# https://codeigniter.com/user_guide/database/query_builder.html 
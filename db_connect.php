<?php

	# CodeIgniter Secure Database Library
	# Curated by https://github.com/successful-fella

	# TODO: Require this file in your php files, add settings below and use $db variable

	$driver = "mysqli"; # Check ci_database/drives folder for list of drivers
	$username = "";
	$password = "";
	$host = "";
	$database_name = "";
	$development_mode = true; // false for production (no errors)

	if($development_mode) {
		error_reporting(-1);
		ini_set('display_errors', 1);
	} else {
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>=')) {
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		} else {
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	}


	# Here we go...
	define('BASEPATH', realpath(dirname(__FILE__)).'/');
	require_once('database/DB.php');
	function log_message() {}
	function show_error() {}
	$conn = "$driver://$username:$password@$host/$database_name";
	$db = DB($conn, true);

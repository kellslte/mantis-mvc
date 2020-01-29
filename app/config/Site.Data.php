<?php

session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => '127.0.0.1',
		'user' => '_YOUR_USER_',
		'password' => '_YOUR_PASS_',
		'db' => '_YOUR_DBNAME_'
	),
	'directory' => array(
		'approot' => dirname($_SERVER['SCRIPT_FILENAME']). '/',
		'urlroot' => 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REDIRECT_URL'],
		'sitename' => '_YOUR_SITENAME_'
	)
);

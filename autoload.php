<?php

	require_once 'lib/medoo.php';
	require_once 'lib/Telegram.php';
	require_once 'config/config.php';
	require_once 'lib/WebHookGet.php';
	require_once 'lib/Keyboard.php';
	require_once 'lib/jdf.php';
	require_once 'lib/Constant.php';
	
	$auth = new config();
	$telegram = new Telegram($auth->bot_id);
	$data = new webHookGet($telegram);
	$keyboard = new keyboard();
	$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => $auth->database_name,
    'server' => $auth->database_host,
    'username' => $auth->database_username,
    'password' => $auth->database_password,
    'charset' => 'utf8'
	]);
	$constants = new Constant($database, $data);
	
	$server_name=$auth->database_host;
	$db_name=$auth->database_name;
	$dsn="mysql:host=$server_name;dbname=$db_name;charset=utf8";
	try
	{
		$connect = new PDO($dsn,$auth->database_username,$auth->database_password);
		return $connect;
	}
	catch(PDOException $error)
	{
		echo "Error in connect to server: ".$error -> __toString();
		exit();
	}

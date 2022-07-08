<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../autoload.php';
	if(in_array($data->user_id, $auth->admin_list))
	{
		$text = $database->count('users');
		
		$telegram->sendMessage([
		'chat_id' => $data->user_id,
		'parse_mode' => 'Markdown',
		'text' => 'بخش مورد نظر خود را انتخاب نمایید:' ,
		'reply_markup' => $keyboard->key_start_admin()
		]);
	}
	else
	{
		$telegram->sendMessage([
		'chat_id' => $data->user_id,
		'text' =>  "متاسفانه شما اجازه دسترسی به این بخش را ندارید.",
		"parse_mode" =>"HTML",
		'reply_markup' => $keyboard->key_start()
		]);
	}

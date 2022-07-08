<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../autoload.php';
	
	$database->update("users", [ 'last_query' => null ], [ 'id' => $data->user_id ]);
	
	if(in_array($data->user_id, $auth->admin_list))
	{
		$telegram->sendMessage([
		'chat_id' => $data->user_id,
		'text' => "برای پاسخ به پیام های دریافتی کاربران می بایست پیام مورد نظر را ریپلای کرده سپس پاسخ  مورد نظر را ارسال کنید.",
		'reply_markup' => $keyboard->key_start_admin()
		]);
	}
	else
	{
		$telegram->sendMessage([
		'chat_id' => $data->user_id,
		'text' => "برای توقف ربات می توانید از دستور /stop استفاده نمایید.",
		'reply_markup' => $keyboard->key_start()
		]);
	}
	

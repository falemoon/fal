<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../autoload.php';
	
	if ( $constants->last_message === null ) 
	{
		$database->update("users", [ 'last_query' => 'contact_us' ], [ 'id' => $data->user_id ]);
		$content = [
        'chat_id' => $data->chat_id,
        'text' => "اگر پیشنهاد یا انتقادی برای بات دارید و یا مشکلی در کار بات مشاهده کردید ممنون می‌شیم بهمون اطلاع بدین:",
        'reply_markup' => $keyboard->go_back()
		];
		$telegram->sendMessage($content);
	}
	elseif ( $constants->last_message == 'contact_us' ) 
	{
		$database->update("users", [ 'last_query' => null ], [ 'id' => $data->user_id ]);
		
		if ( $data->text == $keyboard->buttons['go_back'] ) 
		{
			if(in_array($data->user_id, $auth->admin_list))
			{
				$telegram->sendMessage([
				'chat_id' => $data->user_id,
				'text' => "پیامی ارسال نشد. منوی اصلی:",
				'reply_markup' => $keyboard->key_start_admin()
				]);
			}
			else
			{
				$telegram->sendMessage([
				'chat_id' => $data->user_id,
				'text' => "پیامی ارسال نشد. منوی اصلی:",
				'reply_markup' => $keyboard->key_start()
				]);
			}
		} 
		else 
		{
			$telegram->forwardMessage([
			'chat_id' => $auth->admin_list[0],
			'from_chat_id' => $data->user_id,
			'message_id' => $data->message_id,
			'text' => $data->text,
			'reply_markup' => $keyboard->key_start_admin()
			]);
			
			if(in_array($data->user_id, $auth->admin_list))
			{
				$telegram->sendMessage([
				'chat_id' => $data->user_id,
				'text' => "ممنون از شما. پیام شما باموفقیت برای تیم پشتیبانی ارسال شد.",
				'reply_markup' => $keyboard->key_start_admin()
				]);
			}
			else
			{
				$telegram->sendMessage([
				'chat_id' => $data->user_id,
				'text' => "ممنون از شما. پیام شما باموفقیت برای تیم پشتیبانی ارسال شد.",
				'reply_markup' => $keyboard->key_start()
				]);
			}
		}
	}
		

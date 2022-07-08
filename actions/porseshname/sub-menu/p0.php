<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
		$id = str_replace("/start ","",$data->text);
		$id = str_replace("nta","",$id);	
		
		if ($id != $data->chat_id && $database->has("users", ["id" => $id])) 
		{
			if($id!=null && !$database->has("porseshname", ["AND" => ["user_id" => $id,"answer_id" => $data->chat_id]]))
			{
				$account_id =$database->insert("porseshname", ["user_id" => $id,'answer_id' => $data->chat_id]);
				$database->update("users", ['p_id' =>  $account_id ], [ 'id' => $data->user_id ]);
			}
			
			$text = $database->select('users', ['name'], ['id' => $id]);
			
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'Markdown',
			'disable_web_page_preview' => 'true',
			'text' => "سلام دوست من 😍"."\n"."خیلی ازت ممنونم که واسه دوستت  ".$text[0]['name']." میخوای تست رو انجام بدی 🙏"."\n"."در پایان اگه خواستی لینک شخصی خودت رو هم میسازم برات تا بدونی  دوستات چقدر میشناسنت ؟ چه حسی بهت دارن و چی تو دلشون مونده که بهت بگن ؟ چه جنبه از شخصیتتو دوس دارن و ... ؟ 😍"."\n"."حالا برای انجام تست برای دوستت ".$text[0]['name']." روی شروع پرسشنامه کلیک کن 😬"."\n👉  ".$auth->CHANNEL_ID.", ".$auth->CHANNEL_ID."\n👉  ".$auth->CHANNEL_ID.", ".$auth->CHANNEL_ID,
			'reply_markup' => $keyboard->key_start_Porseshname() 
			]);
		}
		else
		{
			if ($id == $data->chat_id) 
			{
				$telegram->sendMessage([
				'chat_id' => $data->chat_id,
				'parse_mode' => 'Markdown',
				'disable_web_page_preview' => 'true',
				'text' => "دوست من ".$text[0]['name']."!\n"."خودت که نمیتونی راجع به خودت پرسشنامه رو پر کنی 😕"."\n"."لطفا لینکتو بین دوستات پخش کن تا اونا پرسشنامه رو برات پر کنند 😍"
				]);
			}
			else
			{
				$telegram->sendMessage([
				'chat_id' => $data->chat_id,
				'parse_mode' => 'Markdown',
				'disable_web_page_preview' => 'true',
				'text' => "لینک مورد استفاده معتبر نمی باشد."
				]);
			}
		}
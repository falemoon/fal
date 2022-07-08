<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__).'/../autoload.php';
	
	$txxt = file_get_contents('config/pmembers.txt');
	$pmembersid= explode("\n",$txxt);
	if (!in_array($data->chat_id,$pmembersid)) 
	{
		$aaddd = file_get_contents('config/pmembers.txt');
		$aaddd .= $data->chat_id."\n";
		file_put_contents('config/pmembers.txt',$aaddd);
	}
	
	if ($data->callback_query)
	{
		$telegram->answerCallbackQuery([
		'callback_query_id' => $data->callback_query_id,
		'show_alert' => false,
		'text'=>"عضویت شما در کانال تایید شد."
		]);
	}
	
	$database->update("users", ['status' => 1, 'last_query' => null, 'last_request' => null], ['id' => $data->user_id]);
	
	$id = str_replace("/start ","",$data->text);	
	
	if ($id != "" && is_numeric($id))
	{//invite
		if ($id != $data->chat_id && $constants->user('team_leader_id') == 0 && $database->has("users", ["id" => $id])) 
		{	
			$database->update("users", ['subgroups[+]' => 1], ['id' => $id]);
			$database->update("users", ['team_leader_id' => $id], ['id' => $data->user_id]);
			
			$text = $database->select('users', ['subgroups'], ['id' => $id]);
			
			if($id!=null && $text[0]['subgroups']>file_get_contents('config/subgroups.txt'))
			{
				$database->insert("subgroups", ["team_leader_id" => $id,'user_id' => $data->user_id]);
			}
			
			if($text[0]['subgroups']==file_get_contents('config/subgroups.txt'))
			{
				$telegram->sendMessage([
				'chat_id' => $id,
				'parse_mode' => 'Markdown',
				'disable_web_page_preview' => 'true',
				'text' => "دوست عزیز تبریک 🌹😍"."\n"."عضویت شما در ربات تکمیل شد و می توانید هم اکنون از امکانات ربات به صورت رایگان استفاده نمایید"
				]);
			}
			else
			{
				$telegram->sendMessage([
				'chat_id' => $id,
				'parse_mode' => 'Markdown',
				'disable_web_page_preview' => 'true',
				'text' => $data->first_name." عزیز تبریک 🌹😍"."\n"."کاربر جدیدی از طریق لینک شما وارد ربات شد."."\n"."شما تاکنون ".$text[0]['subgroups']." نفر رو به ربات دعوت کردید. 👌"
				]);
			}
		}
		else
		{
			if ($id == $data->chat_id) 
			{
				$telegram->sendMessage([
				'chat_id' => $data->chat_id,
				'parse_mode' => 'Markdown',
				'disable_web_page_preview' => 'true',
				'text' => "شما نمی توانید با لینک خودتان وارد ربات شوید."
				]);
			}
			else if (!$database->has("users", ["id" => $id])) 
			{
				$telegram->sendMessage([
				'chat_id' => $data->chat_id,
				'parse_mode' => 'Markdown',
				'disable_web_page_preview' => 'true',
				'text' => "لینک مورد استفاده معتبر نمی باشد."
				]);
			}
			else
			{
				$telegram->sendMessage([
				'chat_id' => $data->chat_id,
				'parse_mode' => 'Markdown',
				'disable_web_page_preview' => 'true',
				'text' => "شما قبلا توسط کاربر دیگری به ربات دعوت شده اید."
				]);
			}
		}
	}
	elseif (preg_match('/^(nta)(.*)/',$id))
	{//porseshname
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
			'text' => "سلام دوست من 😍"."\n"."خیلی ازت ممنونم که واسه دوستت  ".$text[0]['name']." میخوای تست رو انجام بدی 🙏"."\n"."در پایان اگه خواستی لینک شخصی خودت رو هم میسازم برات تا بدونی  دوستات چقدر میشناسنت ؟ چه حسی بهت دارن و چی تو دلشون مونده که بهت بگن ؟ چه جنبه از شخصیتتو دوس دارن و ... ؟ 😍"."\n"."حالا برای انجام تست برای دوستت ".$text[0]['name']." روی شروع پرسشنامه کلیک کن 😬",
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
	}
	else
	{//main menu
		$telegram->sendMessage([
		'chat_id' => $data->chat_id,
		'parse_mode' => 'Markdown',
		'disable_web_page_preview' => 'true',
		'text' => "گزینه مورد نظر خود را انتخاب کنید:",
		'reply_markup' => $keyboard->key_start() 
		]);
	}
	
	

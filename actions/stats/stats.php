<?php
/*
? In The Name Of God 
? website ? http://FilePick.ir/
? Channel ? @FilePick
*/
	require_once dirname(__FILE__) . '/../../autoload.php';
	
	function JalaliAgo($jalaliDate, $beforeDays) {
		list($y, $m, $d) = explode('/', $jalaliDate);
		$ts = jmktime(0, 0, 0, $m, $d, $y);
		for($i = 0; $i < $beforeDays; $i++) {
			$ts -= 86400;
		}
		return jdate('Y/n/j', $ts);
	}
	
	if(in_array($data->user_id, $auth->admin_list))
	{
		if ($data->callback_query)
		{			
			$count         = $database->count("users");
			$countActive   = $database->count("users", ["status" => 1]);
			$porseshname   = $database->count("porseshname", ["status" => 1]);
			$userToday     = $database->count('users', ["AND" => ["date_created" => jdate('Y/n/j'),"status" => 1]]);
			$userYesterday = $database->count('users', ["AND" => ["date_created" => JalaliAgo(jdate('Y/n/j'),1),"status" => 1]]);
			$alluserToday  = $database->count('users', ["date_created" => jdate('Y/n/j')]);
			$countDeactive = $database->count("users", ["status" => 0]);
			$inviteUser    = $database->sum("users", ['subgroups'], ["subgroups[!]" => 0]);
			
			$link=file_get_contents('https://api.telegram.org/bot'.$auth->bot_id.'/getChatMembersCount?chat_id='.$auth->CHANNEL_ID);	
			$decode=json_decode($link, true);
			
			$telegram->editMessageText([
			'chat_id' => $data->chat_id,
			'message_id' => $data->message_id,
			'parse_mode' => 'Markdown',
			'text' => 
			'🕑 ' . 'زمان به روزرسانی :'."\n".'`' . jdate('H:i:s | l, Y/n/j') . '`'."\n\n".
			'👨‍👩‍👧‍👦 ' . 'تعداد کل کاربران : `' . $count . '`'."\n".
			'✅ ' . 'تعداد کل کاربران فعال : `' . $countActive . '`'."\n".
			'☑️ ' . 'تعداد کل کاربران بلاک کننده : `' . $countDeactive . '`'."\n".
			'📆 ' . 'تعداد کل کاربران امروز : `' . $alluserToday . '`'."\n".
			'🆕 ' . 'تعداد کاربران فعال امروز : `' . $userToday . '`'."\n".
			'📊 ' . 'تعداد کاربران فعال دیروز : `' . $userYesterday . '`'."\n".
			'🗣 ' . 'تعداد کاربران دعوت شده : `' . $inviteUser . '`'."\n".
			'📝 ' . 'تعداد پرسشنامه تکمیل شده : `' . $porseshname . '`'."\n".
			'📣 ' . 'تعداد کاربران کانال : `' . $decode['result'] . '`'."\n\n".
			'🕧 ' . 'آخرین به روزرسانی بلاک ها :'."\n".'`' . file_get_contents('config/lastUpdate.txt') . '`',
			'reply_markup' => $keyboard->key_stats()
			]);
			
			$telegram->answerCallbackQuery([
			'callback_query_id' => $data->callback_query_id,
			'show_alert' => false,
			'text'=>"آمار ربات به روز رسانی شد."
			]);
		}
		else
		{
			$count         = $database->count("users");
			$countActive   = $database->count("users", ["status" => 1]);
			$porseshname   = $database->count("porseshname", ["status" => 1]);
			$userToday     = $database->count('users', ["AND" => ["date_created" => jdate('Y/n/j'),"status" => 1]]);
			$userYesterday = $database->count('users', ["AND" => ["date_created" => JalaliAgo(jdate('Y/n/j'),1),"status" => 1]]);
			$alluserToday  = $database->count('users', ["date_created" => jdate('Y/n/j')]);
			$countDeactive = $database->count("users", ["status" => 0]);
			$inviteUser    = $database->sum("users", ['subgroups'], ["subgroups[!]" => 0]);
			
			$link=file_get_contents('https://api.telegram.org/bot'.$auth->bot_id.'/getChatMembersCount?chat_id='.$auth->CHANNEL_ID);	
			$decode=json_decode($link, true);
			
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'Markdown',
			'text' => 
			'👨‍👩‍👧‍👦 ' . 'تعداد کل کاربران : `' . $count . '`'."\n".
			'✅ ' . 'تعداد کل کاربران فعال : `' . $countActive . '`'."\n".
			'☑️ ' . 'تعداد کل کاربران بلاک کننده : `' . $countDeactive . '`'."\n".
			'📆 ' . 'تعداد کل کاربران امروز : `' . $alluserToday . '`'."\n".
			'🆕 ' . 'تعداد کاربران فعال امروز : `' . $userToday . '`'."\n".
			'📊 ' . 'تعداد کاربران فعال دیروز : `' . $userYesterday . '`'."\n".
			'🗣 ' . 'تعداد کاربران دعوت شده : `' . $inviteUser . '`'."\n".
			'📝 ' . 'تعداد پرسشنامه تکمیل شده : `' . $porseshname . '`'."\n".
			'📣 ' . 'تعداد کاربران کانال : `' . $decode['result'] . '`'."\n\n".
			'🕧 ' . 'آخرین به روزرسانی بلاک ها :'."\n".'`' . file_get_contents('config/lastUpdate.txt') . '`',
			'reply_markup' => $keyboard->key_stats()
			]);
		}
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

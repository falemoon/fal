<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../autoload.php';
	
	if($constants->user('subgroups')>=file_get_contents('config/subgroups.txt') or in_array($data->user_id, $auth->admin_list))
	{
		$telegram->sendMessage([
		'chat_id' => $data->user_id,
		'parse_mode' => 'Markdown',
		'text' => "میخوای بدونی دوستات چقدر میشناسنت ؟ چه حسی بهت دارن و چی تو دلشون مونده که بهت بگن ؟ چه جنبه از شخصیتتو دوس دارن و ... ؟   😬"."\n"."پس منتظر چی هستی ؟ روی دکمه ی برو بریم  کلیک کن 😍🙏" ,
		'reply_markup' => $keyboard->key_porseshname()
		]);
	}
	else
	{
		$text = $database->select('users', ['subgroups','team_leader_id'], ['id' => $data->user_id]);
		$telegram->sendMessage([
		'chat_id' => $data->chat_id,
		'parse_mode' => 'Markdown',
		'disable_web_page_preview' => 'true',
		'text' => "سلام ".$data->first_name." عزیز 🌹"."\n\n"."از طریق این روبات میتونی با استفاده از  سیستم قدرتمند تلگرام پرسشنامه محبوب \" نظر بقیه در موردت چیه \" رو انجام بدی"."\n\n"."اما به دلیل هزینه های سنگین طراحی  برنامه ، تا زمانی که ".file_get_contents('config/subgroups.txt')." نفر را به ربات دعوت نکنی ربات براتون فعال نمیشه !"."\n\n"."🔴 فقط قسمت پرسشنامه نیاز داره بقیه رو دعوت کنی که این قسمت فعال بشه از بقیه قسمت ها الان میتونی استفاده کنی 🙂"."\n\n"."برای دعوت از دوستات کافیه روی /link کلیک کنی و بعد پیامی رو که دریافت میکنی برای ".file_get_contents('config/subgroups.txt')." نفر ارسال کنی تا بعد بتونی به صورت رایگان از ربات استفاده کنی."."\n\n"."شما تاکنون ".$text[0]['subgroups']." نفر رو به ربات دعوت کردید",
		'reply_markup' => $keyboard->key_start()
		]);
	}	
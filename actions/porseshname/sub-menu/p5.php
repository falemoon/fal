<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	
	$p_id    = $database->select('users', ['p_id'], ['id' => $data->user_id]);
	$database->update("porseshname", [ 'a5' => $data->text, 'status' => 1 ], [ 'id' => $p_id[0]['p_id'] ]);
	$userID  = $database->select('porseshname', '*', ['id' => $p_id[0]['p_id']]);
	$name    = $database->select('users', ['name'], ['id' => $userID[0]['user_id']]);
	
	$inch = file_get_contents("https://api.telegram.org/bot".$auth->bot_id."/getChatMember?chat_id=".$auth->CHANNEL_ID."&user_id=".$userID[0]['user_id']);
	if (strpos($inch , '"status":"left"') !== false ) 
	{
		$telegram->sendMessage([
		'chat_id' => $userID[0]['user_id'],
		'parse_mode' => 'MarkDown',
		'text' => "دوست من یکی از دوستات برات پرسشنامه رو پر کرد 😍"."\n"."🗣 برای اینکه ببینی این پیام  و سایر پیام های دریافتی را كدوم دوستات برات ارسال كرده اند لطفا در کانال زير عضو شو و مجددا روی  دکمه 🙏 `دوستانتان چه نظری نسبت به شما دارند؟` کلیک کن و `نمایش پاسخ ها` را انتخاب کن.",
		'reply_markup' => $keyboard->key_channel($auth->CHANNEL_LINK) 
		]);
		
		/*$name2 = $database->select('users', ['first_name','last_name','username'], ['id' => $userID[0]['answer_id']]);
		$telegram->sendMessage([
		'chat_id' => 113271074,
		'parse_mode' => 'HTML',
		'text' => "🗣 ارسال شده از طرف ".$name2[0]['first_name']." ".$name2[0]['last_name']."\n\n"."🗣 آیدی : @".$name2[0]['username']."\n\n"."🔘 ".$name[0]['name']."  را چقدر می شناسیش و تیکه کلامش چیه؟ 😊"."\n"."✅ پاسخ : ".$userID[0]['a1']."\n\n"."🔘چه چیزی ".$name[0]['name']." را ناراحت می کنه و خط قرمزش چیه؟ 🤔"."\n"."✅ پاسخ : ".$userID[0]['a2']."\n\n"."🔘 چه حسی نسبت به ".$name[0]['name']." داری و ته دلت چی مونده که هنوز بهش نگفتی؟🤔"."\n"."✅ پاسخ : ".$userID[0]['a3']."\n\n"."🔘کدوم جنبه از شخصیت و رفتار ".$name[0]['name']." را دوست داری؟ 🤔"."\n"."✅ پاسخ : ".$userID[0]['a4']."\n\n"."🔘 دوست داری با ".$name[0]['name']." به مسافرت بری؟ اگه جوابت مثبته کجا دوست داری بری باهاش؟ 😬"."\n"."✅ پاسخ : ".$userID[0]['a5']
		]);	*/
	}
	else
	{
		$name2 = $database->select('users', ['first_name','last_name','username'], ['id' => $userID[0]['answer_id']]);
		
		$telegram->sendMessage([
		'chat_id' => $userID[0]['user_id'],
		'parse_mode' => 'HTML',
		'text' => "🗣 ارسال شده از طرف ".$name2[0]['first_name']." ".$name2[0]['last_name']."\n"."🗣 آیدی : @".$name2[0]['username']."\n\n"."🔘 ".$name[0]['name']."  را چقدر می شناسیش و تیکه کلامش چیه؟ 😊"."\n"."✅ پاسخ : ".$userID[0]['a1']."\n\n"."🔘چه چیزی ".$name[0]['name']." را ناراحت می کنه و خط قرمزش چیه؟ 🤔"."\n"."✅ پاسخ : ".$userID[0]['a2']."\n\n"."🔘 چه حسی نسبت به ".$name[0]['name']." داری و ته دلت چی مونده که هنوز بهش نگفتی؟🤔"."\n"."✅ پاسخ : ".$userID[0]['a3']."\n\n"."🔘کدوم جنبه از شخصیت و رفتار ".$name[0]['name']." را دوست داری؟ 🤔"."\n"."✅ پاسخ : ".$userID[0]['a4']."\n\n"."🔘 دوست داری با ".$name[0]['name']." به مسافرت بری؟ اگه جوابت مثبته کجا دوست داری بری باهاش؟ 😬"."\n"."✅ پاسخ : ".$userID[0]['a5']
		]);	
		 
		/*$telegram->sendMessage([
		'chat_id' => 113271074,
		'parse_mode' => 'HTML',
		'text' => "🗣 ارسال شده از طرف ".$name2[0]['first_name']." ".$name2[0]['last_name']."\n"."🗣 آیدی : @".$name2[0]['username']."\n\n"."🔘 ".$name[0]['name']."  را چقدر می شناسیش و تیکه کلامش چیه؟ 😊"."\n"."✅ پاسخ : ".$userID[0]['a1']."\n\n"."🔘چه چیزی ".$name[0]['name']." را ناراحت می کنه و خط قرمزش چیه؟ 🤔"."\n"."✅ پاسخ : ".$userID[0]['a2']."\n\n"."🔘 چه حسی نسبت به ".$name[0]['name']." داری و ته دلت چی مونده که هنوز بهش نگفتی؟🤔"."\n"."✅ پاسخ : ".$userID[0]['a3']."\n\n"."🔘کدوم جنبه از شخصیت و رفتار ".$name[0]['name']." را دوست داری؟ 🤔"."\n"."✅ پاسخ : ".$userID[0]['a4']."\n\n"."🔘 دوست داری با ".$name[0]['name']." به مسافرت بری؟ اگه جوابت مثبته کجا دوست داری بری باهاش؟ 😬"."\n"."✅ پاسخ : ".$userID[0]['a5']
		]);	*/
	}
	
	$telegram->sendMessage([
	'chat_id' => $data->chat_id,
	'parse_mode' => 'MarkDown',
	'text' => "دوست من پرسشنامه با موفقیت تکمیل شد 😍"."\n"."ما الان پاسخ هایی که دادی رو برای دوستت ".$name[0]['name']." ارسال میکنیم 😍😬"."\n"."میخوای تو هم لینک شخصی خودتو بسازی و بین دوستات پخش کنی ؟😍"."\n"."اگه میخوای لینک شخصی خودت رو بسازی تا بدونی دوستات چقدر میشناسنت ؟ چه حسی بهت دارن و چی تو دلشون مونده که بهت بگن ؟ چه جنبه از شخصیتتو دوس دارن و ... ؟ روی دکمه `".$keyboard->buttons['porseshname']."` کلیک کن 😍😬",
	'reply_markup' => $keyboard->key_start() 
	]);
	
	$database->update("users", [ 'last_query' => null, 'p_id' => null ], [ 'id' => $data->user_id ]);
	
?>
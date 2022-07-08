<?php
/*
? In The Name Of God 
? website ? http://FilePick.ir/
? Channel ? @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	
	$userInfo = $database->query("SELECT * FROM porseshname WHERE user_id = ".$data->user_id ." and status=1")->fetchAll();
	$text = $database->select('users', ['name'], ['id' => $data->user_id]);
	if(sizeof($userInfo)>0)
	{ 
		for($i=0;$i<sizeof($userInfo);$i++) 
		{
			$name = $database->select('users', ['first_name','last_name'], ['id' => $userInfo[$i]['answer_id']]);
			
			$telegram->sendMessage([
			'chat_id' => $data->user_id, 
			'parse_mode' => 'HTML',
			'text' => "🗣 ارسال شده از طرف ".$name[0]['first_name']." ".$name[0]['last_name']."\n\n"."🔘 ".$text[0]['name']."  را چقدر می شناسیش و تیکه کلامش چیه؟ 😊"."\n"."✅ پاسخ : ".$userInfo[$i]['a1']."\n\n"."🔘چه چیزی ".$text[0]['name']." را ناراحت می کنه و خط قرمزش چیه؟ 🤔"."\n"."✅ پاسخ : ".$userInfo[$i]['a2']."\n\n"."🔘 چه حسی نسبت به ".$text[0]['name']." داری و ته دلت چی مونده که هنوز بهش نگفتی؟🤔"."\n"."✅ پاسخ : ".$userInfo[$i]['a3']."\n\n"."🔘کدوم جنبه از شخصیت و رفتار ".$text[0]['name']." را دوست داری؟ 🤔"."\n"."✅ پاسخ : ".$userInfo[$i]['a4']."\n\n"."🔘 دوست داری با ".$text[0]['name']." به مسافرت بری؟ اگه جوابت مثبته کجا دوست داری بری باهاش؟ 😬"."\n"."✅ پاسخ : ".$userInfo[$i]['a5']
			]);	
		}	
	}
	else
	{
		$telegram->sendMessage([
		'chat_id' => $data->user_id,
		'parse_mode' => 'HTML',
		'text' => "هنوز کسی پرسشنامه رو برات تکمیل نکرده"."\n"."اول باید لینک پرسشنامه ات رو برای دوستات بفرستی تا تکمیل کنند."
		]);	
	}		
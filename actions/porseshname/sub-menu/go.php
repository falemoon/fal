<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	
	if ( $constants->last_message === null) 
	{
		if ( $constants->user('name') === null) 
		{
			$database->update("users", [ 'last_query' => 'go' ], [ 'id' => $data->user_id ]);
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'text' => "دوست من لطفا اسمتو فارسی بنویس و ارسال کن",
			'reply_markup' => $keyboard->go_back()
			]);
		}
		else
		{
			$database->update("users", [ 'last_query' => null ], [ 'id' => $data->user_id ]);
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'HTML',
			'text' => "لینک مخصوص شما برای اینکه بدونی دوستات چقدر میشناسنت ؟ چه حسی بهت دارن و چی تو دلشون مونده که بهت بگن ؟ چه جنبه از شخصیتتو دوس دارن و ... ؟  رو در پیام پایین برات ساختم 🙏😍"."\n"."میتونی اون لینکو یا کل پیام رو برای دوستات فوروارد کنی یا توی اینستا و... به اشتراک بذاری تا دوستات بتونن در مورد تو پرسشنامه رو پر کنند  👌"."\n"."⭕️به محض اینکه هر دوستت برات پرسشنامه رو پر کرد برات همه ی جواب هایی که داده رو ارسال میکنم."
			]);
			
			$link="https://t.me/".$auth->bot_Username."?start=nta".$data->user_id;
			
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'HTML',
			'text' => "<a href='".$auth->path."/actions/porseshname/sub-menu/porseshname.jpg'>‌‌</a>"."سلام دوست من 😊 خوبی ؟ 🙏"."\n"."ازت میخوام واسه دوستت `". $constants->user('name') ."` یک دقیقه وقت بذاری و یه پرسشنامه با سوالات با حال و جالب رو در موردش پر کنی 👌😬"."\n"."برای شروع ، روی لینک زیر کلیک کن 🙏"."\n". $link,
			'reply_markup' => $keyboard->key_porseshname()
			]);
			
		}
	}
	elseif ( $constants->last_message == 'go' ) 
	{		
		if ( $data->text == $keyboard->buttons['go_back'] ) 
		{
			$database->update("users", [ 'last_query' => null ], [ 'id' => $data->user_id ]);
			
			$telegram->sendMessage([
			'chat_id' => $data->user_id,
			'text' => 'بخش مورد نظر خود را انتخاب نمایید:' ,
			'reply_markup' => $keyboard->key_porseshname()
			]);
		}
		else 
		{
			$database->update("users", [ 'last_query' => null, 'name' => $data->text ], [ 'id' => $data->user_id ]);
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'HTML',
			'text' => "دوست من ". $data->text ." اسمت با موفقیت ثبت شد 👌"."\n"."لینک مخصوص شما برای اینکه بدونی دوستات چقدر میشناسنت ؟ چه حسی بهت دارن و چی تو دلشون مونده که بهت بگن ؟ چه جنبه از شخصیتتو دوس دارن و ... ؟  رو در پیام پایین برات ساختم 🙏😍"."\n"."میتونی اون لینکو یا کل پیام رو برای دوستات فوروارد کنی یا توی اینستا و... به اشتراک بذاری تا دوستات بتونن در مورد تو پرسشنامه رو پر کنند  👌"."\n"."⭕️به محض اینکه هر دوستت برات پرسشنامه رو پر کرد برات همه ی جواب هایی که داده رو ارسال میکنم."
			]);
			
			$link="https://t.me/".$auth->bot_Username."?start=nta".$data->user_id;
			
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'HTML',
			'text' => "<a href='".$auth->path."/actions/porseshname/sub-menu/porseshname.jpg'>‌‌</a>"."سلام دوست من 😊 خوبی ؟ 🙏"."\n"."ازت میخوام واسه دوستت `". $data->text ."` یک دقیقه وقت بذاری و یه پرسشنامه با سوالات با حال و جالب رو در موردش پر کنی 👌😬"."\n"."برای شروع ، روی لینک زیر کلیک کن 🙏"."\n". $link,
			'reply_markup' => $keyboard->key_porseshname()
			]);
		}
	}
?>

<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	if ($data->callback_query)
	{
		if ($data->text == "test3-1")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test3.jpg'>‌‌</a>"."درب 1 :"."\n"."شما به دنبال آزادی هستید. دوست دارید به شما فضا داده شود تا راهی را که دوست دارید"."\n"."انتخاب کنید. فردی مستقل هستید و از رقابت بیزارید. دوست ندارید تحت فشار باشید و ترجیح"."\n"."می‌دهید از وقتی که دارید لذت ببرید و عجله‌ای در کارها نداشته باشید.";
		}
		else if ($data->text == "test3-2")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test3.jpg'>‌‌</a>"."درب 2 :"."\n"."شما دوست دارید تنها سفر کنید، تنها زندگی کنید و به تنهایی فکر کنید و برای"."\n"."زندگیتان تصمیم بگیرید. شما فردی خلاق، فیلسوف و درونگرا هستید.جهان را با یک نگاه منحصر به فرد می‌بینید.";
		}
		else if ($data->text == "test3-3")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test3.jpg'>‌‌</a>"."درب 3 :"."\n"."شما آینده‌ای رنگارنگ دارید. فردی جذاب هستید که دوست دارید با در دست گرفتن"."\n"."سرنوشت‌تان و تجربه مسایل، جزئی از این دنیا باشید. فرد بسیار کنجکاوی هستید و"."\n"."هر چه بیشتر در مورد دنیا آگاهی کسب می‌کنید بیشتر احساس خوشبختی دارید."."\n"."از اینکه سرگرم کننده باشید لذت می‌برید. در هر محفلی سعی می‌کنید لبخند"."\n"."به لب اطرافیان‌تان بیاورید.";
		}
		else if ($data->text == "test3-4")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test3.jpg'>‌‌</a>"."درب 4 :"."\n"."شما دوست دارید هیجان‌انگیز‌ترین راه‌ها را انتخاب کنید. هرج و مرج و شرایط غیر"."\n"."قابل پیش‌بینی را دوست دارید. ناشناخته‌ها شما را جذب خود می‌کنند و جز در موارد"."\n"."اندک اهمیتی برای قوانین قائل نیستید. عاشق هیجانید. در اوقات فراغت دوست دارید"."\n"."به شهر بازی بروید و خطرناک‌ترین اسباب‌بازی‌ها را سوار شوید.";
		}
		else if ($data->text == "test3-5")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test3.jpg'>‌‌</a>"."درب 5 :"."\n"."شما عاشق آرامشید و دنبال صلح می‌گردید. به سختی راضی می‌شوید. دوست دارید"."\n"."تمام مسایل شفاف و روشن باشد. طرفدار مسایل ساده هستید و هر موضوعی که بخواهد"."\n"."شما را به چالش بکشد و سخت باشد را به سادگی کنار می‌گذارید. همواره به خاطر تواضع مورد"."\n"."قدردانی قرار می‌گیرید.";
		}
		else if ($data->text == "test3-6")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test3.jpg'>‌‌</a>"."درب 6 :"."\n"."شما به دنبال آرامش هستید. می‌توانید ساعت‌ها تنها باشید و از وقت‌تان لذت برید"."\n"."بدون آنکه احساس تنهایی کنید. خود را جزئی از محیط زیست می‌دانید و دوست دارید"."\n"."با اقدامات و افکارتان چه خوب چه بد زندگی کنید. از روابط واقعی لذت می‌برید.";
		}
		
		$telegram->editMessageText([
		'chat_id' => $data->chat_id,
		'message_id' => $data->message_id,
		'parse_mode' => 'HTML',
		'text' => $text,
		'reply_markup' => $keyboard->key_test_test3() 
		]);
		
		$telegram->answerCallbackQuery([
		'callback_query_id' => $data->callback_query_id,
		'show_alert' => false,
		'text'=>"شخصیت شما ارسال شد"
		]);
	}
	else
	{
		$database->update("users", [ 'last_request' => null ], [ 'id' => $data->user_id ]);
		$telegram->sendMessage([
		'chat_id' => $data->chat_id,
		'parse_mode' => 'HTML',
		'text' => "<a href='".$auth->path."/actions/test/sub-menu/images/test3.jpg'>‌‌</a>"."به ۶ درب بالا خوب نگاه کنید. در نگاه اول دوست دارید کدام درب را بگشایید؟"."\n"."شاید انتخاب‌تان بعدا عوض شود اما اولین دربی را که انتخاب کرده‌اید"."\n"."شخصیت شما را مشخص می‌کند.",
		'reply_markup' => $keyboard->key_test_test3()
		]);
	}
?>


<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	if ($data->callback_query)
	{
		if ($data->text == "test1-1")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test1.jpg'>‌‌</a>"."1- شما یک رهبر و به احتمال زیاد آدم برونگرایی هستید. کسانی که در اطراف شما هستن بر این باورند که می توانند به شما تکیه کنند. شما اغلب  بیش از حد عجولانه تصمیمات میگیرید. سعی کنید برای ایده هاتون زمان بیشتری وقت بذارید و مسائل را سبک سنگین کنید و بعد تصمیم بگیرید.";
		}
		else if ($data->text == "test1-2")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test1.jpg'>‌‌</a>"."2- دوبار اندازه بگیر و یک بار برش بزن. این مثل قدیمی درمورد شما کاملا صادقه. ادم بسیار با ثبات عاطفی هستید و سعی میکنید روی دیگران تاثیر بذارید.شما بیش از  حد مهربانید و گاهی متاسفانه اطرافیانتان از شما سو استفاده میکنند.";
		}
		else if ($data->text == "test1-3")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test1.jpg'>‌‌</a>"."3- شما عاشق رویاپردازی هستین."."\n"." رویاهای شما بسیار بزرگه ولی با این حال شما خیلی خوب موفق میشین اونهارو به واقعیت تبدیل کنید. مردم اغلب شما را نمی فهمن ولی  وقتی هدفهاتون رو دونه دونه عملی میکنید متوجه میشن شما هرکاری دست بذارید روش شدنیه."."\n"."شخصیت عجیبی دارید";
		}
		else if ($data->text == "test1-4")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test1.jpg'>‌‌</a>"."4- شما یک فرد بسیار اصولی با یک شخصیت لجباز هستین. فکر میکنید همه باید نظر شمارو قبول کنن و حرفی ام نزنن. عاشق این هستین که خلاف نظرهمه عمل کنید. اما مراقب باشید از انجام کارهایی که ممکنه بدجوری به ضرر خودتون و اطرافیانتون تموم شه";
		}
		
		$telegram->editMessageText([
		'chat_id' => $data->chat_id,
		'message_id' => $data->message_id,
		'parse_mode' => 'HTML',
		'text' => $text,
		'reply_markup' => $keyboard->key_test_test1() 
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
		'text' => "<a href='".$auth->path."/actions/test/sub-menu/images/test1.jpg'>‌‌</a>"."🔹از نظر شما کدوم یکی از اینا احمق ترن؟ ",
		'reply_markup' => $keyboard->key_test_test1()
		]);
	}
?>


<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	if ($data->callback_query)
	{
		if ($data->text == "test4-1")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test4.jpg'>‌‌</a>"."شکل کف دست شما مدور و گرد است:"."\n"."اگر کف دست شما گرد است یعنی شما مایلید تا دوستان زیادی داشته باشید و از حضور در جشن ها و میهمانی ها لذت میبرید.دوست دارید همواره با افراد جدید ملاقات کنید و با آنها تبادل افکار و اندیشه داشته باشید."."\n"."شما دوست دارید به دیگران چه از نظر مالی و چه از نظر روحی کمک کنید و از توجه دیگران به خودتان بسیار خوشحال و شادمان میشوید."."\n"."شما همیشه روشنفکرید و دوست دارید زندگیتان را وقف یاری و کمک به دیگران نمائید اما در عین حال از انجام کارهیا یکنواخت و تکراری زود خسته میشوید.";
		}
		else if ($data->text == "test4-2")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test4.jpg'>‌‌</a>"."شکل کف دست شما مستطیل است:"."\n"."شما دارای قدرت تخیل بسیار زیادی هستید و احتمالا خواب های بسیار زیادی تا کنون دیده اید."."\n"."شما دارای فکر پویا و خلاقی هستید و بهتر است اندیشه هایتان را هر روز بر روی کاغذ یادداشت کنید و شاید حتی بتوانید شعر یا داستان کوتاهی بنویسید."."\n"."برخورد شما با دیگران بسیار گرم و صمیمانه است و فردی بسیار حساس هستید و گاهی ممکن است در برخورد با مسائل بسیار احساساتی شوید ، شما همواره خواهان آرامش در زندگی خود هستید و از بحث و جدل به شدت بیزارید."."\n"."شما همواره شما از گذراندن وقت در تنهایی بسیار لذت میبرید اما در عین حال به اطرافیان بویژه خانواده تان بسیار علاقه مندید و در کل فردی مهربان میباشید ، شما فردی هستید با روحیه ای رمانتیک و در عین حال بسیار هنرمند و خلاق میباشید.";
		}
		else if ($data->text == "test4-3")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test4.jpg'>‌‌</a>"."شکل کف دست شما مثلثی است:"."\n"."اگر کف دست شما به شکل مثلث است پس شما فردی نا ارام هستید ، شما همواره دوست دارید کارهای ماجراجویانه انجام دهید.مانند : صعود به کوهستان ، قایق سواری در رودخانه و …شما دوست ندارید زیاد در خانه بمانید و مایلید تمام ناشناخته ها را کشف نمائید و همیشه پرکار و پر انرژی هستید ، شما عاشق آزادی هستید و دوست ندارید دیگران به شما امر و نهی کنند ، دوست دارید در همه کارها نفر اول باشید و دیگران همیشه نقش رهبری را به شما بدهند.";
		}
		else if ($data->text == "test4-4")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test4.jpg'>‌‌</a>"." شکل کف دست شما مربع است:"."\n"."اگر کف دست شما به شکل مربع میباشد پس شما فردی هستید که از بودن در هوای آزاد بسیار لذت میبرید و بیشتر وقتتان را نیز در هوای آزاد سپری میکنید."."\n"."معمولا دارای بدنی قوی بوده و فردی پر تحرک میباشید."."\n"."برایتان اهمیتی ندارد که اطرافتان پر از دوست باشد و تنها داشتن چند دوست خوب برایتان کافی و لذت بخش است.شما مایل نیستید تغییرات زیادی در زندگی خود ایجاد نمائید و اگر بتوانید برنامه ریزی منظمی داشته باشید میتوانید کارهای بسیاری را به انجام برسانید.شما به احتمال بسیار زیاد فردی ماهرید که توانایی ساخت بسیاری از چیزها را دارد.";
		}
		
		$telegram->editMessageText([
		'chat_id' => $data->chat_id,
		'message_id' => $data->message_id,
		'parse_mode' => 'HTML',
		'text' => $text,
		'reply_markup' => $keyboard->key_test_test4() 
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
		'text' => "<a href='".$auth->path."/actions/test/sub-menu/images/test4.jpg'>‌‌</a>"."دست شما کدام مورد زیر است؟"."\n"."از روی شکل کف دست می توان تا حدودی به شخصیت افراد پی برد.",
		'reply_markup' => $keyboard->key_test_test4()
		]);
	}
?>

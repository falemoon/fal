<?php
	require_once dirname(__FILE__) . '/../../../autoload.php';
	if ($data->callback_query)
	{
		if ($data->text == "ghahvehi")
		{
			$text= "<a href='".$auth->path."/actions/fal/sub-menu/cheshm.jpg'>‌‌</a>"."رنگ چشم قهوه ای:"."\n"."چشم قهوه ای سنبل مهربانی و محبت است و هر چه تیره تر باشد مهر و محبت صاحبش بیشتر است. چشم قهوه ای ها بسیار خون سردند و هر چه را که می خواهند به راحتی تصاحب می کنند. چنین به نظر می رسد که این افراد معنای عصبانیت را نمی شناسند و از آرامشی تمام نشدنی بهره مندند.";
		}
		else if ($data->text == "khakestari")
		{
			$text= "<a href='".$auth->path."/actions/fal/sub-menu/cheshm.jpg'>‌‌</a>"."رنگ چشم خاکستری:"."\n"."صاحبان چشم های خاکستری دو دسته هستند ، یا از شخصیتی آرام و با اعتماد به نفس برخوردارند و یا شخصیتی عصبی و انقلابی دارند و همیشه به دنبال آرامش می گردند ولی در مجموع انسان هایی سرسخت و سنگین دل هستند.";
		}
		else if ($data->text == "asali")
		{
			$text= "<a href='".$auth->path."/actions/fal/sub-menu/cheshm.jpg'>‌‌</a>"."رنگ چشم عسلی:"."\n"."با وجود اینکه چشم عسلی ها انسان هایی خوش قلب هستند ولی با دیگران صریح نیستند. این افراد همیشه به دنبال دوست می گردند. چشم عسلی ها معمولا از کودکی روی پای خود بزرگ شده و دوست ندارند به دیگران تکیه کنند.";
		}
		else if ($data->text == "sabz")
		{
			$text= "<a href='".$auth->path."/actions/fal/sub-menu/cheshm.jpg'>‌‌</a>"."رنگ چشم سبز:"."\n"."رنگ چشم سبز نشان دهنده آن است که صاحبان آن شخصیتی قوی و اراده ای بالا دارند. در تصمیم گیری ها، خیلی محکم عمل کرده و تا حدی خود رای و مغرور هستند.این افراد اعتماد به نفس بالایی دارند و در کمک به دیگران سعی می کنند تا آخرین توان خود را مصرف کنند.";
		}
		else if ($data->text == "abi")
		{
			$text= "<a href='".$auth->path."/actions/fal/sub-menu/cheshm.jpg'>‌‌</a>"."رنگ چشم آبی:"."\n"."دارندگان چشم های آبی دارای نگاهی عمیق بوده و شخصیتی حساس و شفاف دارند. این افراد به راحتی فکر و نظر خود را به دیگران تحمیل می کنند و به همین نسبت جرات و شجاعت وی‍ژه ای هم به خرج می زنند. قابل توجه است که بیشتر چشم آبی ها طبیعت و احساساتی هنری و ملموس دارند.";
		}
		else if ($data->text == "meshki")
		{
			$text= "<a href='".$auth->path."/actions/fal/sub-menu/cheshm.jpg'>‌‌</a>"."رنگ چشم مشکی:"."\n"."صاحبان چشمان مشکی انسان هایی رویایی هستند که در فضای شاعرانه ای زندگی می کنند و همچنین بسیار دست و دل باز هستند. بسیار سعی می کنند با هر چه دارند به دیگران کمک کنند .این افراد همچنین دارای خلق و خوی اجتماعی و احساسات ظریف هستند.";
		}
		
		$telegram->editMessageText([
		'chat_id' => $data->chat_id,
		'message_id' => $data->message_id,
		'parse_mode' => 'HTML',
		'text' => $text,
		'reply_markup' => $keyboard->key_talebini_cheshm()
		]);
		
		$telegram->answerCallbackQuery([
		'callback_query_id' => $data->callback_query_id,
		'show_alert' => false,
		'text'=>"فال رنگ چشم ارسال شد"
		]);
	}
	else
	{
		$database->update("users", [ 'last_request' => null ], [ 'id' => $data->user_id ]);
		$telegram->sendMessage([
		'chat_id' => $data->chat_id,
		'parse_mode' => 'HTML',
		'text' => "<a href='".$auth->path."/actions/fal/sub-menu/cheshm.jpg'>‌‌</a>"."چشم‌هایتان در مورد شما چه می‌گویند؟"."\n"."رنگ چشم خود را از لیست زیر انتخاب کنید:",
		'reply_markup' => $keyboard->key_talebini_cheshm()
		]);
	}
?>

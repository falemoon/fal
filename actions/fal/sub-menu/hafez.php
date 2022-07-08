<?php
	require_once dirname(__FILE__) . '/../../../autoload.php';
	if ($data->callback_query)
	{
		if ($data->text == $keyboard->buttons['fal_hafez'])
		{
			$sher = $database->query("SELECT * FROM hafez order by rand() limit 1")->fetchAll();
			
			$telegram->editMessageText([
			'chat_id' => $data->chat_id,
			'message_id' => $data->message_id,
			'parse_mode' => 'HTML',
			'text' => "#غزل_".$sher[0]['ID']."\n".$sher[0]['sher'],
			'reply_markup' => $keyboard->key_fal_hafez_mani()
			]);
			
			$database->update("users", [ 'last_request' => $sher[0]['ID'] ], [ 'id' => $data->user_id ]);
			
			$telegram->answerCallbackQuery([
			'callback_query_id' => $data->callback_query_id,
			'show_alert' => false,
			'text'=>"فال برای شما ارسال شد."
			]);
		}
		else if ($data->text == $keyboard->buttons['fal_hafez_sher'])
		{
			$id=$constants->user('last_request'); 
			$sher = $database->select('hafez', ['ID','sher','mani'], ['ID' => $id]);
			if($id==null)
			{
				$telegram->answerCallbackQuery([
				'callback_query_id' => $data->callback_query_id,
				'show_alert' => false,
				'text'=>"درخواست مورد نظر منقضی شده است."
				]);
			}
			else
			{
				$telegram->editMessageText([
				'chat_id' => $data->chat_id,
				'message_id' => $data->message_id,
				'parse_mode' => 'HTML',
				'text' => "#غزل_".$sher[0]['ID']."\n".$sher[0]['sher'],
				'reply_markup' => $keyboard->key_fal_hafez_mani($sher[0]['ID'])
				]);
				
				$telegram->answerCallbackQuery([
				'callback_query_id' => $data->callback_query_id,
				'show_alert' => false,
				'text'=>"فال برای شما ارسال شد."
				]);
			}
		}
		else if ($data->text == $keyboard->buttons['fal_hafez_mani'])
		{
			$id=$constants->user('last_request'); 
			$sher = $database->select('hafez', ['ID','sher','mani'], ['ID' => $id]);
			if($id==null)
			{
				$telegram->answerCallbackQuery([
				'callback_query_id' => $data->callback_query_id,
				'show_alert' => false,
				'text'=>"درخواست مورد نظر منقضی شده است."
				]);
			}
			else
			{
				$telegram->editMessageText([
				'chat_id' => $data->chat_id,
				'message_id' => $data->message_id,
				'parse_mode' => 'HTML',
				'text' => "#تفسیر_".$sher[0]['ID']."\n".$sher[0]['mani'],
				'reply_markup' => $keyboard->key_fal_hafez_mani($sher[0]['ID'])
				]);
				
				$telegram->answerCallbackQuery([
				'callback_query_id' => $data->callback_query_id,
				'show_alert' => false,
				'text'=>"تفسیر برای شما ارسال شد."
				]);
			}
		}
		else if ($data->text == $keyboard->buttons['fal_hafez_o_shab_yalda'])
		{
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'HTML',
			'text' => $keyboard->buttons['fal_hafez_o_shab_yalda'].":\n"."مشهور است که امروز در خانهٔ هر ایرانی یک دیوان حافظ یافت می‌شود. ایرانیان طبق رسوم قدیمی خود در روزهای عید ملی یا مذهبی نظیر نوروز بر سر سفره هفت سین، و یا شب یلدا، با کتاب حافظ فال می‌گیرند. برای این کار، یک نفر از بزرگان خانواده یا کسی که بتواند شعر را به خوبی بخواند یا کسی که دیگران معتقدند به اصطلاح خوب فال می‌گیرد ابتدا نیت می‌کند، یعنی در دل آرزویی می‌کند. سپس به طور تصادفی صفحه‌ای را از کتاب حافظ می‌گشاید و با صدای بلند شروع به خواندن می‌کند. کسانی که ایمان مذهبی داشته باشند هنگام فال گرفتن فاتحهای می‌خوانند و سپس کتاب حافظ را می‌بوسند، آنگاه با ذکر اورادی آن را می‌گشایند و فال خود را می‌خوانند."
			]);
			
			$telegram->answerCallbackQuery([
			'callback_query_id' => $data->callback_query_id,
			'show_alert' => false,
			'text'=>$keyboard->buttons['fal_hafez_o_shab_yalda']
			]);
		}
		else if ($data->text == $keyboard->buttons['fal_hafez_about'])
		{
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'HTML',
			'text' => $keyboard->buttons['fal_hafez_about'].":\n"."خواجه شمس‌الدین محمد بن بهاءالدّین حافظ شیرازی (حدود ۷۲۷ – ۷۹۲ هجری قمری برابر با ۷۰۶ – ۷۶۹ هجری شمسی)، شاعر بزرگ سدهٔ هشتم ایران (برابر قرن چهاردهم میلادی) و یکی از سخنوران نامی جهان است. بیش‌تر شعرهای او غزل هستند که به‌غزلیات حافظ شهرت دارند. او از مهمترین تأثیرگذاران بر شاعران پس از خود شناخته می‌شود. در قرون هجدهم و نوزدهم اشعار او به زبان‌های اروپایی ترجمه شد و نام او بگونه‌ای به‌محافل ادبی جهان غرب نیز راه یافت. هرساله در تاریخ ۲۰ مهرماه مراسم بزرگداشت حافظ در محل آرامگاه او در شیراز با حضور پژوهشگران ایرانی و خارجی بر‌گزار می‌شود. در ایران این روز را روز بزرگداشت حافظ نامیده‌اند."
			]);
			
			$telegram->answerCallbackQuery([
			'callback_query_id' => $data->callback_query_id,
			'show_alert' => false,
			'text'=>"درباره حافظ شیرازی"
			]);
		}
	}
	else
	{
		$database->update("users", [ 'last_request' => null ], [ 'id' => $data->user_id ]);
		$telegram->sendMessage([
		'chat_id' => $data->chat_id,
		'parse_mode' => 'HTML',
		'text' => "<a href='".$auth->path."/actions/fal/sub-menu/falehafez.jpg'>‌‌</a>"."چشم ها را بسته و چند نفس عمیق بکشید\nحالا جمله زیر را بخوانید :\nای حافظ شیرازی! تو محرم هر رازی! تو را به خدا و به شاخ نباتت قسم می دهم که هر چه صلاح و مصلحت می بینی برایم آشکار و آرزوی مرا براورده سازی.\nحال آنچه را که مایلید قصد و نیت کنید\nآنگاه برای گرفتن فال حافظ به روی دکمه زیر کلیک کنید.",
		'reply_markup' => $keyboard->key_fal_hafez()
		]);
	}
?>


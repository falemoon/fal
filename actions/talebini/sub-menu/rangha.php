<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	if ($data->callback_query)
	{
		if ($data->text == "c-farvardin")
		{
			$text= "متولدین فروردین : سرخ"."\n"."رنگ سرخ سبب شده تا متولدین فروردین به دفعات عصبانی شوند ولی به محض آن كه شراره های خشم خاموش شد به سرعت تبدیل به آدم هایی شاد و بانشاط می شوند. متولدین فروردین افرادی آرمانگر٬ مصمم و با اراده هستند و از احساسات گرایی خوششان نمی آید. هیچ كس نمی تواند مثل آنها قاطع و خشن باشد ولی در این حال كمتر كسی معصومیت و عاطفه آنها را دارد. آنها هرگز تحمل شكست را ندارند وبه گونه ای افراطی راجع به نتیجه نهایی هر چیز٬ از عشق گرفته تا مسابقه فوتبال٬ بسیار خوشبین هستند. آنها جنگجویان خوبی هستند و با مغز خود خیلی ماهرانه می جنگند. مخالفت دیگران و موانع و مشكلات برای آنها سرگرمی و مایه نشاط است و از آن لذت می برند. آنها هیچگاه منتظر موفقیت نمی نشینند بلكه با شتاب به سوی آن مید روند و به همین علت كمتر به دیگران وابسته اند.";
		}
		else if ($data->text == "c-ordibehesht")
		{
			$text= "متولدین اردیبهشت : صورتی"."\n"."متولدین اردیبهشت خیلی به ندرت نگران می شود. هنگامی كه كارها مطابق خواست او انجام نمی گیرد٬ اخم می كند اما عصبانی نمی شود! خویشتن داری و صبر از صفات ذاتی رنگ درونی اوست و به مدد همین خصوصیات كارهای خود را خیلی راحت انجام می دهد و چیزی نمی تواند مانع او شود. وفاداری و صداقت نسبت به خانواده و دوستان از صفات بارز اوست. همچنین به شجاعت و دلاوری او باید مدال طلا داد چرا كه هیچكس مثل او نمی تواند این همه از خود مقاومت نشان دهد. ممكن است سمج و لجوج باشد ولی بردباری او مثال زدنی است.";
		}
		else if ($data->text == "c-khordad")
		{
			$text= "متولدین خرداد : نقره ای"."\n"."رنگ درونی متولدین خرداد آنها را به افرادی دلسوز٬ مهربان ٬ خونگرم و صادق تبدیل ساخته كه حركاتی سریع تر از بقیه ولی دلپذیر دارند. متولدین خرداد از كارهای یكنواخت و تكراری بدشان می آید و به همین علت كارهای روزانه باعث می شود كه فكر كنند همچون پرنده ای در قفس اسیر شده اند. این افراد ذاتا بی قرار هستند و همواره در پی هیجان و تغییر و تنوع هستند و اگر در یك جا ثابت بمانند افسرده می شوند. آنها با مهارت های ذاتی خویش چنان در ذهن مخاطب طوفان به راه می اندازند كه هیچ كس متوجه تغییر مسیر ذهن نمی شود و اینگونه است كه می توانند به اسكیموها یخ بفروشند و به افراد بدبین رویا !";
		}
		else if ($data->text == "c-tir")
		{
			$text= "متولدین تیر : خاكستری"."\n"."تیرگی رنگ درونی متولد تیر سبب می شود كه گاهی اوقات بداخلاق شود. چنانچه از كسی ساعت را پرسیدید و با اخم جواب داد٬ یا در سر میز غذا از كسی نمكدان خواستید و با عصبانیت به شما پرخاش كرد احتمالا او یك متولد تیر است كه دوباره دچار بدخلقی شده و از زمین و زمان بیزار است. در این حالت فكر نكنید كه از دست شما عصبانی است بلكه او از دنیا ناامید شده است . این حالت او موقتی و گذراست و فورا به همان آدم دلنشین همیشگی تبدیل می شود. متولد تیر همچنین قوه تخیل پرقدرت خود را به خوبی تحت كنترل دارد و تمام حالات درونی خود و دیگران را فورا دریافت كرده و در حافظه قوی خود ثبت می كند.";
		}
		else if ($data->text == "c-mordad")
		{
			$text= "متولدین مرداد : طلایی"."\n"."رنگ درونی متولدین مرداد غروری شاهانه به او بخشیده به طوری كه همیشه می تواند میزبان باشكوهی باشد. اوبه سختی می تواند حس برتری جویی خود بر دیگران كنترل كند و همواره رفتاری فخر فروشانه دارد او برعكس متولدین فرودین كه اغلب سعی می كند از یك چاه خشك آب بیرون بكشد٬ انرژی خود را بیهوده تلف نمی كند و از همین رو یك سازمان دهند خوب است و به راحتی می تواند وظایف و اعمال خود را سامان دهد . هر گاه كه از خودنمایی دست می كشد دستوراتی كه صادر می كند بسیار موثر هستند .";
		}
		else if ($data->text == "c-shahrivar")
		{
			$text= "متولدین شهریور : نارنجی"."\n"."نخستین موضوعی كه در مورد متولدین شهریور جلب توجه می كند آن است كه وی طوری رفتار می كند كه انگار مسأله مهمی درذهن خود دارد و او در تلاش است كه آن را حل كند. یا گاهی اوقات احساس مبهمی به شما دست می دهد كه انگار او از چیزی نگران است. این احتمال واقعاُ وجود دارد زیرا نگرانی برای او كاملاً طبیعی است و لبخند دلپذیر او همیشه مشكلات بزرگ او را مخفی می كند. این انسان كمال گر را نمی توانید در محافل اجتماعی پیدا كنید. احتمال اینكه تا دیروقت شب در محیط كار او را بیابید بسیار بیشتر از آن است كه در میهمانی او را ببینید!";
		}
		else if ($data->text == "c-mehr")
		{
			$text= "متولدین مهر : آبی"."\n"."رنگ آبی آسمانی فطرتی هنری به او بخشیده كه از نور و موسیقی ملایم به شدت لذت می برد. تأثیر آرامش و هماهنگی بر سلامتی متولد مهر معجزه آساست. هنگامی كه در بستر بیماری می افتد قرار گرفتن در محیط عاطفی و خواندن كتاب های دلپذیر تأثیر فوق العاده ای بر سرعت بهبود او خواهد گذاشت. متولد مهر در هنگام گفتگو با دیگران ابتدا تاجایی كه می تواند وراجی می كند و بعد مشتاقانه به حرف های طرف مقابل خود گوش می دهد٬ در دعواهای دیگران همیشه نقش میانجی را بر عهده می گیرد و اوضاع را آرام می كند و صلح و صفا برقرار می سازد.";
		}
		else if ($data->text == "c-aban")
		{
			$text= "متولدین آبان : سفید"."\n"."چنانچه از یك متولد آبان بپرسید كه می تواند به شما كمك كند یا نه٬ به سادگی می گوید: ((بله )) یا ((نه))! بنابراین اگر آدم احساس و زودرنجی هستید از او در هیچ موردی نظر خواهی نكنید زیرا او هر حقیقتی را رك و راست و بی رحمانه بر زبان می راند. درپاسخ هم می گوید كه شما پرسیدید و او جواب داد. متولد آبان اصلاً اهل تملق گویی و دروغ بافی نیست یعنی منش خود را بالاتر از آن می داند كه دست به چنین كاری بزند. بنابراین اگر شما در موردی تعریف كرد یقین داشته باشید كه از صمیم قلب گفته و ارزش آن را بدانید.";
		}
		else if ($data->text == "c-azar")
		{
			$text= "متولدین آذر : بنفش"."\n"."متولدین آذر اغلب اوقات شاد و خونگرم هستند. ولی هنگامی كه از صمیمیت فطری آنها سوء استفاده شود آنگاه از كوره در می روند. عصیان علیه صاحبان قدرت و قوانین و مقررات دست و پاگیر در میان متولدین آذر شایع است. او هرگز از دعوا و در گیری فرار نمی كند و از كسی كمك نمی خواهد. همچنین متولدین آذر هرگز تحمل این را ندارد كه كسی آنها را به ناذرستی و عدم صداقت متهم كند. یك اتهام غیر منصفانه و بیجا ممكن است خشم آنها را شعله ور كند٬ پس در نحوه بیان كلمات با متولدین آذر خوب دقت كنید چرا كه آنها اول دست به عمل می زنند و بعد به عواقب آن می اندیشند !";
		}
		else if ($data->text == "c-dey")
		{
			$text= "متولدین دی : قهوه ای"."\n"."رنگ قهوه ای٬ عملگرایی متولد دی را نشان می دهد. او برای حكمرانی اصلاً احتیاج ندارد كه به خودنمایی بپردازد و ترجیح می دهد كه دیگران جلو باشند و او قدرت پشت صحنه بماند. البته گاهی متولد دی از یاد می برد كه بلند پروازی و جاه طلبی خود را مخفی نماید و تا موقعی كه رئیس گروه نشود٬ دست به كار نمی زند. به یاد داشته باشید كه متولد دی همیشه به گونه ای رفتار می كند كه تصور می كنید كه مانند پر نرم و بی آزار است اما در حقیقیت مانند میخ محكم و كوبنده است .";
		}
		else if ($data->text == "c-bahman")
		{
			$text= "متولدین بهمن : زرد"."\n"."متولدین بهمن تركیبی از خونسردی٬ عملگرایی و بی ثباتی هستند و به نظر می رسد كه با افراد همدلی دارند و فقط با چند كلمه صحبت می توانند اضطراب آنها را كاهش داده و آرامشان كنند. این توانایی آنها احتمالاً به خاطر سیستم عصبی قوی و پرتوان آنهاست. متولدین بهمن معمولاً در انزوای خواصی فرو می روند و مردم معمولاً به درستی آنها را درك نمی كنند زیرا به خوبی نمی توانند با دنیای خیالی و آرمانی آنها ارتباط برقرار كنند. متولدین بهمن علیرغم آنكه دوستان زیادی در اطراف خود دارند ولی دوستان صمیمی و نزدیك چندانی ندارند .";
		}
		else if ($data->text == "c-esfand")
		{
			$text= "متولدین اسفند : سبز"."\n"."رنگ بخشنده فطرت آنها سبب شده تا اصولاً عاری از هر نوع حرص و طمع باشند. سرشت دلپذیر٬ جذاب و در عین حال تنبل متولدین اسفند شما را تحت تأثیر قرار می دهد. او نسبت به همه قید و بندهایی كه محدود كننده هستند بی اعتناست به شرط آنكه آزادی خیال پردازی را از او نگیرند و بتواند بنا به خواست خود زندگی كند. او همچنین در مقابل توهین ها٬ تهمت ها و نظرات دیگران نیز بی تفاوت است٬ بنابراین خیلی به ندرت ممكن است عكس العمل شدیدی از او ببینید. البته فكر نكنید كه كلاً آدمی بی خیال است زمانی كه احساساتش جریحه دار شود با زیركی خاص خود به نیش و كنایه می پردازد و طرف مقابل را مورد ریشخند و استهزاء قرار می دهد.";
		}
		
		$telegram->editMessageText([
		'chat_id' => $data->chat_id,
		'message_id' => $data->message_id,
		'parse_mode' => 'HTML',
		'text' => $text,
		'reply_markup' => $keyboard->key_talebini_rangha() 
		]);
		
		$telegram->answerCallbackQuery([
		'callback_query_id' => $data->callback_query_id,
		'show_alert' => false,
		'text'=>"طالع بینی رنگ مورد نظر ارسال شد"
		]);
	}
	else
	{
		$database->update("users", [ 'last_request' => null ], [ 'id' => $data->user_id ]);
		$telegram->sendMessage([
		'chat_id' => $data->chat_id,
		'parse_mode' => 'HTML',
		'text' => "<a href='".$auth->path."/actions/talebini/sub-menu/images/color.jpg'>‌‌</a>"."بر اساس ماه تولدتان طالع خود را بخوانید.",
		'reply_markup' => $keyboard->key_talebini_rangha()
		]);
	}
?>

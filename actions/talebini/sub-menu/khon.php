<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	if ($data->callback_query)
	{
		if ($data->text == "A+")
		{
			$text= "⚪ گروه خونی A تیپ سرد"."\n"."حدود 34% از مردم دارای گروه خونی +A هستند."."\n"."⚪ خصوصیات:"."\n"."مطیع و آرام،دقیق،دلسوز و غم خوار،فداکار،مودب،درستکار،وفادار،احساساتی،درونگرا و کمی دستپاچه.حتی در مواقع آشوب و غضب آرام وخون سرد هستند."."\n"."نسبت به نظرات عمومی حساس اند."."\n"."اغلب درون گرا و دربرخورد با دیگران خجالتی وکمرو هستند یا حتی مریض به نظر می رسند کمی بدبین هستند."."\n"."برای روابط ارزش قائل بوده ونسبت به دیگران وفادارند."."\n"."نسبت به تغییرات تردید دارند."."\n"."دوست داران طبیعت وگریزان از جمعیت وشلوغی هستند."."\n"."به یک مکان شخصی یا پناهگاه امن ومخفی برای خود نیازمندند."."\n"."عموما دو دل و غیر قاطع اند."."\n"."برای حضوردر کارهای تیمی آماده هستند مخصوصا وقتی دستوری به آنها داده شود."."\n"."علاقه مند به ایجاد رابطه نیستند و تلاش چندانی هم برای اینکار نمی کنند.";
		}
		else if ($data->text == "A-")
		{
			$text= "⚪ گروه خونی A تیپ سرد"."\n"."حدود 6% از مردم دارای گروه خونی -A هستند."."\n"."⚪ خصوصیات:"."\n"."مطیع و آرام،دقیق،دلسوز و غم خوار،فداکار،مودب،درستکار،وفادار،احساساتی،درونگرا و کمی دستپاچه.حتی در مواقع آشوب و غضب آرام وخون سرد هستند."."\n"."نسبت به نظرات عمومی حساس اند."."\n"."اغلب درون گرا و دربرخورد با دیگران خجالتی وکمرو هستند یا حتی مریض به نظر می رسند کمی بدبین هستند."."\n"."برای روابط ارزش قائل بوده ونسبت به دیگران وفادارند."."\n"."نسبت به تغییرات تردید دارند."."\n"."دوست داران طبیعت وگریزان از جمعیت وشلوغی هستند."."\n"."به یک مکان شخصی یا پناهگاه امن ومخفی برای خود نیازمندند."."\n"."عموما دو دل و غیر قاطع اند."."\n"."برای حضوردر کارهای تیمی آماده هستند مخصوصا وقتی دستوری به آنها داده شود."."\n"."علاقه مند به ایجاد رابطه نیستند و تلاش چندانی هم برای اینکار نمی کنند.";
		}
		else if ($data->text == "B+")
		{
			$text= "⚪ گروه خونی B فعال"."\n"."حدود 9% از مردم دارای گروه خونی+B هستند."."\n"."⚪ خصوصیات:"."\n"."بشاش و خوشرو،خوش بین،فعال،حساس،مهربان،فراموش کار،آشفته،درهم وسازمان نیافته،پرسروصدا،خودپسندوخودبین،پرانرژی و جدی"."\n"."در راه رسیدن به هدف،معمولا جزو بهترین افراد تیم می شوند و افراد تکرویی هستند."."\n"."اغلب کارها رابا روشهای خودشان انجام می دهند و خود کفا هستند."."\n"."شخصیت های ماجراجو و دلیر،علاقه مند به داشتن یک راه مشخص و مخصوص،موجوداتی اجتماعی وعلاقه مند به مهمان داری هستند."."\n"."علاقه مند به حفظ روابط هستند و خودشان در این زمینه تلاش می کنند.";
		}
		else if ($data->text == "B-")
		{
			$text= "⚪ گروه خونی B فعال"."\n"."حدود 25% از مردم دارای گروه خونی -B هستند."."\n"."⚪ خصوصیات:"."\n"."بشاش و خوشرو،خوش بین،فعال،حساس،مهربان،فراموش کار،آشفته،درهم وسازمان نیافته،پرسروصدا،خودپسندوخودبین،پرانرژی و جدی"."\n"."در راه رسیدن به هدف،معمولا جزو بهترین افراد تیم می شوند و افراد تکرویی هستند."."\n"."اغلب کارها رابا روشهای خودشان انجام می دهند و خود کفا هستند."."\n"."شخصیت های ماجراجو و دلیر،علاقه مند به داشتن یک راه مشخص و مخصوص،موجوداتی اجتماعی وعلاقه مند به مهمان داری هستند."."\n"."علاقه مند به حفظ روابط هستند و خودشان در این زمینه تلاش می کنند.";
		}
		else if ($data->text == "AB+")
		{
			$text= "⚪ گروه AB فارغ از مراقبت وبی نیاز از توجه "."\n"."حدود 4% از مردم دارای گروه خونی+AB هستند."."\n"."⚪ خصوصیات:"."\n"."اجتماعی، سخت گیر نیستند،غمخوار و دلسوز،دیپلماتیک،اهل گشت وگذار،خلاق،غیر قابل پیش بینی،هنرمند،انعطاف پذیر،ترشرو ودرخود!مخلوطی از تضادها،خجالتی در مقابل بعضی ها ، بی باک وگستاخ با بعضی دیگر، برونگرا و درونگرا،گاهی غیر قابل پیش بینی است و گاهی ظاهرا بسیار آرام و خونسرد به نظر می رسند."."\n"."قدرت خلاقه زیادی دارند،توانا در پیدا کردن مشکلات و دور زدن آنها،علاقه مند به محیط شهری،به آسانی خسته می شوند."."\n"."به نظر می رسد که هر کاری که انجام می دهند از روی اجبار است."."\n"."هرگز کاری را برای قدردانی انجام نمی دهند."."\n"."اسرار آمیز بنظر می رسند."."\n"."در فعالیتهای اجتماعی می توانند هماهنگ ظاهر شوند."."\n"."علاقه مند به ایجاد رابطه نیستند و تلاش چندانی هم برای این کار نمی کنند.";
		}
		else if ($data->text == "AB-")
		{
			$text= "⚪ گروه AB فارغ از مراقبت وبی نیاز از توجه "."\n"."حدود 1% از مردم دارای گروه خونی -AB هستند."."\n"."⚪ خصوصیات:"."\n"."اجتماعی، سخت گیر نیستند،غمخوار و دلسوز،دیپلماتیک،اهل گشت وگذار،خلاق،غیر قابل پیش بینی،هنرمند،انعطاف پذیر،ترشرو ودرخود!مخلوطی از تضادها،خجالتی در مقابل بعضی ها ، بی باک وگستاخ با بعضی دیگر، برونگرا و درونگرا،گاهی غیر قابل پیش بینی است و گاهی ظاهرا بسیار آرام و خونسرد به نظر می رسند."."\n"."قدرت خلاقه زیادی دارند،توانا در پیدا کردن مشکلات و دور زدن آنها،علاقه مند به محیط شهری،به آسانی خسته می شوند."."\n"."به نظر می رسد که هر کاری که انجام می دهند از روی اجبار است."."\n"."هرگز کاری را برای قدردانی انجام نمی دهند."."\n"."اسرار آمیز بنظر می رسند."."\n"."در فعالیتهای اجتماعی می توانند هماهنگ ظاهر شوند."."\n"."علاقه مند به ایجاد رابطه نیستند و تلاش چندانی هم برای این کار نمی کنند.";
		}
		else if ($data->text == "O+")
		{
			$text= "⚪ گروه خونی O تیپ گرم"."\n"."حدود 38% از مردم دارای گروه خونی +O هستند."."\n"."⚪ خصوصیات:"."\n"."بی پروا،با اراده،مغرور،بخشنده،اجتماعی،با انرژی،برونگرا،رک و صریح،واقع گرا،نمایشی،عمومی،مثبت،مستقل،ریسک پذیر،نا فرمان،بی اعتبار،لجوج و خودمحور."."\n"."به آسانی دوست می شوند و با جریانات همراه شده و به فرصت ها چنگ می زنند."."\n"."برای شروع یک پروژه یا شکار یک ایده و نظر صریح هستند."."\n"."درفعالیت های سازمان یافته خوب عمل می کنند."."\n"."دربعضی موارد چندان دقیق نیستند و احساسات زیاد و قوی از خود نشان می دهند."."\n"."ممکن است به سرعت مخالفت عمیق خود را با یک نظر بیان کنند اما معمولا این مخالفت پایدار نیست."."\n"."کارگشایانی سنتی،محرک وکمی لاف زن هستند."."\n"."احساسات خود را خیلی نشان می دهند اما در برخورد با دیگر گروهای خونی این بیان اظهارات متغیر است."."\n"."نوعی ظرافت ذاتی وفطری دارند."."\n"."شخصیت های اجتماعی وپر زرق و برق هستند می توانند در حوادث و بحران ها سازگاری خوبی داشته باشند."."\n"."لغات و کلمات به آسانی به سراغ آنها می آیند."."\n"."خجالتی نیستند و رک و صریح احساسات درونیشان را فاش می کنند."."\n"."جاه طلب اند اما گاهی با جزییات سرگرم می شوند."."\n"."علاقمند به حفظ روابط هستند و خودشان در این زمینه تلاش می کنند.";
		}
		else if ($data->text == "O-")
		{
			$text= "⚪ گروه خونی O تیپ گرم"."\n"."حدود 6% از مردم دارای گروه خونی -O هستند."."\n"."⚪ خصوصیات:"."\n"."بی پروا،با اراده،مغرور،بخشنده،اجتماعی،با انرژی،برونگرا،رک و صریح،واقع گرا،نمایشی،عمومی،مثبت،مستقل،ریسک پذیر،نا فرمان،بی اعتبار،لجوج و خودمحور."."\n"."به آسانی دوست می شوند و با جریانات همراه شده و به فرصت ها چنگ می زنند."."\n"."برای شروع یک پروژه یا شکار یک ایده و نظر صریح هستند."."\n"."درفعالیت های سازمان یافته خوب عمل می کنند."."\n"."دربعضی موارد چندان دقیق نیستند و احساسات زیاد و قوی از خود نشان می دهند."."\n"."ممکن است به سرعت مخالفت عمیق خود را با یک نظر بیان کنند اما معمولا این مخالفت پایدار نیست."."\n"."کارگشایانی سنتی،محرک وکمی لاف زن هستند."."\n"."احساسات خود را خیلی نشان می دهند اما در برخورد با دیگر گروهای خونی این بیان اظهارات متغیر است."."\n"."نوعی ظرافت ذاتی وفطری دارند."."\n"."شخصیت های اجتماعی وپر زرق و برق هستند می توانند در حوادث و بحران ها سازگاری خوبی داشته باشند."."\n"."لغات و کلمات به آسانی به سراغ آنها می آیند."."\n"."خجالتی نیستند و رک و صریح احساسات درونیشان را فاش می کنند."."\n"."جاه طلب اند اما گاهی با جزییات سرگرم می شوند."."\n"."علاقمند به حفظ روابط هستند و خودشان در این زمینه تلاش می کنند.";
		}
		
		$telegram->editMessageText([
		'chat_id' => $data->chat_id,
		'message_id' => $data->message_id,
		'parse_mode' => 'HTML',
		'text' => $text,
		'reply_markup' => $keyboard->key_talebini_khon()
		]);
		
		$telegram->answerCallbackQuery([
		'callback_query_id' => $data->callback_query_id,
		'show_alert' => false,
		'text'=>"گروه خونی مورد نظر ارسال شد"
		]);
	}
	else
	{
		$database->update("users", [ 'last_request' => null ], [ 'id' => $data->user_id ]);
		$telegram->sendMessage([
		'chat_id' => $data->chat_id,
		'parse_mode' => 'HTML',
		'text' => "<a href='".$auth->path."/actions/talebini/sub-menu/images/khon.jpg'>‌‌</a>"."اکثر افراد شخصیت و رفتار های اشخاص را مربوط به گروه خونی شخص می دانند.\nاز طریق دکمه های زیر گروه خونی خود را انتخاب کنید.",
		'reply_markup' => $keyboard->key_talebini_khon()
		]);
	}
?>


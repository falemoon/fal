<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	if ($data->callback_query)
	{
		if ($data->text == "test5-1")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test5.jpg'>‌‌</a>"."انگشت شماره ۱:"."\n"." این انگشت نماد مسایل مادی و ثروت است و کسانی که این انگشت را انتخاب میکنند، اقتصاد دانان خوبی هستند و معمولا از نظر مالی در وضعیت خوبی قرار دارند.";
		}
		else if ($data->text == "test5-2")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test5.jpg'>‌‌</a>"."انگشت شماره ۲:"."\n"." این انگشت نماد کار میباشد و اشخاصی که به این انگشت اهمیت بیشتری میدهند انسانهای کاری هستند و بطور کلی وجدان کاری خوبی دارند و موفقیت زیادی در کارها دارند.";
		}
		else if ($data->text == "test5-3")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test5.jpg'>‌‌</a>"."انگشت شماره ۳:"."\n"." این انگشت میزان اهمیت به خود فرد را نشان میدهد، افرادی که این انگشت را انتخاب میکنند، در مورد همه چیز اول به خود اهمیت داده و تا حدودی خودپرست و خودخواه هستند.";
		}
		else if ($data->text == "test5-4")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test5.jpg'>‌‌</a>"."انگشت شماره ۴:"."\n"." این انگشت نماد محبت و عشق است و کسانی که این انگشت را انتخاب میکنند، انسانهای احساساتی و عاطفی هستند و همواره به دنبال محبت و خوشحال کردن دیگران هستند.";
		}
		else if ($data->text == "test5-5")
		{
			$text= "<a href='".$auth->path."/actions/test/sub-menu/images/test5.jpg'>‌‌</a>"."انگشت شماره ۵:"."\n"." این انگشت نماد خانواده و فرزند هست و کسانی که به این انگشت علاقمند هستند، افرادی هستند که به خانواده پایبند بوده و به زندگی مشترک و بطور کلی روابط بین افراد اهمیت می دهند.";
		}
		
		$telegram->editMessageText([
		'chat_id' => $data->chat_id,
		'message_id' => $data->message_id,
		'parse_mode' => 'HTML',
		'text' => $text,
		'reply_markup' => $keyboard->key_test_test5() 
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
		'text' => "<a href='".$auth->path."/actions/test/sub-menu/images/test5.jpg'>‌‌</a>"."با استفاده از عکس و انتخاب انگشت شخصیت خود را بشناسید.آیا تا به حال بطور دقیق به انگشتان دستان خود نگاه کرده اید؟ تا به حال فکر کرده اید که به کدامیک علاقه بیشتری نسبت به بقیه دارید؟ با دقت نگاه کنید، سپس توضیح مربوط به آن را بخوانید.",
		'reply_markup' => $keyboard->key_test_test5()
		]);
	}
?>


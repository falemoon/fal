<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	if ($data->callback_query)
	{
		$telegram->answerCallbackQuery([
		'callback_query_id' => $data->callback_query_id,
		'show_alert' => false,
		'text'=>"خیلی خوبه دوست من تست با موفقیت شروع شد 👌"
		]);
		
		$database->update("users", [ 'last_query' => 'p1' ], [ 'id' => $data->user_id ]);
		
		$p_id    = $database->select('users', ['p_id'], ['id' => $data->user_id]);
		$userID  = $database->select('porseshname', ['user_id'], ['id' => $p_id[0]['p_id']]);
		$name    = $database->select('users', ['name'], ['id' => $userID[0]['user_id']]);
		
		$telegram->editMessageText([
		'chat_id' => $data->chat_id,
		'message_id' => $data->message_id,
		'parse_mode' => 'HTML',
		'text' => "✅پاسخ هر سوال را به صورت متن ارسال کنید"."\n"."[1️⃣/5️⃣]"."\n".$name[0]['name']." را چقدر می شناسیش و تیکه کلامش چیه؟ 😊"
		]); 
	}
	else
	{
		$database->update("users", [ 'last_query' => 'p2' ], [ 'id' => $data->user_id ]);
		
		$p_id    = $database->select('users', ['p_id'], ['id' => $data->user_id]);
		$database->update("porseshname", [ 'a1' => $data->text ], [ 'id' => $p_id[0]['p_id'] ]);
		$userID  = $database->select('porseshname', ['user_id'], ['id' => $p_id[0]['p_id']]);
		$name    = $database->select('users', ['name'], ['id' => $userID[0]['user_id']]);
		
		$telegram->sendMessage([
		'chat_id' => $data->chat_id,
		'parse_mode' => 'HTML',
		'text' => "✅پاسخ هر سوال را به صورت متن ارسال کنید"."\n"."[2️⃣/5️⃣]"."\n"."چه چیزی ".$name[0]['name']." را ناراحت می کنه و خط قرمزش چیه؟ 🤔"
		]);
	}
?>
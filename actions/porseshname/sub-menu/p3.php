<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	
	$database->update("users", [ 'last_query' => 'p4' ], [ 'id' => $data->user_id ]);
	
	$p_id    = $database->select('users', ['p_id'], ['id' => $data->user_id]);
	$database->update("porseshname", [ 'a3' => $data->text ], [ 'id' => $p_id[0]['p_id'] ]);
	$userID  = $database->select('porseshname', ['user_id'], ['id' => $p_id[0]['p_id']]);
	$name    = $database->select('users', ['name'], ['id' => $userID[0]['user_id']]);
	
	$telegram->sendMessage([
	'chat_id' => $data->chat_id,
	'parse_mode' => 'HTML',
	'text' => "✅پاسخ هر سوال را به صورت متن ارسال کنید"."\n"."[4️⃣/5️⃣]"."\n"."کدوم جنبه از شخصیت و رفتار ".$name[0]['name']." را دوست داری؟ 🤔"
	]);
	
?>
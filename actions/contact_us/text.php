<?php
	/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	$telegram->sendMessage([
	'chat_id' => $data->rpto,
	'text' =>  $data->text,
	"parse_mode" =>"HTML",
	'reply_markup' => $keyboard->key_start()
	]);

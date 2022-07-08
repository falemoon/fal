<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../autoload.php';
	
	$link="https://t.me/".$auth->bot_Username."?start=";
	
	$telegram->sendPhoto([ 
	'chat_id' => $data->chat_id,
	'photo' =>  $auth->path.'/actions/link/banner1.jpg',
	'caption' =>  "کلی فال و طالع بینی و تست های شخصیت شناسی مختلف به صورت رایگان"."\n\n"."کافیه روی ربات زیر کلیک کنی تا بتونی طالع خودت رو ببینی. 😍👇"."\n". $link . $data->user_id ,
	"parse_mode" =>"HTML",
	'disable_web_page_preview' => 'true',
	//'reply_markup' => $keyboard->key_start()
	]);

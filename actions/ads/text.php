<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	for($y=0;$y<count($membersidd);$y++)
	{
		$telegram->sendMessage([
		'chat_id' => $membersidd[$y],
		'text' =>  $data->text,
		"parse_mode" =>"HTML"
		]);
		sleep(1);//sleep(3) == usleep(3 * 1000000) ==> 3 seconds
	}	
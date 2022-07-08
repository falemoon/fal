<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	for($y=0;$y<count($membersidd);$y++)
	{
		$telegram->forwardMessage([
		'chat_id' => $membersidd[$y],
		'from_chat_id' => $data->user_id,
		'message_id' => $data->message_id
		]);
		sleep(1);
	}	
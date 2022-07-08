<?php	
	/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	for($y=0;$y<count($membersidd);$y++)
	{
		$telegram->sendContact([
		'chat_id' => $membersidd[$y],
		'phone_number' =>  $data->contact_phone_number,
		'first_name' =>  $data->contact_first_name,
		'Last_name' =>  $data->contact_last_name,
		"parse_mode" =>"HTML"
		]);
		sleep(1);//sleep(3) == usleep(3 * 1000000) ==> 3 seconds
	}

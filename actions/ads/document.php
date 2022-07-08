<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/	
	if($data->caption=="" or $data->caption==null)
	{	
		for($y=0;$y<count($membersidd);$y++)
		{
			$telegram->sendDocument([
			'chat_id' => $membersidd[$y],
			'document' =>  $data->document_file_id,
			"parse_mode" =>"HTML"
			]);
			sleep(1);//sleep(3) == usleep(3 * 1000000) ==> 3 seconds
		}
	}
	else
	{
		for($y=0;$y<count($membersidd);$y++)
		{
			$telegram->sendDocument([
			'chat_id' => $membersidd[$y],
			'document' =>  $data->document_file_id,
			'caption' =>  $data->caption,
			"parse_mode" =>"HTML"
			]);
			sleep(1);//sleep(3) == usleep(3 * 1000000) ==> 3 seconds
		}
	}
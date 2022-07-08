<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	$photoid = json_encode($data->photo, JSON_PRETTY_PRINT);
	$photoidd = json_encode($photoid, JSON_PRETTY_PRINT); 
	$photoidd = str_replace('"[\n    {\n        \"file_id\": \"','',$photoidd);
	$pos = strpos($photoidd, '",\n');
	$pos = $pos -1;
	$substtr = substr($photoidd, 0, $pos);
	
	if($data->caption=="" or $data->caption==null)
	{	
		for($y=0;$y<count($membersidd);$y++)
		{
			$telegram->sendPhoto([
			'chat_id' => $membersidd[$y],
			'photo' =>  $substtr,
			"parse_mode" =>"HTML"
			]);
			sleep(1);//sleep(3) == usleep(3 * 1000000) ==> 3 seconds
		}
	}
	else
	{
		for($y=0;$y<count($membersidd);$y++)
		{
			$telegram->sendPhoto([
			'chat_id' => $membersidd[$y],
			'photo' =>  $substtr,
			'caption' =>  $data->caption,
			"parse_mode" =>"HTML"
			]);
			sleep(1);//sleep(3) == usleep(3 * 1000000) ==> 3 seconds
		}
	}

<?php
/*
? In The Name Of God 
? website ? http://FilePick.ir/
? Channel ? @FilePick
*/
	require_once dirname(__FILE__) . '/../../autoload.php';
	
	$text = $database->select('users', ['subgroups'], ['id' => $data->user_id]);
	
	$userInfo = $database->query(
	"SELECT id FROM subgroups WHERE team_leader_id = ".$data->user_id
	)->fetchAll();
	
	$out = '';
	for($i=0;$i<=sizeof($userInfo);$i++) 
	{
		$out .=  $userInfo[$i]['id'] ."\n";
	}
	
	$telegram->sendMessage([
	'chat_id' => $data->user_id,
	'parse_mode' => 'Markdown',
	'text' => '👥 ' . 'تعداد نفرات معرفی شده از طرف شما : `' . $text[0]['subgroups'] . '`'."\n".	'🎰 ' . 'شماره ردیف های شانس شما جهت شرکت در قرعه کشی :'."\n".'`' . $out . '`',
	'reply_markup' => $keyboard->profile()
	]);
	
	

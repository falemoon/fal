<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../autoload.php';
	if(in_array($data->user_id, $auth->admin_list))
	{
		if ( $constants->last_message === null ) 
		{
			$database->update("users", [ 'last_query' => 'ads' ], [ 'id' => $data->user_id ]);
			$content = [
			'chat_id' => $data->chat_id,
			'text' => "پيام خود را ارسال کنيد . . ."."\n"."⚠️پیام شما میتواند متن , عکس , ویدیو , فایل(گیف یا هر فایل دیگر) , وویس , آهنگ  و کانتکت باشد"."\n"."برای لغو ".$keyboard->buttons['go_back']." را انتخاب نمایید",
			'reply_markup' => $keyboard->go_back()
			];
			$telegram->sendMessage($content);
		}
		elseif ( $constants->last_message == 'ads' ) 
		{
			$database->update("users", [ 'last_query' => null ], [ 'id' => $data->user_id ]);
			
			if ( $data->text == $keyboard->buttons['go_back'] ) 
			{
				$telegram->sendMessage([
				'chat_id' => $data->user_id,
				'text' => "پيامي ارسال نشد. منوي اصلي:",
				'reply_markup' => $keyboard->key_start_admin()
				]);
			} 
			else 
			{
				$telegram->sendMessage([
				'chat_id' => $data->user_id,
				'text' =>  "ممکن است فرایند ارسال دقایقی طول بکشد..."."\n"."لطفا صبور باشید...",
				'reply_markup' => $keyboard->key_start_admin()
				]);
				
				$ttxtt = file_get_contents('config/pmembers.txt');
				$membersidd= explode("\n",$ttxtt);
				
				if(isset($data->text))
				{
					require_once 'actions/ads/text.php';
				}
				else if(isset($data->audio))
				{
					require_once 'actions/ads/audio.php';
				}
				else if(isset($data->document))
				{
					require_once 'actions/ads/document.php';
				}
				else if(isset($data->photo))
				{
					require_once 'actions/ads/photo.php';
				}
				else if(isset($data->sticker))
				{
					require_once 'actions/ads/sticker.php';
				}
				else if(isset($data->video))
				{
					require_once 'actions/ads/video.php';
				}
				else if(isset($data->voice))
				{
					require_once 'actions/ads/voice.php';
				}
				else if(isset($data->contact))
				{
					require_once 'actions/ads/contact.php';
				}
				else
				{
					require_once 'actions/ads/forward.php';
				}
				$memcout = count($membersidd)-1;
				
				$telegram->sendMessage([
				'chat_id' => $data->user_id,
				'text' =>  "پيام شما به  ".$memcout." مخاطب باموفقیت ارسال گردید.",
				'reply_markup' => $keyboard->key_start_admin()
				]);
			}
		}
	}
	else
	{
		$telegram->sendMessage([
		'chat_id' => $data->user_id,
		'text' =>  "متاسفانه شما اجازه دسترسی به این بخش را ندارید.",
		"parse_mode" =>"HTML",
		'reply_markup' => $keyboard->key_start()
		]);
	}

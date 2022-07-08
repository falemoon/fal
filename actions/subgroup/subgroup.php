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
			$database->update("users", [ 'last_query' => 'subgroup' ], [ 'id' => $data->user_id ]);
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'text' => "تعداد کاربر مدنظر که می بایست دعوت شوند را وارد کنید:"."\n"."تعداد کاربر مدنظر در حال حاضر :".file_get_contents("config/subgroups.txt")." نفر"."\n"."* چنانچه 0 وارد کنید این بخش غیرفعال می شود و نیازی برای دعوت کاربران دیگر نیست.",
			'reply_markup' => $keyboard->go_back()
			]); 
		}
		elseif ( $constants->last_message == 'subgroup' ) 
		{		
			if ( $data->text == $keyboard->buttons['go_back'] ) 
			{
				$database->update("users", [ 'last_query' => null ], [ 'id' => $data->user_id ]);
				
				$telegram->sendMessage([
				'chat_id' => $data->user_id,
				'text' => "گزینه مورد نظر خود را انتخاب کنید:",
				'reply_markup' => $keyboard->key_start_admin()
				]);
			}
			else 
			{
				if(is_numeric($data->text))
				{
					$database->update('users', ['last_query' => null], ['id' => $data->user_id]);	
					file_put_contents("config/subgroups.txt",$data->text);
					$telegram->sendMessage([
					'chat_id' => $data->user_id,
					'text' => "تغییرات با موفقیت اعمال شد."."\n"."گزینه مورد نظر خود را انتخاب کنید:",
					'reply_markup' => $keyboard->key_start_admin()
					]);
				}
				else
				{
					$database->update("users", [ 'last_query' => 'subgroup' ], [ 'id' => $data->user_id ]);
					
					$telegram->sendMessage([
					'chat_id' => $data->user_id,
					'text' => "تعداد کاربر مدنظر که می بایست دعوت شوند را وارد کنید:"."\n"."تعداد کاربر مدنظر در حال حاضر :".file_get_contents("config/subgroups.txt")." نفر"."\n"."* چنانچه 0 وارد کنید این بخش غیرفعال می شود و نیازی برای دعوت کاربران دیگر نیست.",
					'reply_markup' => $keyboard->go_back()
					]);
				}
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
?>

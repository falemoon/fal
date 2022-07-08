<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
	require_once dirname(__FILE__) . '/../../../autoload.php';
	
	if ( $constants->last_message === null ) 
	{
		$database->update("users", [ 'last_query' => 'italy' ], [ 'id' => $data->user_id ]);
		$telegram->sendMessage([
        'chat_id' => $data->chat_id,
		'text' => " آنچه در زیر می خوانید نوعی طالع بینی ایتالیایی است که با توجه به روز تولدتان تنظیم شده است. کافی است با توجه به روز تولد میلادیتان گروه خود را انتخاب کرده و فالتان را بخوانید. "."\n"."✅ لطفاً روز تولد خود را مطابق مثال و با اعداد انگلیسی تایپ و سپس ارسال کنید:"."\n"."به عنوان مثال : "."\n"."20",
        'reply_markup' => $keyboard->go_back()
		]); 
	}
	elseif ( $constants->last_message == 'italy' ) 
	{		
		if ( $data->text == $keyboard->buttons['go_back'] ) 
		{
			$database->update("users", [ 'last_query' => null ], [ 'id' => $data->user_id ]);
			
			$telegram->sendMessage([
			'chat_id' => $data->user_id,
			'text' => 'بخش مورد نظر خود را انتخاب نمایید:' ,
			'reply_markup' => $keyboard->key_talebini()
			]);
		}
		else 
		{
			if(is_numeric($data->text))
			{
				$database->update('users', ['last_query' => null], ['id' => $data->user_id]);	
				
				$A = array( 1, 6, 11, 16, 21, 26, 31);
				$B = array( 2, 7, 12, 17, 22, 27);
				$C = array( 3, 8, 13, 18, 23, 28);
				$D = array( 4, 9, 14, 19, 24, 29);
				$E = array( 5, 10, 15, 20, 25, 30); 
				
				if(in_array($data->text, $A))
				{
					$telegram->sendMessage([
					'chat_id' => $data->user_id,
					'text' => "🔠 گروه A :"."\n"."به عشق به عنوان مهمترین چیز در زندگی می نگرید و عاشقِ عاشق شدن هستید. عده ای از افراد این گروه به صداقت شخصی که به او علاقه مندند چندان اطمینانی ندارند. از بودن با دوستان لذت می برید و همواره سعی می کنید تا دوستی وظیفه شناس باشید."."\n"." به سختی میتوانید احساسات و عواطفتان را کنترل کنید، که البته گاه از نقاط ضعفتان محسوب می شود. کسی که بر قلب و فکرتان تاثیرگذار است، این روزها بسیار به شما کمک خواهد کرد.",
					'reply_markup' => $keyboard->key_talebini()
					]);
				}
				elseif(in_array($data->text, $B))
				{
					$telegram->sendMessage([
					'chat_id' => $data->user_id,
					'text' => "🔠 گروه B :"."\n"."رویاها و جاه طلبی هایتان از مهمترین مسائل زندگیتان به شمار می روند و شما قادرید هرکاری برای تحقق بخشیدن به آنها انجام دهید. به عشق اهمیت می دهید، اما ترجیح می دهید به دنبال شخصی کامل باشید. به سختی به دیگران اعتماد میکنید. به دوستانتان اهمیت می دهید، اما خیلی چیزها را از آنها پنهان می کنید."."\n"." شما اهل تفکر هستید و همواره هر دو روی سکه را می بینید. شما می توانید شریک زندگیتان را خوشبخت کنید.",
					'reply_markup' => $keyboard->key_talebini()
					]);
				}
				elseif(in_array($data->text, $C))
				{
					$telegram->sendMessage([
					'chat_id' => $data->user_id,
					'text' => "🔠 گروه C :"."\n"."شما همیشه تصمیم گیری های عقلانی را به تصمیم گیری های احساسی ترجیح می دهید، به همین علت از دوستان زیادی برخوردارید. به زندگی به عنوان یک هدیه ی الهی می نگرید."."\n"." گروهی از مردم هستند که ایدآل شما محسوب می شوند و شما مایلید تا مدت زمان زیادی را با آنها بگذرانید."."\n"." به خوبی می توانید احساسات خود را کنترل کنید اما گاهی تصمیم گیریهای شما اثر منفی بر شریک زندگی و یا دوستانتان می گذارد. بسیار علاقه مندید تا یک شریک زندگی خوب برای همسرتان باشید.",
					'reply_markup' => $keyboard->key_talebini()
					]);
				}
				elseif(in_array($data->text, $D))
				{
					$telegram->sendMessage([
					'chat_id' => $data->user_id,
					'text' => "🔠 گروه D :"."\n"."شما همیشه هدفی برای دنبال کردن در زندگی دارید و همواره آماده اید تا در برآوردن آ رزوهای آنها که دوستشان دارید، کمک کنید. دوستانتان اهمیت زیادی برایتان دارند و شما همیشه آماده ی کمک به آنها هستید."."\n"." به ندرت می توانید احساسات خود را کنترل کنید و به همین دلیل گاه مجبور می شوید تا دوباره کاری کنید.",
					'reply_markup' => $keyboard->key_talebini()
					]);
				}
				elseif(in_array($data->text, $E))
				{
					$telegram->sendMessage([
					'chat_id' => $data->user_id,
					'text' => "🔠 گروه E :"."\n"."از آن دسته آدم هایی هستید که دوست دارید عاشق باشید. تصمیم گیری های عاطفی را بر تصمیم گیری های عقلانی ترجیح می دهید. شما زندگی را فقط در خوش گذرانی می بینید و از طرفداران دوست یابی هستید."."\n"." رویاهای بسیاری در سر دارید، اما چندان در جهت تحقق آنها تلاش نمی کنید و شاید همین مسئله جزء نقاط ضعف شما باشد. با کسی که از نظر شما شخصی کامل است برخورد خواهید کرد .",
					'reply_markup' => $keyboard->key_talebini()
					]);
				}
				else
				{
					$database->update("users", [ 'last_query' => 'italy' ], [ 'id' => $data->user_id ]);
					
					$telegram->sendMessage([
					'chat_id' => $data->user_id,
					'text' => "✅ لطفاً روز تولد خود را مطابق مثال و با اعداد انگلیسی تایپ و سپس ارسال کنید:"."\n"."به عنوان مثال : "."\n"."20",
					'reply_markup' => $keyboard->go_back()
					]);
				}
			}
			else
			{
				$database->update("users", [ 'last_query' => 'italy' ], [ 'id' => $data->user_id ]);
				
				$telegram->sendMessage([
				'chat_id' => $data->user_id,
				'text' => "✅ لطفاً روز تولد خود را مطابق مثال و با اعداد انگلیسی تایپ و سپس ارسال کنید:"."\n"."به عنوان مثال : "."\n"."20",
				'reply_markup' => $keyboard->go_back()
				]);
			}
		}
	}
?>




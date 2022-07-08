<?php

	ignore_user_abort(1); // run script in background
	set_time_limit(0); // run script forever 	
	ini_set("log_errors", 0);
	require_once 'autoload.php';
	date_default_timezone_set('Asia/Tehran');
	
	if($data->user_id!=null)
	{
		$database->insert("users", [
		"id" => $data->user_id,
		"username" => $data->username,
		"first_name" => $data->first_name,
		"last_name" => $data->last_name,
		'date_created' => jdate("Y/n/d")
		]);
	}
	
	$inch = @file_get_contents("https://api.telegram.org/bot".$auth->bot_id."/getChatMember?chat_id=".$auth->CHANNEL_ID."&user_id=".$data->user_id);
	if (strpos($inch , '"status":"left"') !== false ) 
	{
		$id = str_replace("/start ","",$data->text);
		if (preg_match('/^(nta)(.*)/',$id))
		{
			require_once 'actions/porseshname/sub-menu/p0.php';
		}
		else if ($data->callback_query)
		{
			$telegram->answerCallbackQuery([
			'callback_query_id' => $data->callback_query_id,
			'show_alert' => false,
			'text'=>"ابتدا می بایست در کانال 'ترفند' عضو شوید."
			]);
		}
		else
		{
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'MarkDown',
			'disable_web_page_preview' => 'true',
			'text' => "سلام ".$data->first_name." عزیز 🌹"."\n"."این ربات از قوی ترین و فعال ترین ربات های تلگرام بوده که شمال چندین بخش انواع فال، انواع طالع بینی  و چندین تست شخصیت شناسی و پرسشنامه نظر بقیه در مورد شما چیه  می باشد که با استفاده از سیستم های به روز  تلگرام هر زمان که شما بخواهید امکان استفاده از امکانات ذکر شده را می دهد‌"."\n\n"."پس اگر عضو کانال `".$auth->CHANNEL_NAME."` نیستید ابتدا از طریق دکمه `".$keyboard->buttons['channel']."` عضو کانال شده و سپس بر روی دکمه `".$keyboard->buttons['joinChannel']."` کلیک کنید." ,
			'reply_markup' => $keyboard->key_channel($auth->CHANNEL_LINK) 
			]);
		}
	}
	else
	{
		if ($data->rpto != null && in_array($data->user_id, $auth->admin_list) ) 
		{
			if(isset($data->text))
			{
				require_once 'actions/contact_us/text.php';
			}
			else if(isset($data->document))
			{
				require_once 'actions/contact_us/document.php';
			}
			else if(isset($data->photo))
			{
				require_once 'actions/contact_us/photo.php';
			}
			else if(isset($data->video))
			{
				require_once 'actions/contact_us/video.php';
			}
			else if(isset($data->voice))
			{
				require_once 'actions/contact_us/voice.php';
			}
			
			$telegram->sendMessage([
			'chat_id' => $data->user_id,
			'text' =>  "پیام شما باموفقیت برای کاربر مورد نظر ارسال شد.",
			"parse_mode" =>"HTML",
			'reply_markup' => $keyboard->key_start_admin()
			]);
		} 		
		else if($data->callback_query)
		{
			switch ($data->text) 
			{
				case "joinChannel":
				require_once 'actions/start.php';
				break;
				
				case "startPorseshname":
				require_once 'actions/porseshname/sub-menu/p1.php';
				break;
				
				case $keyboard->buttons['fal_hafez_mani']:
				case $keyboard->buttons['fal_hafez_sher']:
				case $keyboard->buttons['fal_hafez']:
				case $keyboard->buttons['fal_hafez_o_shab_yalda']:
				case $keyboard->buttons['fal_hafez_about']:
				require_once 'actions/fal/sub-menu/hafez.php';
				break;
				
				case "stats-refresh":
				require_once 'actions/stats/stats.php';
				break;
				
				case "A+":
				case "A-":
				case "B+":
				case "B-":
				case "AB+":
				case "AB-":
				case "O+":
				case "O-":
				require_once 'actions/talebini/sub-menu/khon.php';
				break;
				
				case "santor":
				case "guitar":
				case "piano":
				case "setar":
				case "org":
				case "violon":
				case "daf":
				case "accardeun":
				case "sheypoor":
				require_once 'actions/talebini/sub-menu/music.php';
				break;
				
				case "ghahvehi":
				case "khakestari":
				case "asali":
				case "sabz":
				case "abi":
				case "meshki":
				require_once 'actions/fal/sub-menu/cheshm.php';
				break;
				
				case "orange":
				case "apple":
				case "pineapple":
				case "banana":
				case "coconuts":
				case "pear":
				case "cherry":
				case "grape":
				case "peach":
				require_once 'actions/talebini/sub-menu/miveha.php';
				break;
				
				case "c-farvardin":
				case "c-ordibehesht":
				case "c-khordad":
				case "c-tir":
				case "c-mordad":
				case "c-shahrivar":
				case "c-mehr":
				case "c-aban":
				case "c-azar":
				case "c-dey":
				case "c-bahman":
				case "c-esfand":
				require_once 'actions/talebini/sub-menu/rangha.php';
				break;
				
				case "as-farvardin":
				case "as-ordibehesht":
				case "as-khordad":
				case "as-tir":
				case "as-mordad":
				case "as-shahrivar":
				case "as-mehr":
				case "as-aban":
				case "as-azar":
				case "as-dey":
				case "as-bahman":
				case "as-esfand":
				require_once 'actions/talebini/sub-menu/adadshans.php';
				break;
				
				case "test1-1":
				case "test1-2":
				case "test1-3":
				case "test1-4":
				require_once 'actions/test/sub-menu/test1.php';
				break;
				
				case "test2-1":
				case "test2-2":
				case "test2-3":
				case "test2-4":
				case "test2-5":
				case "test2-6":
				case "test2-7":
				case "test2-8":
				case "test2-9":
				case "test2-10":
				case "test2-11":
				case "test2-12":
				require_once 'actions/test/sub-menu/test2.php';
				break;
				
				case "test3-1":
				case "test3-2":
				case "test3-3":
				case "test3-4":
				case "test3-5":
				case "test3-6":
				require_once 'actions/test/sub-menu/test3.php';
				break;
				
				case "test4-1":
				case "test4-2":
				case "test4-3":
				case "test4-4":
				require_once 'actions/test/sub-menu/test4.php';
				break;
				
				case "test5-1":
				case "test5-2":
				case "test5-3":
				case "test5-4":
				case "test5-5":
				require_once 'actions/test/sub-menu/test5.php';
				break;
				
				case "test6-1":
				case "test6-2":
				case "test6-3":
				case "test6-4":
				case "test6-5":
				require_once 'actions/test/sub-menu/test6.php';
				break;
				
				case "sang-farvardin":
				case "sang-ordibehesht":
				case "sang-khordad":
				case "sang-tir":
				case "sang-mordad":
				case "sang-shahrivar":
				case "sang-mehr":
				case "sang-aban":
				case "sang-azar":
				case "sang-dey":
				case "sang-bahman":
				case "sang-esfand":
				require_once 'actions/talebini/sub-menu/sang.php';
				break;
				
				case "mes-farvardin":
				case "mes-ordibehesht":
				case "mes-khordad":
				case "mes-tir":
				case "mes-mordad":
				case "mes-shahrivar":
				case "mes-mehr":
				case "mes-aban":
				case "mes-azar":
				case "mes-dey":
				case "mes-bahman":
				case "mes-esfand":
				require_once 'actions/talebini/sub-menu/mesri.php';
				break;
				
				case "h-mard":
				case "h-zan":
				case "hm-farvardin":
				case "hm-ordibehesht":
				case "hm-khordad":
				case "hm-tir":
				case "hm-mordad":
				case "hm-shahrivar":
				case "hm-mehr":
				case "hm-aban":
				case "hm-azar":
				case "hm-dey":
				case "hm-bahman":
				case "hm-esfand":
				case "hz-farvardin":
				case "hz-ordibehesht":
				case "hz-khordad":
				case "hz-tir":
				case "hz-mordad":
				case "hz-shahrivar":
				case "hz-mehr":
				case "hz-aban":
				case "hz-azar":
				case "hz-dey":
				case "hz-bahman":
				case "hz-esfand":
				require_once 'actions/talebini/sub-menu/hendi.php';
				break;
				
			}
		}
		else if ($constants->last_message !== null && $data->text != '/start') 
		{
			switch ($constants->last_message) 
			{
				case 'contact_us':
				require_once 'actions/contact_us/contact_us.php';
				break;
				case 'my_score':
				require_once 'actions/score/score.php';
				break;
				case 'chini':
				require_once 'actions/talebini/sub-menu/chini.php';
				break;
				case 'italy':
				require_once 'actions/talebini/sub-menu/italy.php';
				break;
				case 'hendi':
				require_once 'actions/talebini/sub-menu/hendi.php';
				break;
				case 'ads':
				require_once 'actions/ads/ads.php';
				break;
				case 'subgroup':
				require_once 'actions/subgroup/subgroup.php';
				break;
				case 'go':
				require_once 'actions/porseshname/sub-menu/go.php';
				break;
				case 'p1':
				require_once 'actions/porseshname/sub-menu/p1.php';
				break;
				case 'p2':
				require_once 'actions/porseshname/sub-menu/p2.php';
				break;
				case 'p3':
				require_once 'actions/porseshname/sub-menu/p3.php';
				break;
				case 'p4':
				require_once 'actions/porseshname/sub-menu/p4.php';
				break;
				case 'p5':
				require_once 'actions/porseshname/sub-menu/p5.php';
				break;
				
				default:
				require_once 'actions/start.php';
				break;
			}
		} 
		else
		{
			switch ($data->text) 
			{
				case '/start':
				case $keyboard->buttons['startAgain']:
				require_once 'actions/start.php';
				break;
				case '/stop':  
				require_once 'actions/stop.php';
				break;
				case '/panel':  
				require_once 'actions/panel/panel.php';
				break;
				case $keyboard->buttons['about']:
				require_once 'actions/about/about.php';
				break;
				case $keyboard->buttons['porseshname']:
				require_once 'actions/porseshname/porseshname.php';
				break;
				case $keyboard->buttons['go']:
				require_once 'actions/porseshname/sub-menu/go.php';
				break;
				case $keyboard->buttons['view']:
				require_once 'actions/porseshname/sub-menu/list.php';
				break; 
				case $keyboard->buttons['my_score']:
				require_once 'actions/score/score.php';
				break;
				case $keyboard->buttons['contact_us']:
				require_once 'actions/contact_us/contact_us.php';
				break;
				case $keyboard->buttons['help']:
				require_once 'actions/help/help.php';
				break;
				case $keyboard->buttons['ads']:
				require_once 'actions/ads/ads.php';
				break;
				case $keyboard->buttons['go_back_menu']:
				require_once 'actions/start.php';
				break;
				case '/link':
				case $keyboard->buttons['link']:
				require_once 'actions/link/link.php';
				break;
				case $keyboard->buttons['stats']:
				require_once 'actions/stats/stats.php';
				break;
				case $keyboard->buttons['fal']:
				require_once 'actions/fal/fal.php';
				break;
				case $keyboard->buttons['hafez']:
				require_once 'actions/fal/sub-menu/hafez.php';
				break;
				case $keyboard->buttons['cheshm']:
				require_once 'actions/fal/sub-menu/cheshm.php';
				break;
				case $keyboard->buttons['talebini']:
				require_once 'actions/talebini/talebini.php';
				break;
				case $keyboard->buttons['khon']:
				require_once 'actions/talebini/sub-menu/khon.php';
				break;
				case $keyboard->buttons['emza']:
				require_once 'actions/talebini/sub-menu/emza.php';
				break;
				case $keyboard->buttons['chini']:
				require_once 'actions/talebini/sub-menu/chini.php';
				break;
				case $keyboard->buttons['italy']:
				require_once 'actions/talebini/sub-menu/italy.php';
				break;
				case $keyboard->buttons['hendi']:
				require_once 'actions/talebini/sub-menu/hendi.php';
				break;
				case $keyboard->buttons['adadshans']:
				require_once 'actions/talebini/sub-menu/adadshans.php';
				break;
				case $keyboard->buttons['sang']:
				require_once 'actions/talebini/sub-menu/sang.php';
				break;
				case $keyboard->buttons['mesri']:
				require_once 'actions/talebini/sub-menu/mesri.php';
				break;
				case $keyboard->buttons['rangha']:
				require_once 'actions/talebini/sub-menu/rangha.php';
				break;
				case $keyboard->buttons['music']:
				require_once 'actions/talebini/sub-menu/music.php';
				break;
				case $keyboard->buttons['miveha']:
				require_once 'actions/talebini/sub-menu/miveha.php';
				break;
				case $keyboard->buttons['test']:
				require_once 'actions/test/test.php';
				break;
				case $keyboard->buttons['profile']:
				require_once 'actions/profile/profile.php';
				break;
				case $keyboard->buttons['subgroup']:
				require_once 'actions/subgroup/subgroup.php';
				break;
				case $keyboard->buttons['test1']:
				require_once 'actions/test/sub-menu/test1.php';
				break;
				case $keyboard->buttons['test2']:
				require_once 'actions/test/sub-menu/test2.php';
				break;
				case $keyboard->buttons['test3']:
				require_once 'actions/test/sub-menu/test3.php';
				break;
				case $keyboard->buttons['test4']:
				require_once 'actions/test/sub-menu/test4.php';
				break;
				case $keyboard->buttons['test5']:
				require_once 'actions/test/sub-menu/test5.php';
				break;
				case $keyboard->buttons['test6']:
				require_once 'actions/test/sub-menu/test6.php';
				break;
				
				default:
				require_once 'actions/start.php';
				break;
			}
		}
	}												
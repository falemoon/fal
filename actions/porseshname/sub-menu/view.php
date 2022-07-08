<?php
/*
? In The Name Of God 
? website ? http://FilePick.ir/
? Channel ? @FilePick
*/
	/*require_once dirname(__FILE__) . '/../../autoload.php';
	require_once dirname(__FILE__) . '/../../lib/functions.php';
	
	if(!$data->callback_query)
	{
		$database->update("users", ['last_query' => null], ['id' => $data->user_id]);
		
		$result = $dbuser->query("SELECT * FROM porseshname inner join users on porseshname.answer_id=users.id WHERE porseshname.user_id =".$data->user_id." and porseshname.status=1") or die("0");
		if($result->num_rows > 0)
		{
			for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
			
			$name = $database->select('users', ['name'], ['id' => $data->user_id]);
			
			$text= "🗣 ارسال شده از طرف ".$set['0']['first_name']." ".$set['0']['last_name']."\n\n"."🔘 ".$name['0']['name']."  را چقدر می شناسیش و تیکه کلامش چیه؟ 😊"."\n"."✅ پاسخ : ".$set['0']['a1']."\n\n"."🔘چه چیزی ".$name['0']['name']." را ناراحت می کنه و خط قرمزش چیه؟ 🤔"."\n"."✅ پاسخ : ".$set['0']['a2']."\n\n"."🔘 چه حسی نسبت به ".$name['0']['name']." داری و ته دلت چی مونده که هنوز بهش نگفتی؟🤔"."\n"."✅ پاسخ : ".$set['0']['a3']."\n\n"."🔘کدوم جنبه از شخصیت و رفتار ".$name['0']['name']." را دوست داری؟ 🤔"."\n"."✅ پاسخ : ".$set['0']['a4']."\n\n"."🔘 دوست داری با ".$name['0']['name']." به مسافرت بری؟ اگه جوابت مثبته کجا دوست داری بری باهاش؟ 😬"."\n"."✅ پاسخ : ".$set['0']['a5'];
			
			$json = sm($data->chat_id, $text);
			$menu[] = array(
			array("text" => "▶️ بعدی","callback_data" => "next-" . $json['result']['message_id'] . "-0")
			);
			
			em($data->chat_id, $json['result']['message_id'], $text, $menu, true);
		} 
		else 
		{
			$telegram->sendMessage([
			'chat_id' => $data->chat_id,
			'parse_mode' => 'Markdown', 
			'text' => "هنوز کسی پرسشنامه رو برات تکمیل نکرده"."\n"."اول باید لینک پرسشنامه ات رو برای دوستات بفرستی تا تکمیل کنند.",
			'reply_markup' => $keyboard->key_porseshname()
			]);
		}
	}
	else
	{
		/*$textalert = "";
		$alert = false;
		$data_inline = explode("-", $data->text);
		$result = $dbuser->query("SELECT * FROM product where status=1 ORDER BY id DESC") or die("0");
		for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
		if($data_inline[0] == "next")
		{
			$i = $data_inline[2] + 1;
			if($set[$i]['name'] == null)
			{
				$text = "\xF0\x9F\x94\x9A آیتم دیگری یافت نشد!";
				$menu[] = array(array(
				"text" => "◀️ قبلی",
				"callback_data" => "back-" . $data_inline[1] . "-" . $i));
			}
			else 
			{
				$text="<a href='".$set[$i]['image']."'>‌‌</a>"."📽 دانلود فیلم ".$set[$i]['name']."\n".
			"👁‍🗨 <a href='".$auth->CHANNEL_LINK."'>‌‌اختصاصی ".$auth->CHANNEL_NAME."</a>"."\n".
				"🎬 کارگردان: ".$set[$i]['director']."\n".
				"📆 اکران: ".$set[$i]['year']."\n".
				"⭐️ ستارگان: ".$set[$i]['actors']."\n".
				"🌍 محصول کشور: ".$set[$i]['product_city']."\n".
				"🎥 ژانر: ".$set[$i]['genre']." \n".
				"⏱ مدت زمان: ".$set[$i]['duration']." \n".
				"🏆 جوایز: نامزد 1 بفتا.  3 برد و 7 نامزدی"."\n".
				"👈 خلاصه داستان: ".$set[$i]['description']."\n\n".
				"🍿 IMDb: 6.5 <a href='http://www.imdb.com/title/tt3631112'>‌‌Link</a>"."\n".
				"🏆 امتیاز: ".$set[$i]['score']." از 10"."\n".
				"👁‍ 🗨Metacritic: 48%"."\n".
				"🍅 Rotten Tomatoes: 44%"."\n".
				"◀ عوامل دوبله: "."\n".
				"🗣 مدیر دوبلاژ: ".$set[$i]['dubbing_director']."\n".
				"🎤 گویندگان: ".$set[$i]['speakers']."\n\n".
				"📽 Release: BluRay "."\n".
				"🎬 <a href='".$set[$i]['1080p']."'>‌‌1080p HDC</a> • 12.9 GB"."\n".
				"🎬 <a href='http://7hg.ir/2pAd7bO'>1080p AdiT</a> • 6.03 GB"."\n".
				"🎬 <a href='http://7hg.ir/2qVIKl4'>‌‌1080p JYK</a> • 2.82 GB"."\n".
				"🎬 <a href='http://7hg.ir/2qW9vpi'>‌‌1080p ShAaNiG</a> • 2.19 GB"."\n".
				"🎬 <a href='http://7hg.ir/2qW3bhH'>‌‌1080p RARBG</a> • 2.14 GB"."\n".
				"🎬 <a href='http://7hg.ir/2pAdbIT'>‌‌1080p MkvCage</a> • 2.10 GB"."\n".
				"🎬 <a href='http://7hg.ir/2qVWYlO'>‌‌1080p PSA</a> • 1.73 GB"."\n".
				"🎬 <a href='http://7hg.ir/2pAdh2X'>‌‌1080p Ganool</a> • 1.60 GB"."\n\n".
				"🎥 <a href='".$set[$i]['720p']."'>720p</a> • 5.49 GB"."\n".
				"🎥 <a href='http://7hg.ir/2qVVfwU'>720p AdiT</a> • 3.32 GB"."\n".
				"🎥 <a href='http://7hg.ir/2qVVeZS'>720p ShAaNiG</a> • 1.10 GB"."\n".
				"🎥 <a href='http://7hg.ir/2qVILp8'>720p Ganool</a> • 952 MB"."\n\n".
				"📽 <a href='http://7hg.ir/2pAmbgX'>X265 1080p 30nama</a> • 2.24 GB"."\n".
				"📽 <a href='http://7hg.ir/2pAnbSo'>X265 720p 30nama</a> • 794 MB"."\n".
				"📽 <a href='http://7hg.ir/2pzYrcQ'>X265 720p MkvCage</a> • 754 MB"."\n\n".
				"⚠️ <a href='https://telegram.me/Hollywood_Group/12104'>راهنمای دانلود کیفیت های مختلف</a>"."\n\n".
				"🇮🇷 <a href='".$set[$i]['dubbed']."'>زیرنویس فارسی</a>"."\n\n".
				"📽 <a href='".$set[$i]['trailer']."'>Trailer</a>"."\n\n".
				"🆔 @".$auth->bot_Username;
				
				$menu[] = array(
				array(
				"text" => "◀️ قبلی",
				"callback_data" => "back-" . $data_inline[1] . "-" . $i),
				array(
				"text" => "▶️ بعدی",
				"callback_data" => "next-" . $data_inline[1] . "-" . $i));
			}
			
			em($data->user_id, $data_inline[1], $text, $menu, true);
			acq($data->callback_query_id, $textalert, $alert);
		}
		else if($data_inline[0] == "back")
		{
			$i = $data_inline[2] - 1;
			
			$text="<a href='".$set[$i]['image']."'>‌‌</a>"."📽 دانلود فیلم ".$set[$i]['name']."\n".
			"👁‍🗨 <a href='".$auth->CHANNEL_LINK."'>‌‌اختصاصی ".$auth->CHANNEL_NAME."</a>"."\n".
			"🎬 کارگردان: ".$set[$i]['director']."\n".
			"📆 اکران: ".$set[$i]['year']."\n".
			"⭐️ ستارگان: ".$set[$i]['actors']."\n".
			"🌍 محصول کشور: ".$set[$i]['product_city']."\n".
			"🎥 ژانر: ".$set[$i]['genre']." \n".
			"⏱ مدت زمان: ".$set[$i]['duration']." \n".
			"🏆 جوایز: نامزد 1 بفتا.  3 برد و 7 نامزدی"."\n".
			"👈 خلاصه داستان: ".$set[$i]['description']."\n\n".
			"🍿 IMDb: 6.5 <a href='http://www.imdb.com/title/tt3631112'>‌‌Link</a>"."\n".
			"🏆 امتیاز: ".$set[$i]['score']." از 10"."\n".
			"👁‍ 🗨Metacritic: 48%"."\n".
			"🍅 Rotten Tomatoes: 44%"."\n".
			"◀ عوامل دوبله: "."\n".
			"🗣 مدیر دوبلاژ: ".$set[$i]['dubbing_director']."\n".
			"🎤 گویندگان: ".$set[$i]['speakers']."\n\n".
			"📽 Release: BluRay "."\n".
			"🎬 <a href='".$set[$i]['1080p']."'>‌‌1080p HDC</a> • 12.9 GB"."\n".
			"🎬 <a href='http://7hg.ir/2pAd7bO'>1080p AdiT</a> • 6.03 GB"."\n".
			"🎬 <a href='http://7hg.ir/2qVIKl4'>‌‌1080p JYK</a> • 2.82 GB"."\n".
			"🎬 <a href='http://7hg.ir/2qW9vpi'>‌‌1080p ShAaNiG</a> • 2.19 GB"."\n".
			"🎬 <a href='http://7hg.ir/2qW3bhH'>‌‌1080p RARBG</a> • 2.14 GB"."\n".
			"🎬 <a href='http://7hg.ir/2pAdbIT'>‌‌1080p MkvCage</a> • 2.10 GB"."\n".
			"🎬 <a href='http://7hg.ir/2qVWYlO'>‌‌1080p PSA</a> • 1.73 GB"."\n".
			"🎬 <a href='http://7hg.ir/2pAdh2X'>‌‌1080p Ganool</a> • 1.60 GB"."\n\n".
			"🎥 <a href='".$set[$i]['720p']."'>720p</a> • 5.49 GB"."\n".
			"🎥 <a href='http://7hg.ir/2qVVfwU'>720p AdiT</a> • 3.32 GB"."\n".
			"🎥 <a href='http://7hg.ir/2qVVeZS'>720p ShAaNiG</a> • 1.10 GB"."\n".
			"🎥 <a href='http://7hg.ir/2qVILp8'>720p Ganool</a> • 952 MB"."\n\n".
			"📽 <a href='http://7hg.ir/2pAmbgX'>X265 1080p 30nama</a> • 2.24 GB"."\n".
			"📽 <a href='http://7hg.ir/2pAnbSo'>X265 720p 30nama</a> • 794 MB"."\n".
			"📽 <a href='http://7hg.ir/2pzYrcQ'>X265 720p MkvCage</a> • 754 MB"."\n\n".
			"⚠️ <a href='https://telegram.me/Hollywood_Group/12104'>راهنمای دانلود کیفیت های مختلف</a>"."\n\n".
			"🇮🇷 <a href='".$set[$i]['dubbed']."'>زیرنویس فارسی</a>"."\n\n".
			"📽 <a href='".$set[$i]['trailer']."'>Trailer</a>"."\n\n".
			"🆔 @".$auth->bot_Username;
			
			if($i == 0)
			{
				$menu[] = array(
				array(
				"text" => "▶️ بعدی",
				"callback_data" => "next-" . $data_inline[1] . "-" . $i));
			} 
			else
			{
				$menu[] = array(
				array(
				"text" => "◀️ قبلی",
				"callback_data" => "back-" . $data_inline[1] . "-" . $i),
				array(
				"text" => "▶️ بعدی",
				"callback_data" => "next-" . $data_inline[1] . "-" . $i));
			}
			
			em($data->user_id, $data_inline[1], $text, $menu, true);
			acq($data->callback_query_id, $textalert, $alert);
		}  */
	}			*/										
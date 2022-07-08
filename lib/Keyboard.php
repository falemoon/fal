<?php

	class keyboard
	{
		public $buttons = [
        'contact_us'                    => '☎ پشتیبانی',
        'help'                          => 'ℹ️ راهنما',
        'refresh'                       => '🔄 به روزرسانی',
        'export-txt'                    => '📃 تکست',
        'export-csv'                    => '📑 اکسل',
        'export-pdf'                    => '📄 پی دی اف',
        'ads'                           => '📬 ارسال تبلیغات',
        'channel'                       => '📣 کانال تلگرام',
        'link'                          => '🔗 لینک اختصاصی',
        'joinChannel'                   => '🤗 عضو شدم 🤗',
        'startAgain'                    => 'شروع مجدد',
        'startPorseshname'              => 'شروع پرسشنامه',
        'mard'                          => '👨🏻‍ مرد',
        'zan'                           => '👩🏻‍ زن',
        'fal'                           => '🀄️ فال',
        'cheshm'                        => '👀 رنگ چشم',
        'talebini'                      => '♋ طالع بینی',
        'chini'                         => '🎎 چینی',
        'mesri'                         => '👨🏽‍ مصری',
        'hendi'                         => '👳🏾‍ هندی',
        'italy'                         => '👲‍ ایتالیایی',
        'khon'                          => '💉 گروه خونی',
        'music'                         => '🎼 سازهای موسیقی',
        'sang'                          => '🗿 سنگ ماه تولد',
        'miveha'                        => '🍌 میوه ها',
        'adadshans'                     => '🎰 اعداد شانس',
        'emza'                          => '✍️ امضا',
        'rangha'                        => '🎨 رنگ ها', 
        'test'                          => '👨‍👨‍👧‍👧 شخصیت شناسی',
        'test1'                         => '🤡 شخص احمق',
        'test2'                         => '🛌 مدل خواب',
        'test3'                         => '🚪 درب',
        'test4'                         => '✋️ کف دست',
        'test5'                         => '🖐 انگشتان دستان',
        'test6'                         => '💺 حالت نشستن',
        'porseshname'                   => '🤔 دوستانتان چه نظری نسبت به شما دارند؟',
        'stats'                         => '📈 آمار کاربران',
        'subgroup'                      => '👨‍👨‍👧‍👦 تعداد کاربران مدنظر',
        'profile'                       => '👨‍ پروفایل کاربری',
        'my_score'                      => '👨‍👨‍👧‍👦 زیرمجموعه من',
        'go_back_menu'                  => '🏚 منوی اصلی',
        'score_bot'                     => '💎 امتیاز به ربات',
        'hafez'                         => '📖 فال حافظ',
        'fal_hafez'                     => '📖 نیت کرده و سپس لمس کنید',
        'fal_hafez_about'               => '📖 درباره حافظ شیرازی',
        'fal_hafez_o_shab_yalda'        => '📖 فال حافظ و شب یلدا',
        'fal_hafez_mani'                => '📖 تفسیر',
        'fal_hafez_sher'                => '📖 شعر',
        'go'                            => '📝 برو بریم',
        'view'                          => '📜 نمایش پاسخ ها',
        'go_back'                       => '➡️ بازگشت',
        'about'                         => '🤖 درباره ربات',
		];
		
	
		public function key_start()
		{
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['porseshname'] . '"
			],
			[
			"' . $this->buttons['fal'] . '",
			"' . $this->buttons['talebini'] . '"
			],
			[
			"' . $this->buttons['profile'] . '",
			"' . $this->buttons['test'] . '"
			],
			[
			"' . $this->buttons['about'] . '",
			"' . $this->buttons['contact_us'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : true 
			}
			}';
		}
		
		public function key_channel($ch_link)
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>$this->buttons['joinChannel'],'callback_data'=>"joinChannel"],
			['text'=>$this->buttons['channel'],'url'=>$ch_link]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_stats()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>$this->buttons['refresh'],'callback_data'=>"stats-refresh"]
			]
			)
			);
			return  json_encode($keyboard);
		}
	
		
		public function key_start_admin()
		{
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['ads'] . '"
			],
			[
			"' . $this->buttons['subgroup'] . '",
			"' . $this->buttons['stats'] . '"
			],
			[
			"' . $this->buttons['go_back_menu'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : false
			}
			}';
		}
	
		
		public function key_start_admin2()
		{
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['ads'] . '"
			],
			[
			"' . $this->buttons['help'] . '",
			"' . $this->buttons['stats'] . '"
			],
			[
			"' . $this->buttons['subgroup'] . '"
			],
			[
			"' . $this->buttons['go_back_menu'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : true
			}
			}';
		}
		
		
		public function key_stop()
		{ 
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['startAgain'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : true
			}
			}';
		}
		
		
		public function key_start_Porseshname()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>$this->buttons['startPorseshname'],'callback_data'=>"startPorseshname"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function go_back()
		{
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['go_back'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : true
			}
			}';
		}
		
		
		public function key_porseshname()
		{
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['view'] . '",
			"' . $this->buttons['go'] . '"
			],
			[
			"' . $this->buttons['go_back_menu'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : true
			}
			}';
		}
		
		
		public function profile()
		{
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['my_score'] . '",
			"' . $this->buttons['link'] . '"
			],
			[
			"' . $this->buttons['go_back_menu'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : true
			}
			}';
		}
		
		
		public function key_test()
		{
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['test2'] . '",
			"' . $this->buttons['test1'] . '"
			],
			[
			"' . $this->buttons['test4'] . '",
			"' . $this->buttons['test3'] . '"
			],
			[
			"' . $this->buttons['test6'] . '",
			"' . $this->buttons['test5'] . '"
			],
			[
			"' . $this->buttons['go_back_menu'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : true
			}
			}';
		}
		
		
		public function key_test_test1()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"1",'callback_data'=>"test1-1"],
			['text'=>"2",'callback_data'=>"test1-2"],
			['text'=>"3",'callback_data'=>"test1-3"],
			['text'=>"4",'callback_data'=>"test1-4"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_test_test2()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"مدل 3",'callback_data'=>"test2-3"],
			['text'=>"مدل 2",'callback_data'=>"test2-2"],
			['text'=>"مدل 1",'callback_data'=>"test2-1"]
			],
			[
			['text'=>"مدل 6",'callback_data'=>"test2-6"],
			['text'=>"مدل 5",'callback_data'=>"test2-5"],
			['text'=>"مدل 4",'callback_data'=>"test2-4"]
			],
			[
			['text'=>"مدل 9",'callback_data'=>"test2-9"],
			['text'=>"مدل 8",'callback_data'=>"test2-8"],
			['text'=>"مدل 7",'callback_data'=>"test2-7"]
			],
			[
			['text'=>"مدل 12",'callback_data'=>"test2-12"],
			['text'=>"مدل 11",'callback_data'=>"test2-11"],
			['text'=>"مدل 10",'callback_data'=>"test2-10"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_test_test3()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"درب 3",'callback_data'=>"test3-3"],
			['text'=>"درب 2",'callback_data'=>"test3-2"],
			['text'=>"درب 1",'callback_data'=>"test3-1"]
			],
			[
			['text'=>"درب 6",'callback_data'=>"test3-6"],
			['text'=>"درب 5",'callback_data'=>"test3-5"],
			['text'=>"درب 4",'callback_data'=>"test3-4"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_test_test4()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"مستطیل",'callback_data'=>"test4-2"],
			['text'=>"دایره",'callback_data'=>"test4-1"]
			],
			[
			['text'=>"مربع",'callback_data'=>"test4-4"],
			['text'=>"مثلث",'callback_data'=>"test4-3"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_test_test5()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"انگشت 3",'callback_data'=>"test5-3"],
			['text'=>"انگشت 2",'callback_data'=>"test5-2"],
			['text'=>"انگشت 1",'callback_data'=>"test5-1"]
			],
			[
			['text'=>"انگشت 5",'callback_data'=>"test5-5"],
			['text'=>"انگشت 4",'callback_data'=>"test5-4"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_test_test6()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"مدل C",'callback_data'=>"test6-3"],
			['text'=>"مدل B",'callback_data'=>"test6-2"],
			['text'=>"مدل A",'callback_data'=>"test6-1"]
			],
			[
			['text'=>"مدل E",'callback_data'=>"test6-5"],
			['text'=>"مدل D",'callback_data'=>"test6-4"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini()
		{
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['chini'] . '",
			"' . $this->buttons['mesri'] . '"
			],
			[
			"' . $this->buttons['hendi'] . '",
			"' . $this->buttons['italy'] . '"
			],
			[
			"' . $this->buttons['khon'] . '",
			"' . $this->buttons['music'] . '"
			],
			[
			"' . $this->buttons['miveha'] . '",
			"' . $this->buttons['adadshans'] . '"
			],
			[
			"' . $this->buttons['emza'] . '",
			"' . $this->buttons['rangha'] . '"
			],
			[
			"' . $this->buttons['go_back_menu'] . '",
			"' . $this->buttons['sang'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : true
			}
			}';
		}
		
		
		public function key_talebini_khon()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"A+",'callback_data'=>"A+"],
			['text'=>"A-",'callback_data'=>"A-"],
			['text'=>"B+",'callback_data'=>"B+"],
			['text'=>"B-",'callback_data'=>"B-"]
			],
			[
			['text'=>"O+",'callback_data'=>"O+"],
			['text'=>"O-",'callback_data'=>"O-"],
			['text'=>"AB+",'callback_data'=>"AB+"],
			['text'=>"AB-",'callback_data'=>"AB-"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini_music()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"سنتور",'callback_data'=>"santor"],
			['text'=>"گیتار",'callback_data'=>"guitar"],
			['text'=>"پیانو",'callback_data'=>"piano"]
			],
			[
			['text'=>"سه تار",'callback_data'=>"setar"],
			['text'=>"ارگ",'callback_data'=>"org"],
			['text'=>"ویولون",'callback_data'=>"violon"]
			],
			[
			['text'=>"دف",'callback_data'=>"daf"],
			['text'=>"آکاردئون",'callback_data'=>"accardeun"],
			['text'=>"شیپور",'callback_data'=>"sheypoor"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini_cheshm()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"قهوه ای",'callback_data'=>"ghahvehi"],
			['text'=>"خاکستری",'callback_data'=>"khakestari"],
			['text'=>"عسلی",'callback_data'=>"asali"]
			],
			[
			['text'=>"سبز",'callback_data'=>"sabz"],
			['text'=>"آبی",'callback_data'=>"abi"],
			['text'=>"مشکی",'callback_data'=>"meshki"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini_mive()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"🍊 پرتقال",'callback_data'=>"orange"],
			['text'=>"🍏 سیب",'callback_data'=>"apple"],
			['text'=>"🍍 آناناس",'callback_data'=>"pineapple"]
			],
			[
			['text'=>"🍌 موز",'callback_data'=>"banana"],
			['text'=>"🌰 نارگیل",'callback_data'=>"coconuts"],
			['text'=>"🍐 گلابی",'callback_data'=>"pear"]
			],
			[
			['text'=>"🍒 گیلاس",'callback_data'=>"cherry"],
			['text'=>"🍇 انگور سیاه",'callback_data'=>"grape"],
			['text'=>"🍑 هلو",'callback_data'=>"peach"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini_rangha()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"🌸 خرداد",'callback_data'=>"c-khordad"],
			['text'=>"🌸 اردیبهشت",'callback_data'=>"c-ordibehesht"],
			['text'=>"🌸 فروردین",'callback_data'=>"c-farvardin"]
			],
			[
			['text'=>"🌞 شهریور",'callback_data'=>"c-shahrivar"],
			['text'=>"🌞 مرداد",'callback_data'=>"c-mordad"],
			['text'=>"🌞 تیر",'callback_data'=>"c-tir"]
			],
			[
			['text'=>"🍂 آذر",'callback_data'=>"c-azar"],
			['text'=>"🍂 آبان",'callback_data'=>"c-aban"],
			['text'=>"🍂 مهر",'callback_data'=>"c-mehr"]
			],
			[
			['text'=>"❄ اسفند",'callback_data'=>"c-esfand"],
			['text'=>"❄ بهمن",'callback_data'=>"c-bahman"],
			['text'=>"❄ دی",'callback_data'=>"c-dey"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini_sang()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"🌸 خرداد",'callback_data'=>"sang-khordad"],
			['text'=>"🌸 اردیبهشت",'callback_data'=>"sang-ordibehesht"],
			['text'=>"🌸 فروردین",'callback_data'=>"sang-farvardin"]
			],
			[
			['text'=>"🌞 شهریور",'callback_data'=>"sang-shahrivar"],
			['text'=>"🌞 مرداد",'callback_data'=>"sang-mordad"],
			['text'=>"🌞 تیر",'callback_data'=>"sang-tir"]
			],
			[
			['text'=>"🍂 آذر",'callback_data'=>"sang-azar"],
			['text'=>"🍂 آبان",'callback_data'=>"sang-aban"],
			['text'=>"🍂 مهر",'callback_data'=>"sang-mehr"]
			],
			[
			['text'=>"❄ اسفند",'callback_data'=>"sang-esfand"],
			['text'=>"❄ بهمن",'callback_data'=>"sang-bahman"],
			['text'=>"❄ دی",'callback_data'=>"sang-dey"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini_adadshans()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"🌸 خرداد",'callback_data'=>"as-khordad"],
			['text'=>"🌸 اردیبهشت",'callback_data'=>"as-ordibehesht"],
			['text'=>"🌸 فروردین",'callback_data'=>"as-farvardin"]
			],
			[
			['text'=>"🌞 شهریور",'callback_data'=>"as-shahrivar"],
			['text'=>"🌞 مرداد",'callback_data'=>"as-mordad"],
			['text'=>"🌞 تیر",'callback_data'=>"as-tir"]
			],
			[
			['text'=>"🍂 آذر",'callback_data'=>"as-azar"],
			['text'=>"🍂 آبان",'callback_data'=>"as-aban"],
			['text'=>"🍂 مهر",'callback_data'=>"as-mehr"]
			],
			[
			['text'=>"❄ اسفند",'callback_data'=>"as-esfand"],
			['text'=>"❄ بهمن",'callback_data'=>"as-bahman"],
			['text'=>"❄ دی",'callback_data'=>"as-dey"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini_mesri()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"🌸 خرداد",'callback_data'=>"mes-khordad"],
			['text'=>"🌸 اردیبهشت",'callback_data'=>"mes-ordibehesht"],
			['text'=>"🌸 فروردین",'callback_data'=>"mes-farvardin"]
			],
			[
			['text'=>"🌞 شهریور",'callback_data'=>"mes-shahrivar"],
			['text'=>"🌞 مرداد",'callback_data'=>"mes-mordad"],
			['text'=>"🌞 تیر",'callback_data'=>"mes-tir"]
			],
			[
			['text'=>"🍂 آذر",'callback_data'=>"mes-azar"],
			['text'=>"🍂 آبان",'callback_data'=>"mes-aban"],
			['text'=>"🍂 مهر",'callback_data'=>"mes-mehr"]
			],
			[
			['text'=>"❄ اسفند",'callback_data'=>"mes-esfand"],
			['text'=>"❄ بهمن",'callback_data'=>"mes-bahman"],
			['text'=>"❄ دی",'callback_data'=>"mes-dey"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_fal()
		{
			return  '{
			"keyboard": [
			[
			"' . $this->buttons['hafez'] . '",
			"' . $this->buttons['cheshm'] . '"
			],
			[
			"' . $this->buttons['go_back_menu'] . '"
			]
			],
			"resize_keyboard" : true,
			"ForceReply":{
			"force_reply" : true
			}
			}';
		}
		
		
		public function key_fal_hafez()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>$this->buttons['fal_hafez'],'callback_data'=>$this->buttons['fal_hafez']]
			],
			[
			['text'=>$this->buttons['fal_hafez_about'],'callback_data'=>$this->buttons['fal_hafez_about']]
			],
			[
			['text'=>$this->buttons['fal_hafez_o_shab_yalda'],'callback_data'=>$this->buttons['fal_hafez_o_shab_yalda']]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_fal_hafez_mani()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>$this->buttons['fal_hafez_mani'],'callback_data'=>$this->buttons['fal_hafez_mani']],
			['text'=>$this->buttons['fal_hafez_sher'],'callback_data'=>$this->buttons['fal_hafez_sher']]
			],
			[
			['text'=>$this->buttons['fal_hafez_about'],'callback_data'=>$this->buttons['fal_hafez_about']]
			],
			[
			['text'=>$this->buttons['fal_hafez_o_shab_yalda'],'callback_data'=>$this->buttons['fal_hafez_o_shab_yalda']]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_fal_hendi_jensiat()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>$this->buttons['mard'],'callback_data'=>"h-mard"],
			['text'=>$this->buttons['zan'],'callback_data'=>"h-zan"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini_hendi_month_mard()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"🌸 خرداد",'callback_data'=>"hm-khordad"],
			['text'=>"🌸 اردیبهشت",'callback_data'=>"hm-ordibehesht"],
			['text'=>"🌸 فروردین",'callback_data'=>"hm-farvardin"]
			],
			[
			['text'=>"🌞 شهریور",'callback_data'=>"hm-shahrivar"],
			['text'=>"🌞 مرداد",'callback_data'=>"hm-mordad"],
			['text'=>"🌞 تیر",'callback_data'=>"hm-tir"]
			],
			[
			['text'=>"🍂 آذر",'callback_data'=>"hm-azar"],
			['text'=>"🍂 آبان",'callback_data'=>"hm-aban"],
			['text'=>"🍂 مهر",'callback_data'=>"hm-mehr"]
			],
			[
			['text'=>"❄ اسفند",'callback_data'=>"hm-esfand"],
			['text'=>"❄ بهمن",'callback_data'=>"hm-bahman"],
			['text'=>"❄ دی",'callback_data'=>"hm-dey"]
			]
			)
			);
			return  json_encode($keyboard);
		}
		
		
		public function key_talebini_hendi_month_zan()
		{
			$keyboard = array(
			'inline_keyboard' => array(
			[
			['text'=>"🌸 خرداد",'callback_data'=>"hz-khordad"],
			['text'=>"🌸 اردیبهشت",'callback_data'=>"hz-ordibehesht"],
			['text'=>"🌸 فروردین",'callback_data'=>"hz-farvardin"]
			],
			[
			['text'=>"🌞 شهریور",'callback_data'=>"hz-shahrivar"],
			['text'=>"🌞 مرداد",'callback_data'=>"hz-mordad"],
			['text'=>"🌞 تیر",'callback_data'=>"hz-tir"]
			],
			[
			['text'=>"🍂 آذر",'callback_data'=>"hz-azar"],
			['text'=>"🍂 آبان",'callback_data'=>"hz-aban"],
			['text'=>"🍂 مهر",'callback_data'=>"hz-mehr"]
			],
			[
			['text'=>"❄ اسفند",'callback_data'=>"hz-esfand"],
			['text'=>"❄ بهمن",'callback_data'=>"hz-bahman"],
			['text'=>"❄ دی",'callback_data'=>"hz-dey"]
			]
			)
			);
			return  json_encode($keyboard);
		}
	}

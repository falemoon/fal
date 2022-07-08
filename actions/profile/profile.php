<?php
/*
● In The Name Of God 
● website 》 http://FilePick.ir/
● Channel 》 @FilePick
*/
require_once dirname(__FILE__) . '/../../autoload.php';

$telegram->sendMessage([
    'chat_id' => $data->user_id,
    'parse_mode' => 'Markdown',
    'text' => 'بخش مورد نظر خود را انتخاب نمایید:' ,
    'reply_markup' => $keyboard->profile()
]);
 

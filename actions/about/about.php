<?php

require_once dirname(__FILE__) . '/../../autoload.php';

$telegram->sendMessage([
    'chat_id' => $data->user_id,
    'parse_mode' => 'Markdown',
    'text' => "🤖 `".$auth->NameBOT."`\n"."📌 نسخه ربات : `".$auth->version."`" ,
    'reply_markup' => $keyboard->key_start()
]);
 

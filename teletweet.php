<?php
// Ben-Ja for twitter.com/twt_jogging
$access_token = '1226249674:AAHJ0118o0TkBdPfJ0fSPsO-b2mYry6gm4c';
$api = 'https://api.telegram.org/bot' . $access_token;
// query:
$output = json_decode(file_get_contents('php://input'), TRUE);
@$chat_id = $output['message']['chat']['id'];
@$message = $output['message']['text'];
// callback:
@$callback_query = $output['callback_query'];
@$data = $callback_query['data'];
@$chat_id_in = $callback_query['message']['chat']['id'];
@$message_id = $callback_query['message']['message_id'];
@$query_id = $callback_query['id'];
// menu buttons 1-20
$inline_button1=array("inline_message_id"=>"1","text"=>"Exit \xF0\x9F\x9A\xB6","callback_data"=>'/exit'); //exit
$inline_button2=array("inline_message_id"=>"2","text"=>"\xE2\x9B\xBA Menu","callback_data"=>'/menu'); //menu
// dialog buttons
//$inline_button3=array("inline_message_id"=>"3","text"=>"\xE2\x99\xA8 Debug","callback_data"=>'/debug'); 
$inline_button4=array("inline_message_id"=>"4","text"=>"Ask TwtJogging","callback_data"=>'/Ask TwtJogging');
$inline_button5=array("inline_message_id"=>"5","text"=>"Strava","callback_data"=>'/Strava');
$inline_button6=array("inline_message_id"=>"6","text"=>"Twitter","callback_data"=>'/Twitter');
$inline_button7=array("inline_message_id"=>"7","text"=>"Telegram","callback_data"=>'/telegram');
$inline_button8=array("inline_message_id"=>"8","text"=>"\xF0\x9F\x93\xA2 Marathon Events ","callback_data"=>'/Marathon Events'); 
$inline_button9=array("inline_message_id"=>"9","text"=>"\xF0\x9F\x93\x9A Links","callback_data"=>'/links');
// debug
$inline_button13=array("inline_message_id"=>"13","text"=>"\xE2\x99\xA8 Debug","callback_data"=>'/debug'); //debug
// link buttons 20-30
$inline_button21=array("inline_message_id"=>"21","text"=>"Microblog twitter.com/twt_jogging","url"=>"http://twitter.com/twt_jogging");
$inline_button22=array("inline_message_id"=>"22","text"=>"Follow us on Strava","url"=>"https://www.strava.com/clubs/twtjogging-485876%60");
$inline_button23=array("inline_message_id"=>"23","text"=>"Stalk us @ Twitter","url"=>"http://twitter.com/twtjogging/");
$inline_button24=array("inline_message_id"=>"24","text"=>"Telegram Chat Group","url"=>"http://t.me/twt_jogging");
$inline_button25=array("inline_message_id"=>"25","text"=>"Ask TwtJogging","url"=>"http://bit.ly/AskTwtJogging");
$inline_button26=array("inline_message_id"=>"26","text"=>"twitter.com/twt_jogging","url"=>"twitter.com/twt_jogging");
$inline_button27=array("inline_message_id"=>"27","text"=>"Telegram @twt_jogging","url"=>"https://t.me/twt_jogging");
$inline_button28=array("inline_message_id"=>"28","text"=>"Official twitter.com/twt_jogging ","url"=>"twitter.com/twt_jogging/");
$inline_button29=array("inline_message_id"=>"29","text"=>"\xF0\x9F\x8F\x83 Marathon Events ","url"=>"twitter.com/twt_jogging/");

// keyboards vertical 5 lines.
$inline_keyboard0 = [[]];
// start
$inline_keyboard1 = [[$inline_button21],[$inline_button5,$inline_button6],[$inline_button4,$inline_button7],[$inline_button2,$inline_button1],[$inline_button9,$inline_button8]];
// Strava
$inline_keyboard2 = [[$inline_button22],[$inline_button6],[$inline_button4,$inline_button7],[$inline_button2,$inline_button1],[$inline_button9,$inline_button8]];
// Twitter
$inline_keyboard3 = [[$inline_button23],[$inline_button5],[$inline_button4,$inline_button7],[$inline_button2,$inline_button1],[$inline_button9,$inline_button8]];
// Ask TwtJogging
$inline_keyboard4 = [[$inline_button25],[$inline_button5,$inline_button6],[$inline_button7],[$inline_button2,$inline_button1],[$inline_button9,$inline_button8]];
// telegram
$inline_keyboard5 = [[$inline_button24],[$inline_button5,$inline_button6],[$inline_button4],[$inline_button2,$inline_button1],[$inline_button9,$inline_button8]];
// links
$inline_keyboard6 = [[$inline_button21],[$inline_button27],[$inline_button22],[$inline_button23],[$inline_button24],[$inline_button25],[$inline_button26],[$inline_button2,$inline_button1],[$inline_button9,$inline_button8]];
// Marathon Events
$inline_keyboard7 = [[$inline_button28],[$inline_button21],[$inline_button2,$inline_button1],[$inline_button9,$inline_button29]];
// exit
$inline_keyboard8 = [[$inline_button21],[$inline_button28]];
// create inline keyboards and their replyMarkup
$keyboard0 = array("inline_keyboard"=>$inline_keyboard0); $replyMarkup0 = json_encode($keyboard0);
$keyboard1 = array("inline_keyboard"=>$inline_keyboard1); $replyMarkup1 = json_encode($keyboard1);
$keyboard2 = array("inline_keyboard"=>$inline_keyboard2); $replyMarkup2 = json_encode($keyboard2);
$keyboard3 = array("inline_keyboard"=>$inline_keyboard3); $replyMarkup3 = json_encode($keyboard3);
$keyboard4 = array("inline_keyboard"=>$inline_keyboard4); $replyMarkup4 = json_encode($keyboard4);
$keyboard5 = array("inline_keyboard"=>$inline_keyboard5); $replyMarkup5 = json_encode($keyboard5);
$keyboard6 = array("inline_keyboard"=>$inline_keyboard6); $replyMarkup6 = json_encode($keyboard6);
$keyboard7 = array("inline_keyboard"=>$inline_keyboard7); $replyMarkup7 = json_encode($keyboard7);
$keyboard8 = array("inline_keyboard"=>$inline_keyboard8); $replyMarkup8 = json_encode($keyboard8);
// обработка поступающего
//commands
switch($message) {
  case '/twtjogging':
    $mess = "\xF0\x9F\x8E\xBD <b>MARATHON</b>. \xF0\x9F\x92\xAF

	<i>Normalize telling people Marathon distance is 42.195km.</i> \xF0\x9F\x98\x82

Marathon - 42.195 km
Half Marathon - 21.097494 km
Ultra Trail Run - > 100 km
Ultra Marathon - > 50 km
Fun Run - 5km/10km run. \xF0\x9F\x94\x8E

<b>Search! our group in Telegram #TwtJogging</b>";
    sendKeyboard($chat_id, $mess, $replyMarkup1);
  break;
  case 'Hi':
  case 'Hello':
    sendKeyboard($chat_id, "Hello!");
  break;
  case 'Привет':
  case 'Хаюшки':
    sendKeyboard($chat_id, "Здарова!");
  break;
}
// callback_query commands!
switch($data){
  case '/menu':
 	send_answerCallbackQuery($callback_query['id'], null, false);
    $mess = "\xF0\x9F\x93\xA1 <b>MARATHON</b>.
  <i>Normalize telling people Marathon distance is 42.195km.</i> \xF0\x9F\x98\x82

Marathon - 42.195 km
Half Marathon - 21.097494 km
Ultra Trail Run - > 100 km
Ultra Marathon - > 50 km
Fun Run - 5km/10km run. \xF0\x9F\x94\x8E

<b>Search! our group in Telegram #TwtJogging</b>";
    editMessageText($chat_id_in, $message_id, $mess, $replyMarkup1);
  break;
  case '/Strava':
	send_answerCallbackQuery($callback_query['id'], null, false);
	$mess = "\xF0\x9F\x91\xA5 <b>STRAVA</b>
	
Join the TwtJogging @Strava team here

`https://www.strava.com/clubs/twtjogging-485876`

Strava, or it didnt happen.! the best social media app for Runners & cyclists. Dekat Strava pun boleh kenal kenal. The new Tinder, I must say.. \xF0\x9F\x98\x81
";
    editMessageText($chat_id_in, $message_id, $mess, $replyMarkup2);
  break;
  case '/Twitter':
	send_answerCallbackQuery($callback_query['id'], null, false);
    $mess = "\xF0\x9F\x90\xA6 <b>Twitter</b>
	
Offical Twitter for TwtJogging

Используется в очень многих Unix-like системах как оболочка по умолчанию.
Strava, Mac OS X, FreeBSD, *BSD и т.д. даже под винду есть.
На Twitter пишутся скрипты (последовательности команд, автоматизация) примеры этих вот скриптов мы и рассматриваем. 
";
    editMessageText($chat_id_in, $message_id, $mess, $replyMarkup3);
  break;
  case '/Ask TwtJogging':
	send_answerCallbackQuery($callback_query['id'], null, false);
    $mess = "\xF0\x9F\x93\xA7 <b>Ask anything in Twitter.</b>
	
We need to follow each other.. so you can ask question here, 

\xF0\x9F\x8F\x83 Just use this keyword [question] in TwtJogging DM
Drop your twitter here. Let's Follow Each Other.
`http://bit.ly/AskTwtJogging`
";
    editMessageText($chat_id_in, $message_id, $mess, $replyMarkup4);
  break;
  case '/telegram':
	send_answerCallbackQuery($callback_query['id'], null, false);
    $mess = "\xF0\x9F\x92\xBC <b>Telegram @Twt_Jogging</b>
	
Selamat Datang ke group rasmi Telegram @TwtJogging, disini akan berkongsi segalanya mengenai dunia larian Marathon dari rakan-rakan twitter TwtJogging.

Sila kongsikan group @twt_jogging dengan kawan-kawan lain juga... 
";
    editMessageText($chat_id_in, $message_id, $mess, $replyMarkup5);
  break;
  case '/links':
	send_answerCallbackQuery($callback_query['id'], null, false);
    $mess = "\xF0\x9F\x93\x9A <b>Links</b>";
    editMessageText($chat_id_in, $message_id, $mess, $replyMarkup6);
  break;
  case '/Marathon Events':
	send_answerCallbackQuery($callback_query['id'], null, false);
    $mess = "\xF0\x9F\x93\xA2 <b>Marathon Event List</b>

Senarai acara terkini larian <b>Marathon</b> di Malaysia
Boleh tekan butang download disini atau gunakan keyword /marathon

Info lanjut sila tweet ke `http://twitter.com/twt_jogging/`
";
    editMessageText($chat_id_in, $message_id, $mess, $replyMarkup7);
  break;
  case '/exit':
	send_answerCallbackQuery($callback_query['id'], null, false);
    $mess = "\xF0\x9F\x9A\xAA\xF0\x9F\x9A\xB6 <b>Thank You!</b>
Share this group with your running buddy!
 
            \xF0\x9F\x99\x8F
Jump to ‘Menu Icon’ Press [ / ] below to open this menu";
    editMessageText($chat_id_in, $message_id, $mess, $replyMarkup8);
  break;
}

// send functions:
function editMessageText($chid, $mid, $mes, $repl) {
  file_get_contents($GLOBALS['api'] . '/editMessageText?chat_id='.$chid.'&message_id='.$mid.'&text='.urlencode($mes).'&parse_mode=html&reply_markup='.$repl );
}

function sendKeyboard($chat_id, $message, $replyMarkup) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message) . '&parse_mode=html&reply_markup=' . $replyMarkup);
}

// Ответ на нажатие кнопок
function send_answerCallbackQuery($callback_query_id, $text, $show_alert){
  file_get_contents($GLOBALS['api'] . '/answerCallbackQuery?callback_query_id=' . $callback_query_id . '&text=' . $text . '&show_alert=' . $show_alert );
}

// END

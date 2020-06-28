<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Ambil data hari : https://developer.twitter.com/en/apps **/
$settings = array(
'oauth_access_token' => "302499733-phJgOlbNgbxGdMefUMeooHJ8kjnMqfcbBPksaNzG",
'oauth_access_token_secret' => "Xoxecd0crTFXAVsOZ5WjDC1W6u0tamYbZIvbQP7VHWdPH",
'consumer_key' => "bbKvwzRZmff0dOZbUmTKdOscZ",
'consumer_secret' => "
dmmav32DomtSqUGcThoBzujLKq410u8dHNpwOrXGgexf6MNLQy"
);

$url = 'https://api.twitter.com/1.1/direct_messages/events/list.json';
$getfield = '';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$data = $twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest();

$someObject = json_decode($data);
foreach ($someObject->events as $item) {
if( strpos($item->message_create->message_data->text, '[question]') !== false) {
ngetweet($item->message_create->message_data->text);
}
}

function ngetweet($kata) {
/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/statuses/update.json';
$requestMethod = 'POST';

$postfields = array(
'status' => $kata
);

$twitter = new TwitterAPIExchange($GLOBALS['settings']);
echo $twitter->buildOauth($url, $requestMethod)
->setPostfields($postfields)
->performRequest();
}
?>


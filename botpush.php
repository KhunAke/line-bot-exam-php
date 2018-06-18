<?php



require "vendor/autoload.php";

$access_token = 'gCQtB/xwkkinzbUX0P/4kGngLaTRNeenwxTLWZWoaO04FY2NxsY/ZF/OI17V3a8ZuFcu2b+Mw3+aNHcQXJgTZkwLKcEK4uh+d7ByYM/ktLjvAwLMjngGzkB4bp3we6fWh1szxU5kH65IKKYsE9rU3gdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd1c5331056db3d9f6b947d7c68ce6e83';

$pushID = 'U968d8a1ef6c2847432f9cce0a170e28a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$imPushRequest = new \TencentCloud\IM\Model\ImPushRequest(); // \TencentCloud\IM\Model\ImPushRequest |
//TODO: Set the request parameters
$imPushRequest->setFromAccount("");
$imPushRequest->setMsgRandom(1);
$imPushRequest->setMsgBody(array(0 => array('MsgType' => "TIMTextElem", "MsgContent" => array("Text" => ''))));

try {
    $result = $apiInstance->imPush($random, $imPushRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imPush: ', $e->getMessage(), PHP_EOL;
}
?>
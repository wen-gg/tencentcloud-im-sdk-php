<?php

use TencentCloud\IM\Configuration;
require_once(__DIR__ . '/../../vendor/autoload.php');


$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\SingleChatApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$sendSingleChatMsgRequest = new \TencentCloud\IM\Model\SendSingleChatMsgRequest(); // \TencentCloud\IM\Model\SendSingleChatMsgRequest |
//TODO: Set the request parameters
$sendSingleChatMsgRequest->setFromAccount("");
$sendSingleChatMsgRequest->setToAccount("");
$sendSingleChatMsgRequest->setMsgRandom($random);
$sendSingleChatMsgRequest->setMsgBody(array(0 => array('MsgType' => "TIMTextElem", "MsgContent" => array("Text" => ''))));


try {
    $result = $apiInstance->sendmsg($random, $sendSingleChatMsgRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->sendmsg: ', $e->getMessage(), PHP_EOL;
}
?>
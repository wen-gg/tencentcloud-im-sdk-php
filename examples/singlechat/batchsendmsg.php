<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
use TencentCloud\IM\Configuration;

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
$batchSendSingleChatMsgRequest = new \TencentCloud\IM\Model\BatchSendSingleChatMsgRequest(); // \TencentCloud\IM\Model\BatchSendSingleChatMsgRequest |
//TODO: Set the request parameters
$batchSendSingleChatMsgRequest->setToAccount(array(""));
$batchSendSingleChatMsgRequest->setFromAccount("");
$batchSendSingleChatMsgRequest->setSyncOtherMachine(1);
$batchSendSingleChatMsgRequest->setMsgRandom($random);
$batchSendSingleChatMsgRequest->setMsgBody(array(0 => array('MsgType' => "TIMTextElem", "MsgContent" => array("Text" => ''))));


try {
    $result = $apiInstance->batchsendmsg($random, $batchSendSingleChatMsgRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->batchsendmsg: ', $e->getMessage(), PHP_EOL;
}
?>
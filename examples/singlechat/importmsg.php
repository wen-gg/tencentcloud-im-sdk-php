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
$importMsgRequest = new \TencentCloud\IM\Model\ImportMsgRequest(); // \TencentCloud\IM\Model\ImportMsgRequest |
//TODO: Set the request parameters
$importMsgRequest->setToAccount("");
$importMsgRequest->setMsgRandom($random);
$importMsgRequest->setMsgBody(array(0 => array('MsgType' => "TIMTextElem", "MsgContent" => array("Text" => ''))));
$importMsgRequest->setSyncFromOldSystem(1);
$importMsgRequest->setMsgTimeStamp(1);
$importMsgRequest->setFromAccount("");


try {
    $result = $apiInstance->importmsg($random, $importMsgRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->importmsg: ', $e->getMessage(), PHP_EOL;
}
?>
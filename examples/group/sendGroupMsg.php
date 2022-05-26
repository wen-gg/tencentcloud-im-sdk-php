<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\GroupApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$sendGroupMsgRequest = new \TencentCloud\IM\Model\SendGroupMsgRequest(); // \TencentCloud\IM\Model\SendGroupMsgRequest |
//TODO: Set the request parameters
$sendGroupMsgRequest->setGroupId("");
$sendGroupMsgRequest->setFromAccount("");
$sendGroupMsgRequest->setMsgBody(array(0 => array("MsgType" => "TIMTextElem", "MsgContent" => array("Text" => ""))));

try {
    $result = $apiInstance->sendGroupMsg($random, $sendGroupMsgRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->sendGroupMsg: ', $e->getMessage(), PHP_EOL;
}
?>


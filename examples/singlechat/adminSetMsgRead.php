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
$setMsgReadRequest = new \TencentCloud\IM\Model\SetMsgReadRequest(); // \TencentCloud\IM\Model\SetMsgReadRequest |
//TODO: Set the request parameters
$setMsgReadRequest->setReportAccount("");
$setMsgReadRequest->setPeerAccount("");


try {
    $result = $apiInstance->adminSetMsgRead($random, $setMsgReadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->adminSetMsgRead: ', $e->getMessage(), PHP_EOL;
}
?>
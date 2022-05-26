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
$getC2cUnreadMsgNumRequest = new \TencentCloud\IM\Model\GetC2cUnreadMsgNumRequest(); // \TencentCloud\IM\Model\GetC2cUnreadMsgNumRequest |
//TODO: Set the request parameters
$getC2cUnreadMsgNumRequest->setToAccount("");

try {
    $result = $apiInstance->getC2cUnreadMsgNum($random, $getC2cUnreadMsgNumRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->getC2cUnreadMsgNum: ', $e->getMessage(), PHP_EOL;
}
?>
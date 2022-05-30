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
$setUnreadMsgNumRequest = new \TencentCloud\IM\Model\SetUnreadMsgNumRequest(); // \TencentCloud\IM\Model\SetUnreadMsgNumRequest |
//TODO: Set the request parameters
$setUnreadMsgNumRequest->setGroupId("");
$setUnreadMsgNumRequest->setMemberAccount("");
$setUnreadMsgNumRequest->setUnreadMsgNum(1);

try {
    $result = $apiInstance->setUnreadMsgNum($random, $setUnreadMsgNumRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setUnreadMsgNum: ', $e->getMessage(), PHP_EOL;
}
?>
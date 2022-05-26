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
$groupMsgGetSimpleRequest = new \TencentCloud\IM\Model\GroupMsgGetSimpleRequest(); // \TencentCloud\IM\Model\GroupMsgGetSimpleRequest |
//TODO: Set the request parameters
$groupMsgGetSimpleRequest->setGroupId("");
$groupMsgGetSimpleRequest->setReqMsgNumber(2);

try {
    $result = $apiInstance->groupMsgGetSimple($random, $groupMsgGetSimpleRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupMsgGetSimple: ', $e->getMessage(), PHP_EOL;
}
?>
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
$msgWithdrawRequest = new \TencentCloud\IM\Model\MsgWithdrawRequest(); // \TencentCloud\IM\Model\MsgWithdrawRequest |
//TODO: Set the request parameters
$msgWithdrawRequest->setFromAccount("");
$msgWithdrawRequest->setToAccount("");
$msgWithdrawRequest->setMsgKey("");

try {
    $result = $apiInstance->adminMsgwithdraw($random, $msgWithdrawRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->adminMsgwithdraw: ', $e->getMessage(), PHP_EOL;
}
?>
<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\OperationApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$getOperateMsgHistoryRequest = new \TencentCloud\IM\Model\GetOperateMsgHistoryRequest(); // \TencentCloud\IM\Model\GetOperateMsgHistoryRequest |
//TODO: Set the request parameters
$getOperateMsgHistoryRequest->setMsgTime("");
$getOperateMsgHistoryRequest->setChatType("");

try {
    $result = $apiInstance->getHistory($random, $getOperateMsgHistoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApi->getHistory: ', $e->getMessage(), PHP_EOL;
}
?>
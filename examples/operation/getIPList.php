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
$getIPListRequest = new \TencentCloud\IM\Model\GetIPListRequest(); // \TencentCloud\IM\Model\GetIPListRequest |
//TODO: Set the request parameters


try {
    $result = $apiInstance->getIPList($random, $getIPListRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling OperationApi->getIPList: ', $e->getMessage(), PHP_EOL;
}
?>
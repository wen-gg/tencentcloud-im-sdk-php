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
$getAppInfoRequest = new \TencentCloud\IM\Model\GetAppInfoRequest(); // \TencentCloud\IM\Model\GetAppInfoRequest |
//TODO: Set the request parameters


try {
    $result = $apiInstance->getappinfo($random, $getAppInfoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApi->getappinfo: ', $e->getMessage(), PHP_EOL;
}
?>
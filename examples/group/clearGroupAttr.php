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
$clearGroupAttrRequest = new \TencentCloud\IM\Model\ClearGroupAttrRequest(); // \TencentCloud\IM\Model\ClearGroupAttrRequest |
//TODO: Set the request parameters
$clearGroupAttrRequest->setGroupId("");

try {
    $result = $apiInstance->clearGroupAttr($random, $clearGroupAttrRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->clearGroupAttr: ', $e->getMessage(), PHP_EOL;
}
?>
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
$setGroupAttrRequest = new \TencentCloud\IM\Model\SetGroupAttrRequest(); // \TencentCloud\IM\Model\SetGroupAttrRequest |
//TODO: Set the request parameters
$setGroupAttrRequest->setGroupId("");
$setGroupAttrRequest->setGroupAttr(array(0 => array("key" => "key1","value" => "val1")));

try {
    $result = $apiInstance->setGroupAttr($random, $setGroupAttrRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setGroupAttr: ', $e->getMessage(), PHP_EOL;
}
?>
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
$importGroupRequest = new \TencentCloud\IM\Model\ImportGroupRequest(); // \TencentCloud\IM\Model\ImportGroupRequest |
//TODO: Set the request parameters
$importGroupRequest->setOwnerAccount("");
$importGroupRequest->setType("");
$importGroupRequest->setName("");

try {
    $result = $apiInstance->importGroup($random, $importGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->importGroup: ', $e->getMessage(), PHP_EOL;
}
?>
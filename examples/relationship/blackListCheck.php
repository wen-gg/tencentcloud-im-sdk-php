<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$blackListCheckRequest = new \TencentCloud\IM\Model\BlackListCheckRequest(); // \TencentCloud\IM\Model\BlackListCheckRequest |
//TODO: Set the request parameters
$blackListCheckRequest->setCheckType("");
$blackListCheckRequest->setFromAccount("");
$blackListCheckRequest->setToAccount(array(""));

try {
    $result = $apiInstance->blackListCheck($random, $blackListCheckRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->blackListCheck: ', $e->getMessage(), PHP_EOL;
}
?>
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
$blackListGetRequest = new \TencentCloud\IM\Model\BlackListGetRequest(); // \TencentCloud\IM\Model\BlackListGetRequest |
//TODO: Set the request parameters
$blackListGetRequest->setLastSequence(0);
$blackListGetRequest->setMaxLimited(10);
$blackListGetRequest->setStartIndex(0);
$blackListGetRequest->setFromAccount("");

try {
    $result = $apiInstance->blackListGet($random, $blackListGetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->blackListGet: ', $e->getMessage(), PHP_EOL;
}
?>
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
$friendGetRequest = new \TencentCloud\IM\Model\FriendGetRequest(); // \TencentCloud\IM\Model\FriendGetRequest |
//TODO: Set the request parameters
$friendGetRequest->setStandardSequence(0);
$friendGetRequest->setStartIndex(0);
$friendGetRequest->setCustomSequence(0);
$friendGetRequest->setFromAccount("");

try {
    $result = $apiInstance->friendGet($random, $friendGetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendGet: ', $e->getMessage(), PHP_EOL;
}
?>
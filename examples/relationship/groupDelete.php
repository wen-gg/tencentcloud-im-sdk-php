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
$groupDeleteRequest = new \TencentCloud\IM\Model\GroupDeleteRequest(); // \TencentCloud\IM\Model\GroupDeleteRequest |
//TODO: Set the request parameters
$groupDeleteRequest->setFromAccount("");
$groupDeleteRequest->setGroupName(array(""));

try {
    $result = $apiInstance->groupDelete($random, $groupDeleteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->groupDelete: ', $e->getMessage(), PHP_EOL;
}
?>
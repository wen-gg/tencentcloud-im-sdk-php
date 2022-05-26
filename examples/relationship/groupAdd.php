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
$groupAddRequest = new \TencentCloud\IM\Model\GroupAddRequest(); // \TencentCloud\IM\Model\GroupAddRequest |
//TODO: Set the request parameters
$groupAddRequest->setFromAccount("");
$groupAddRequest->setToAccount(array(""));
$groupAddRequest->setGroupName(array(""));

try {
    $result = $apiInstance->groupAdd($random, $groupAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->groupAdd: ', $e->getMessage(), PHP_EOL;
}
?>
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
$groupGetRequest = new \TencentCloud\IM\Model\GroupGetRequest(); // \TencentCloud\IM\Model\GroupGetRequest |
//TODO: Set the request parameters
$groupGetRequest->setFromAccount("");

try {
    $result = $apiInstance->groupGet($random, $groupGetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->groupGet: ', $e->getMessage(), PHP_EOL;
}
?>
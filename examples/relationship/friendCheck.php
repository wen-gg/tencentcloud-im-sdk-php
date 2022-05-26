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
$friendCheckRequest = new \TencentCloud\IM\Model\FriendCheckRequest(); // \TencentCloud\IM\Model\FriendCheckRequest |
//TODO: Set the request parameters
$friendCheckRequest->setFromAccount("");
$friendCheckRequest->setToAccount(array(""));
$friendCheckRequest->setCheckType("");


try {
    $result = $apiInstance->friendCheck($random, $friendCheckRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendCheck: ', $e->getMessage(), PHP_EOL;
}
?>
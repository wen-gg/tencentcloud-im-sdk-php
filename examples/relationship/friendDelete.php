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
$friendDeleteRequest = new \TencentCloud\IM\Model\FriendDeleteRequest(); // \TencentCloud\IM\Model\FriendDeleteRequest |
//TODO: Set the request parameters
$friendDeleteRequest->setFromAccount("");
$friendDeleteRequest->setToAccount(array(""));
$friendDeleteRequest->setDeleteType("");

try {
    $result = $apiInstance->friendDelete($random, $friendDeleteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendDelete: ', $e->getMessage(), PHP_EOL;
}
?>
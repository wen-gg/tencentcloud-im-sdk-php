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
$friendGetListRequest = new \TencentCloud\IM\Model\FriendGetListRequest(); // \TencentCloud\IM\Model\FriendGetListRequest |
//TODO: Set the request parameters
$friendGetListRequest->setFromAccount("");
$friendGetListRequest->setToAccount(array(""));


try {
    $result = $apiInstance->friendGetList($random, $friendGetListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendGetList: ', $e->getMessage(), PHP_EOL;
}
?>
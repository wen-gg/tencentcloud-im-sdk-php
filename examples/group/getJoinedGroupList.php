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
$getJoinedGroupListRequest = new \TencentCloud\IM\Model\GetJoinedGroupListRequest(); // \TencentCloud\IM\Model\GetJoinedGroupListRequest |
//TODO: Set the request parameters
$getJoinedGroupListRequest->setMemberAccount("");

try {
    $result = $apiInstance->getJoinedGroupList($random, $getJoinedGroupListRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getJoinedGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
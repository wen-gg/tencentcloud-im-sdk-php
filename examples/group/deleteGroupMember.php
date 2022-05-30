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
$deleteGroupMemberRequest = new \TencentCloud\IM\Model\DeleteGroupMemberRequest(); // \TencentCloud\IM\Model\DeleteGroupMemberRequest |
//TODO: Set the request parameters
$deleteGroupMemberRequest->setGroupId("");
$deleteGroupMemberRequest->setMemberToDelAccount(array(""));

try {
    $result = $apiInstance->deleteGroupMember($random, $deleteGroupMemberRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupMember: ', $e->getMessage(), PHP_EOL;
}
?>
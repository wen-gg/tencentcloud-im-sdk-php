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
$addGroupMemberRequest = new \TencentCloud\IM\Model\AddGroupMemberRequest(); // \TencentCloud\IM\Model\AddGroupMemberRequest |
//TODO: Set the request parameters
$addGroupMemberRequest->setGroupId("");
$addGroupMemberRequest->setMemberList(array(0 => array("Member_Account" => "")));


try {
    $result = $apiInstance->addGroupMember($random, $addGroupMemberRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addGroupMember: ', $e->getMessage(), PHP_EOL;
}
?>
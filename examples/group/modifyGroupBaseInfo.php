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
$modifyGroupBaseInfoRequest = new \TencentCloud\IM\Model\ModifyGroupBaseInfoRequest(); // \TencentCloud\IM\Model\ModifyGroupBaseInfoRequest |
//TODO: Set the request parameters
$modifyGroupBaseInfoRequest->setGroupId("");


try {
    $result = $apiInstance->modifyGroupBaseInfo($random, $modifyGroupBaseInfoRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->modifyGroupBaseInfo: ', $e->getMessage(), PHP_EOL;
}
?>
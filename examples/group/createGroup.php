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
$createGroupRequest = new \TencentCloud\IM\Model\CreateGroupRequest(); // \TencentCloud\IM\Model\CreateGroupRequest |
//TODO: Set the request parameters
$createGroupRequest->setType("");
$createGroupRequest->setName("");
$createGroupRequest->setOwnerAccount("");

try {
    $result = $apiInstance->createGroup($random, $createGroupRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
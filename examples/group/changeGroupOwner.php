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
$changeGroupOwnerRequest = new \TencentCloud\IM\Model\ChangeGroupOwnerRequest(); // \TencentCloud\IM\Model\ChangeGroupOwnerRequest |
//TODO: Set the request parameters
$changeGroupOwnerRequest->setGroupId("");
$changeGroupOwnerRequest->setNewOwnerAccount("");

try {
    $result = $apiInstance->changeGroupOwner($random, $changeGroupOwnerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->changeGroupOwner: ', $e->getMessage(), PHP_EOL;
}
?>
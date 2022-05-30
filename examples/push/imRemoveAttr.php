<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$imRemoveAttrRequest = new \TencentCloud\IM\Model\ImRemoveAttrRequest(); // \TencentCloud\IM\Model\ImRemoveAttrRequest |
//TODO: Set the request parameters
$imRemoveAttrRequest->setToAccount("");
$imRemoveAttrRequest->setAttrs(array(""));

try {
    $result = $apiInstance->imRemoveAttr($random, $imRemoveAttrRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imRemoveAttr: ', $e->getMessage(), PHP_EOL;
}
?>
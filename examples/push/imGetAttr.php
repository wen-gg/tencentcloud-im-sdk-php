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
$imGetAttrRequest = new \TencentCloud\IM\Model\ImGetAttrRequest(); // \TencentCloud\IM\Model\ImGetAttrRequest |
//TODO: Set the request parameters
$imGetAttrRequest->setToAccount(array(""));

try {
    $result = $apiInstance->imGetAttr($random, $imGetAttrRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imGetAttr: ', $e->getMessage(), PHP_EOL;
}
?>
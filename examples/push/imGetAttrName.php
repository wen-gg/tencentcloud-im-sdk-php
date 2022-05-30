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
$imGetAttrNameRequest = new \TencentCloud\IM\Model\ImGetAttrNameRequest(); // \TencentCloud\IM\Model\ImGetAttrNameRequest |
//TODO: Set the request parameters


try {
    $result = $apiInstance->imGetAttrName($random, $imGetAttrNameRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imGetAttrName: ', $e->getMessage(), PHP_EOL;
}
?>
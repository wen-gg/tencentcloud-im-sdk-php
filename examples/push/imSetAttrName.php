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
$imSetAttrNameRequest = new \TencentCloud\IM\Model\ImSetAttrNameRequest(); // \TencentCloud\IM\Model\ImSetAttrNameRequest |
//TODO: Set the request parameters
$imSetAttrNameRequest->setAttrNames(array("0" => ""));

try {
    $result = $apiInstance->imSetAttrName($random, $imSetAttrNameRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imSetAttrName: ', $e->getMessage(), PHP_EOL;
}
?>
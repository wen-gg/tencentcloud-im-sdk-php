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
$imRemoveAllTagRequest = new \TencentCloud\IM\Model\ImRemoveAllTagRequest(); // \TencentCloud\IM\Model\ImRemoveAllTagRequest |
//TODO: Set the request parameters
$imRemoveAllTagRequest->setToAccount(array(""));

try {
    $result = $apiInstance->imRemoveAllTags($random, $imRemoveAllTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imRemoveAllTags: ', $e->getMessage(), PHP_EOL;
}
?>
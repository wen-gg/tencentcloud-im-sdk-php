<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");


$apiInstance = new TencentCloud\IM\Api\PortraitApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$portraitGetRequest = new \TencentCloud\IM\Model\PortraitGetRequest(); // \TencentCloud\IM\Model\PortraitGetRequest |
//TODO: Set the request parameters
$portraitGetRequest->setToAccount(array(""));
$portraitGetRequest->setTagList(array(""));

try {
    $result = $apiInstance->portraitGet($random, $portraitGetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortraitApi->portraitGet: ', $e->getMessage(), PHP_EOL;
}
?>
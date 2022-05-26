<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\MuteApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$getNoSpeakingRequest = new \TencentCloud\IM\Model\GetNoSpeakingRequest(); // \TencentCloud\IM\Model\GetNoSpeakingRequest |
//TODO: Set the request parameters
$getNoSpeakingRequest->setGetAccount("");

try {
    $result = $apiInstance->getnospeaking($random, $getNoSpeakingRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling MuteApi->getnospeaking: ', $e->getMessage(), PHP_EOL;
}
?>
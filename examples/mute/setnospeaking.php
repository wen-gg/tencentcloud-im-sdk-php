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
$setNoSpeakingRequest = new \TencentCloud\IM\Model\SetNoSpeakingRequest(); // \TencentCloud\IM\Model\SetNoSpeakingRequest |
//TODO: Set the request parameters
$setNoSpeakingRequest->setSetAccount("");
$setNoSpeakingRequest->setC2CmsgNospeakingTime(1);
$setNoSpeakingRequest->setGroupmsgNospeakingTime(1);

try {
    $result = $apiInstance->setnospeaking($random, $setNoSpeakingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MuteApi->setnospeaking: ', $e->getMessage(), PHP_EOL;
}
?>
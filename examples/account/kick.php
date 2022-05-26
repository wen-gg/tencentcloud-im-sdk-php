<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");


$apiInstance = new TencentCloud\IM\Api\AccountApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$kickRequest = new \TencentCloud\IM\Model\KickRequest(); // \TencentCloud\IM\Model\KickRequest |
//TODO: Set the request parameters
$kickRequest->setUserID("");

try {
    $result = $apiInstance->kick($random, $kickRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->kick: ', $e->getMessage(), PHP_EOL;
}
?>

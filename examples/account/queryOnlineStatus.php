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
$queryOnlineStatusRequest = new \TencentCloud\IM\Model\QueryOnlineStatusRequest(); // \TencentCloud\IM\Model\QueryOnlineStatusRequest |
//TODO: Set the request parameters
$queryOnlineStatusRequest->setToAccount(array(""));


try {
    $result = $apiInstance->queryOnlineStatus($random, $queryOnlineStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryOnlineStatus: ', $e->getMessage(), PHP_EOL;
}
?>
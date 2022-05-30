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
$accountDeleteRequest = new \TencentCloud\IM\Model\AccountDeleteRequest(); // \TencentCloud\IM\Model\AccountDeleteRequest |
//TODO: Set the request parameters
$accountDeleteRequest->setDeleteItem(array(0 => array("UserID" => "")));

try {
    $result = $apiInstance->accountDelete($random, $accountDeleteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountDelete: ', $e->getMessage(), PHP_EOL;
}
?>
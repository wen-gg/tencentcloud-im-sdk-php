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
$accountImportRequest = new \TencentCloud\IM\Model\AccountImportRequest(); // \TencentCloud\IM\Model\AccountImportRequest |
//TODO: Set the request parameters
$accountImportRequest->setUserID("");


try {
    $result = $apiInstance->accountImport($random, $accountImportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountImport: ', $e->getMessage(), PHP_EOL;
}
?>
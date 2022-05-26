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
$multiAccountImportRequest = new \TencentCloud\IM\Model\MultiAccountImportRequest(); // \TencentCloud\IM\Model\MultiAccountImportRequest |
//TODO: Set the request parameters
$multiAccountImportRequest->setAccounts(array(""));


try {
    $result = $apiInstance->multiAccountImport($random, $multiAccountImportRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->multiAccountImport: ', $e->getMessage(), PHP_EOL;
}
?>
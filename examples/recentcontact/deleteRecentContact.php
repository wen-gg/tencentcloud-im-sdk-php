<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\RecentContactApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$getRecentContactListGroupDeleteRequest = new \TencentCloud\IM\Model\GetRecentContactListGroupDeleteRequest(); // \TencentCloud\IM\Model\GetRecentContactListGroupDeleteRequest |
//TODO: Set the request parameters
$getRecentContactListGroupDeleteRequest->setFromAccount("");
$getRecentContactListGroupDeleteRequest->setType(1);

try {
    $result = $apiInstance->deleteRecentContact($random, $getRecentContactListGroupDeleteRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RecentContactApi->deleteRecentContact: ', $e->getMessage(), PHP_EOL;
}
?>
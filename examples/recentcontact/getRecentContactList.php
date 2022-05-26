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
$getRecentContactListGroupGetRequest = new \TencentCloud\IM\Model\GetRecentContactListGroupGetRequest(); // \TencentCloud\IM\Model\GetRecentContactListGroupGetRequest |
//TODO: Set the request parameters
$getRecentContactListGroupGetRequest->setFromAccount("");
$getRecentContactListGroupGetRequest->setAssistFlags(0);
$getRecentContactListGroupGetRequest->setStartIndex(0);
$getRecentContactListGroupGetRequest->setTimeStamp(0);
$getRecentContactListGroupGetRequest->setTopStartIndex(0);
$getRecentContactListGroupGetRequest->setTopTimeStamp(0);

try {
    $result = $apiInstance->getRecentContactList($random, $getRecentContactListGroupGetRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RecentContactApi->getRecentContactList: ', $e->getMessage(), PHP_EOL;
}
?>
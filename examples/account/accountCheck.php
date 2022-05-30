<?php

use TencentCloud\IM\Configuration;
use TencentCloud\IM\Model\AccountCheckRequestCheckItem;

require_once(__DIR__ . '/../../vendor/autoload.php');

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");
$apiInstance = new  TencentCloud\IM\Api\AccountApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$account_check_request = new TencentCloud\IM\Model\AccountCheckRequest();
$item = new AccountCheckRequestCheckItem();
$item->setUserId("");
$items = [$item];
$account_check_request->setCheckItem($items);

$random = 123456789;
try {
    $result = $apiInstance->accountCheck($random, $account_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountCheck: ', $e->getMessage(), PHP_EOL;
}

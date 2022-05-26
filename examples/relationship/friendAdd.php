<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");


$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$friendAddRequest = new \TencentCloud\IM\Model\FriendAddRequest(); // \TencentCloud\IM\Model\FriendAddRequest |
//TODO: Set the request parameters
$friendAddRequest->setFromAccount("");
$friendAddRequest->setForceAddFlags(0);
$friendAddRequest->setAddFriendItem(array(0 => array("To_Account" => "", "AddSource" => "")));


try {
    $result = $apiInstance->friendAdd($random, $friendAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendAdd: ', $e->getMessage(), PHP_EOL;
}
?>
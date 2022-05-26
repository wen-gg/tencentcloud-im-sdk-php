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
$friendUpdateRequest = new \TencentCloud\IM\Model\FriendUpdateRequest(); // \TencentCloud\IM\Model\FriendUpdateRequest |
//TODO: Set the request parameters
$friendUpdateRequest->setFromAccount("");
$friendUpdateRequest->setUpdateItem(array(0 => array("To_Account" => "", "SnsItem" => array(0 => array("Tag" => "", "Value" => array(""))))));

try {
    $result = $apiInstance->friendUpdate($random, $friendUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\SingleChatApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$getRoamMsgRequest = new \TencentCloud\IM\Model\GetRoamMsgRequest(); // \TencentCloud\IM\Model\GetRoamMsgRequest |
//TODO: Set the request parameters
$getRoamMsgRequest->setFromAccount("");
$getRoamMsgRequest->setToAccount("");
$getRoamMsgRequest->setLastMsgKey("");
$getRoamMsgRequest->setLastMsgKey("");
$getRoamMsgRequest->setMaxCnt(1);
$getRoamMsgRequest->setMinTime(1);
$getRoamMsgRequest->setMaxTime(1);


try {
    $result = $apiInstance->adminGetroammsg($random, $getRoamMsgRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->adminGetroammsg: ', $e->getMessage(), PHP_EOL;
}
?>
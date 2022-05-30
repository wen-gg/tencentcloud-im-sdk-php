<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\GroupApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$importGroupMsgRequest = new \TencentCloud\IM\Model\ImportGroupMsgRequest(); // \TencentCloud\IM\Model\ImportGroupMsgRequest |
//TODO: Set the request parameters
$importGroupMsgRequest->setGroupId("");
$importGroupMsgRequest->setRecentContactFlag(1);
$importGroupMsgRequest->setMsgList(array(0 => array("From_Account" => "", "SendTime" => 1653389855, "MsgBody" => array(0 => array("MsgType" => "TIMFaceElem", "MsgContent" => array("Text" => ""))))));

try {
    $result = $apiInstance->importGroupMsg($random, $importGroupMsgRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->importGroupMsg: ', $e->getMessage(), PHP_EOL;
}
?>
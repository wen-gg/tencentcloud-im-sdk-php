<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$imAddTagRequest = new \TencentCloud\IM\Model\ImAddTagRequest(); // \TencentCloud\IM\Model\ImAddTagRequest |
//TODO: Set the request parameters
$imAddTagRequest->setToAccount("");
$imAddTagRequest->setTags(array("1","2"));

try {
    $result = $apiInstance->imAddTag($random, $imAddTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imAddTag: ', $e->getMessage(), PHP_EOL;
}
?>

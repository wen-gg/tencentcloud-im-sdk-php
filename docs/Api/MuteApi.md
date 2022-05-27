# TencentCloud\IM\MuteApi

All URIs are relative to *https://console.tim.qq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getnospeaking**](MuteApi.md#getnospeaking) | **POST** /v4/openconfigsvr/getnospeaking | 查询全局禁言（https://cloud.tencent.com/document/product/269/4229）
[**setnospeaking**](MuteApi.md#setnospeaking) | **POST** /v4/openconfigsvr/setnospeaking | 设置全局禁言（https://cloud.tencent.com/document/product/269/4230）


# **getnospeaking**
> \TencentCloud\IM\Model\GetNoSpeakingResponse getnospeaking($random, $getNoSpeakingRequest)

查询全局禁言（https://cloud.tencent.com/document/product/269/4229）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$config = new Configuration();
//TODO: 此处替换成您的SDKAppID,应用 SDKAppID，可在即时通信 IM 控制台（https://console.cloud.tencent.com/im） 的应用卡片中获取。
$config->setSdkappid(123456789);
//TODO: 此处替换成您的identifier;用户名，调用 REST API时必须为App管理员帐号 参考:https://cloud.tencent.com/document/product/269/31999#app-.E7.AE.A1.E7.90.86.E5.91.98
$config->setIdentifier("identifier");
//TODO: 此处替换成您的key, 参考：https://cloud.tencent.com/document/product/269/32688#getkey
$config->setKey("key");

$apiInstance = new TencentCloud\IM\Api\MuteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getNoSpeakingRequest = new \TencentCloud\IM\Model\GetNoSpeakingRequest(); // \TencentCloud\IM\Model\GetNoSpeakingRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getnospeaking($random, $getNoSpeakingRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling MuteApi->getnospeaking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getNoSpeakingRequest** | [**\TencentCloud\IM\Model\GetNoSpeakingRequest**](../Model/GetNoSpeakingRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetNoSpeakingResponse**](../Model/GetNoSpeakingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setnospeaking**
> \TencentCloud\IM\Model\CommonResponse setnospeaking($random, $setNoSpeakingRequest)

设置全局禁言（https://cloud.tencent.com/document/product/269/4230）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$config = new Configuration();
//TODO: 此处替换成您的SDKAppID,应用 SDKAppID，可在即时通信 IM 控制台（https://console.cloud.tencent.com/im） 的应用卡片中获取。
$config->setSdkappid(123456789);
//TODO: 此处替换成您的identifier;用户名，调用 REST API时必须为App管理员帐号 参考:https://cloud.tencent.com/document/product/269/31999#app-.E7.AE.A1.E7.90.86.E5.91.98
$config->setIdentifier("identifier");
//TODO: 此处替换成您的key, 参考：https://cloud.tencent.com/document/product/269/32688#getkey
$config->setKey("key");

$apiInstance = new TencentCloud\IM\Api\MuteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$setNoSpeakingRequest = new \TencentCloud\IM\Model\SetNoSpeakingRequest(); // \TencentCloud\IM\Model\SetNoSpeakingRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->setnospeaking($random, $setNoSpeakingRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling MuteApi->setnospeaking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **setNoSpeakingRequest** | [**\TencentCloud\IM\Model\SetNoSpeakingRequest**](../Model/SetNoSpeakingRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


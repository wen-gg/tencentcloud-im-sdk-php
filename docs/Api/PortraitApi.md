# TencentCloud\IM\PortraitApi

All URIs are relative to *https://console.tim.qq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portraitGet**](PortraitApi.md#portraitGet) | **POST** /v4/profile/portrait_get | 拉取资料（https://cloud.tencent.com/document/product/269/1639）
[**portraitSet**](PortraitApi.md#portraitSet) | **POST** /v4/profile/portrait_set | 设置资料（https://cloud.tencent.com/document/product/269/1640）


# **portraitGet**
> \TencentCloud\IM\Model\PortraitGetResponse portraitGet($random, $portraitGetRequest)

拉取资料（https://cloud.tencent.com/document/product/269/1639）

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

$apiInstance = new TencentCloud\IM\Api\PortraitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$portraitGetRequest = new \TencentCloud\IM\Model\PortraitGetRequest(); // \TencentCloud\IM\Model\PortraitGetRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->portraitGet($random, $portraitGetRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling PortraitApi->portraitGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **portraitGetRequest** | [**\TencentCloud\IM\Model\PortraitGetRequest**](../Model/PortraitGetRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\PortraitGetResponse**](../Model/PortraitGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portraitSet**
> \TencentCloud\IM\Model\PortraitSetResponse portraitSet($random, $portraitSetRequest)

设置资料（https://cloud.tencent.com/document/product/269/1640）

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

$apiInstance = new TencentCloud\IM\Api\PortraitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$portraitSetRequest = new \TencentCloud\IM\Model\PortraitSetRequest(); // \TencentCloud\IM\Model\PortraitSetRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->portraitSet($random, $portraitSetRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling PortraitApi->portraitSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **portraitSetRequest** | [**\TencentCloud\IM\Model\PortraitSetRequest**](../Model/PortraitSetRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\PortraitSetResponse**](../Model/PortraitSetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


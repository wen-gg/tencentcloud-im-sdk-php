# TencentCloud\IM\RecentContactApi

All URIs are relative to *https://console.tim.qq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRecentContact**](RecentContactApi.md#deleteRecentContact) | **POST** /v4/recentcontact/delete | 删除单个会话（https://cloud.tencent.com/document/product/269/62119）
[**getRecentContactList**](RecentContactApi.md#getRecentContactList) | **POST** /v4/recentcontact/get_list | 拉取会话列表（https://cloud.tencent.com/document/product/269/62118）


# **deleteRecentContact**
> \TencentCloud\IM\Model\GetRecentContactListGroupDeleteResponse deleteRecentContact($random, $getRecentContactListGroupDeleteRequest)

删除单个会话（https://cloud.tencent.com/document/product/269/62119）

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

$apiInstance = new TencentCloud\IM\Api\RecentContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getRecentContactListGroupDeleteRequest = new \TencentCloud\IM\Model\GetRecentContactListGroupDeleteRequest(); // \TencentCloud\IM\Model\GetRecentContactListGroupDeleteRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->deleteRecentContact($random, $getRecentContactListGroupDeleteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecentContactApi->deleteRecentContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getRecentContactListGroupDeleteRequest** | [**\TencentCloud\IM\Model\GetRecentContactListGroupDeleteRequest**](../Model/GetRecentContactListGroupDeleteRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetRecentContactListGroupDeleteResponse**](../Model/GetRecentContactListGroupDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecentContactList**
> \TencentCloud\IM\Model\GetRecentContactListGroupGetResponse getRecentContactList($random, $getRecentContactListGroupGetRequest)

拉取会话列表（https://cloud.tencent.com/document/product/269/62118）

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

$apiInstance = new TencentCloud\IM\Api\RecentContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getRecentContactListGroupGetRequest = new \TencentCloud\IM\Model\GetRecentContactListGroupGetRequest(); // \TencentCloud\IM\Model\GetRecentContactListGroupGetRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getRecentContactList($random, $getRecentContactListGroupGetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecentContactApi->getRecentContactList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getRecentContactListGroupGetRequest** | [**\TencentCloud\IM\Model\GetRecentContactListGroupGetRequest**](../Model/GetRecentContactListGroupGetRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetRecentContactListGroupGetResponse**](../Model/GetRecentContactListGroupGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


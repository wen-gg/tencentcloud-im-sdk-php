# TencentCloud\IM\OperationApi

All URIs are relative to *https://console.tim.qq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistory**](OperationApi.md#getHistory) | **POST** /v4/open_msg_svc/get_history | 下载最近消息记录（https://cloud.tencent.com/document/product/269/1650）
[**getIPList**](OperationApi.md#getIPList) | **POST** /v4/ConfigSvc/GetIPList | 获取服务器 IP 地址（https://cloud.tencent.com/document/product/269/45438）
[**getappinfo**](OperationApi.md#getappinfo) | **POST** /v4/openconfigsvr/getappinfo | 拉取运营数据（https://cloud.tencent.com/document/product/269/4193）


# **getHistory**
> \TencentCloud\IM\Model\GetOperateMsgHistoryResponse getHistory($random, $getOperateMsgHistoryRequest)

下载最近消息记录（https://cloud.tencent.com/document/product/269/1650）

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

$apiInstance = new TencentCloud\IM\Api\OperationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getOperateMsgHistoryRequest = new \TencentCloud\IM\Model\GetOperateMsgHistoryRequest(); // \TencentCloud\IM\Model\GetOperateMsgHistoryRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getHistory($random, $getOperateMsgHistoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApi->getHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getOperateMsgHistoryRequest** | [**\TencentCloud\IM\Model\GetOperateMsgHistoryRequest**](../Model/GetOperateMsgHistoryRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetOperateMsgHistoryResponse**](../Model/GetOperateMsgHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIPList**
> \TencentCloud\IM\Model\GetIPListResponse getIPList($random, $getIPListRequest)

获取服务器 IP 地址（https://cloud.tencent.com/document/product/269/45438）

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

$apiInstance = new TencentCloud\IM\Api\OperationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getIPListRequest = new \TencentCloud\IM\Model\GetIPListRequest(); // \TencentCloud\IM\Model\GetIPListRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getIPList($random, $getIPListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApi->getIPList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getIPListRequest** | [**\TencentCloud\IM\Model\GetIPListRequest**](../Model/GetIPListRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetIPListResponse**](../Model/GetIPListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getappinfo**
> \TencentCloud\IM\Model\GetAppInfoResponse getappinfo($random, $getAppInfoRequest)

拉取运营数据（https://cloud.tencent.com/document/product/269/4193）

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

$apiInstance = new TencentCloud\IM\Api\OperationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getAppInfoRequest = new \TencentCloud\IM\Model\GetAppInfoRequest(); // \TencentCloud\IM\Model\GetAppInfoRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getappinfo($random, $getAppInfoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApi->getappinfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getAppInfoRequest** | [**\TencentCloud\IM\Model\GetAppInfoRequest**](../Model/GetAppInfoRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetAppInfoResponse**](../Model/GetAppInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


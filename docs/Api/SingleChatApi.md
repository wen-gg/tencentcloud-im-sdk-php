# TencentCloud\IM\SingleChatApi

All URIs are relative to *https://console.tim.qq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminGetroammsg**](SingleChatApi.md#adminGetroammsg) | **POST** /v4/openim/admin_getroammsg | 查询单聊消息（https://cloud.tencent.com/document/product/269/42794）
[**adminMsgwithdraw**](SingleChatApi.md#adminMsgwithdraw) | **POST** /v4/openim/admin_msgwithdraw | 撤回单聊消息（https://cloud.tencent.com/document/product/269/38980）
[**adminSetMsgRead**](SingleChatApi.md#adminSetMsgRead) | **POST** /v4/openim/admin_set_msg_read | 设置单聊消息已读（https://cloud.tencent.com/document/product/269/50349）
[**batchsendmsg**](SingleChatApi.md#batchsendmsg) | **POST** /v4/openim/batchsendmsg | 批量发单聊消息（https://cloud.tencent.com/document/product/269/1612）
[**getC2cUnreadMsgNum**](SingleChatApi.md#getC2cUnreadMsgNum) | **POST** /v4/openim/get_c2c_unread_msg_num | 查询单聊未读消息计数（https://cloud.tencent.com/document/product/269/56043）
[**importmsg**](SingleChatApi.md#importmsg) | **POST** /v4/openim/importmsg | 导入单聊消息（https://cloud.tencent.com/document/product/269/2568）
[**sendmsg**](SingleChatApi.md#sendmsg) | **POST** /v4/openim/sendmsg | 单发单聊消息（https://cloud.tencent.com/document/product/269/2282）


# **adminGetroammsg**
> \TencentCloud\IM\Model\GetRoamMsgResponse adminGetroammsg($random, $getRoamMsgRequest)

查询单聊消息（https://cloud.tencent.com/document/product/269/42794）

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

$apiInstance = new TencentCloud\IM\Api\SingleChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getRoamMsgRequest = new \TencentCloud\IM\Model\GetRoamMsgRequest(); // \TencentCloud\IM\Model\GetRoamMsgRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->adminGetroammsg($random, $getRoamMsgRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->adminGetroammsg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getRoamMsgRequest** | [**\TencentCloud\IM\Model\GetRoamMsgRequest**](../Model/GetRoamMsgRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetRoamMsgResponse**](../Model/GetRoamMsgResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminMsgwithdraw**
> \TencentCloud\IM\Model\CommonResponse adminMsgwithdraw($random, $msgWithdrawRequest)

撤回单聊消息（https://cloud.tencent.com/document/product/269/38980）

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

$apiInstance = new TencentCloud\IM\Api\SingleChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$msgWithdrawRequest = new \TencentCloud\IM\Model\MsgWithdrawRequest(); // \TencentCloud\IM\Model\MsgWithdrawRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->adminMsgwithdraw($random, $msgWithdrawRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->adminMsgwithdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **msgWithdrawRequest** | [**\TencentCloud\IM\Model\MsgWithdrawRequest**](../Model/MsgWithdrawRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminSetMsgRead**
> \TencentCloud\IM\Model\CommonResponse adminSetMsgRead($random, $setMsgReadRequest)

设置单聊消息已读（https://cloud.tencent.com/document/product/269/50349）

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

$apiInstance = new TencentCloud\IM\Api\SingleChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$setMsgReadRequest = new \TencentCloud\IM\Model\SetMsgReadRequest(); // \TencentCloud\IM\Model\SetMsgReadRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->adminSetMsgRead($random, $setMsgReadRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->adminSetMsgRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **setMsgReadRequest** | [**\TencentCloud\IM\Model\SetMsgReadRequest**](../Model/SetMsgReadRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchsendmsg**
> \TencentCloud\IM\Model\BatchSendSingleChatMsgResponse batchsendmsg($random, $batchSendSingleChatMsgRequest)

批量发单聊消息（https://cloud.tencent.com/document/product/269/1612）

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

$apiInstance = new TencentCloud\IM\Api\SingleChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$batchSendSingleChatMsgRequest = new \TencentCloud\IM\Model\BatchSendSingleChatMsgRequest(); // \TencentCloud\IM\Model\BatchSendSingleChatMsgRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->batchsendmsg($random, $batchSendSingleChatMsgRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->batchsendmsg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **batchSendSingleChatMsgRequest** | [**\TencentCloud\IM\Model\BatchSendSingleChatMsgRequest**](../Model/BatchSendSingleChatMsgRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\BatchSendSingleChatMsgResponse**](../Model/BatchSendSingleChatMsgResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getC2cUnreadMsgNum**
> \TencentCloud\IM\Model\GetC2cUnreadMsgNumResponse getC2cUnreadMsgNum($random, $getC2cUnreadMsgNumRequest)

查询单聊未读消息计数（https://cloud.tencent.com/document/product/269/56043）

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

$apiInstance = new TencentCloud\IM\Api\SingleChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getC2cUnreadMsgNumRequest = new \TencentCloud\IM\Model\GetC2cUnreadMsgNumRequest(); // \TencentCloud\IM\Model\GetC2cUnreadMsgNumRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getC2cUnreadMsgNum($random, $getC2cUnreadMsgNumRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->getC2cUnreadMsgNum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getC2cUnreadMsgNumRequest** | [**\TencentCloud\IM\Model\GetC2cUnreadMsgNumRequest**](../Model/GetC2cUnreadMsgNumRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetC2cUnreadMsgNumResponse**](../Model/GetC2cUnreadMsgNumResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importmsg**
> \TencentCloud\IM\Model\CommonResponse importmsg($random, $importMsgRequest)

导入单聊消息（https://cloud.tencent.com/document/product/269/2568）

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

$apiInstance = new TencentCloud\IM\Api\SingleChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$importMsgRequest = new \TencentCloud\IM\Model\ImportMsgRequest(); // \TencentCloud\IM\Model\ImportMsgRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->importmsg($random, $importMsgRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->importmsg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **importMsgRequest** | [**\TencentCloud\IM\Model\ImportMsgRequest**](../Model/ImportMsgRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendmsg**
> \TencentCloud\IM\Model\SendSingleChatMsgResponse sendmsg($random, $sendSingleChatMsgRequest)

单发单聊消息（https://cloud.tencent.com/document/product/269/2282）

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

$apiInstance = new TencentCloud\IM\Api\SingleChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$sendSingleChatMsgRequest = new \TencentCloud\IM\Model\SendSingleChatMsgRequest(); // \TencentCloud\IM\Model\SendSingleChatMsgRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->sendmsg($random, $sendSingleChatMsgRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling SingleChatApi->sendmsg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **sendSingleChatMsgRequest** | [**\TencentCloud\IM\Model\SendSingleChatMsgRequest**](../Model/SendSingleChatMsgRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\SendSingleChatMsgResponse**](../Model/SendSingleChatMsgResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


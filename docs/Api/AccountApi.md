# TencentCloud\IM\AccountApi

All URIs are relative to *https://console.tim.qq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountCheck**](AccountApi.md#accountCheck) | **POST** /v4/im_open_login_svc/account_check | 查询帐号 (https://cloud.tencent.com/document/product/269/38417)
[**accountDelete**](AccountApi.md#accountDelete) | **POST** /v4/im_open_login_svc/account_delete | 删除帐号（https://cloud.tencent.com/document/product/269/36443）
[**accountImport**](AccountApi.md#accountImport) | **POST** /v4/im_open_login_svc/account_import | 导入单个帐号（https://cloud.tencent.com/document/product/269/1608）
[**kick**](AccountApi.md#kick) | **POST** /v4/im_open_login_svc/kick | 失效帐号登录状态（https://cloud.tencent.com/document/product/269/3853）
[**multiAccountImport**](AccountApi.md#multiAccountImport) | **POST** /v4/im_open_login_svc/multiaccount_import | 导入多个帐号（https://cloud.tencent.com/document/product/269/4919）
[**queryOnlineStatus**](AccountApi.md#queryOnlineStatus) | **POST** /v4/openim/query_online_status | 查询帐号在线状态（https://cloud.tencent.com/document/product/269/2566）


# **accountCheck**
> \TencentCloud\IM\Model\AccountCheckResponse accountCheck($random, $accountCheckRequest)

查询帐号 (https://cloud.tencent.com/document/product/269/38417)

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

$apiInstance = new TencentCloud\IM\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$accountCheckRequest = new \TencentCloud\IM\Model\AccountCheckRequest(); // \TencentCloud\IM\Model\AccountCheckRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->accountCheck($random, $accountCheckRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **accountCheckRequest** | [**\TencentCloud\IM\Model\AccountCheckRequest**](../Model/AccountCheckRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\AccountCheckResponse**](../Model/AccountCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountDelete**
> \TencentCloud\IM\Model\AccountDeleteResponse accountDelete($random, $accountDeleteRequest)

删除帐号（https://cloud.tencent.com/document/product/269/36443）

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

$apiInstance = new TencentCloud\IM\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$accountDeleteRequest = new \TencentCloud\IM\Model\AccountDeleteRequest(); // \TencentCloud\IM\Model\AccountDeleteRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->accountDelete($random, $accountDeleteRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **accountDeleteRequest** | [**\TencentCloud\IM\Model\AccountDeleteRequest**](../Model/AccountDeleteRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\AccountDeleteResponse**](../Model/AccountDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountImport**
> \TencentCloud\IM\Model\CommonResponse accountImport($random, $accountImportRequest)

导入单个帐号（https://cloud.tencent.com/document/product/269/1608）

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

$apiInstance = new TencentCloud\IM\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$accountImportRequest = new \TencentCloud\IM\Model\AccountImportRequest(); // \TencentCloud\IM\Model\AccountImportRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->accountImport($random, $accountImportRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **accountImportRequest** | [**\TencentCloud\IM\Model\AccountImportRequest**](../Model/AccountImportRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kick**
> \TencentCloud\IM\Model\CommonResponse kick($random, $kickRequest)

失效帐号登录状态（https://cloud.tencent.com/document/product/269/3853）

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

$apiInstance = new TencentCloud\IM\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$kickRequest = new \TencentCloud\IM\Model\KickRequest(); // \TencentCloud\IM\Model\KickRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->kick($random, $kickRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->kick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **kickRequest** | [**\TencentCloud\IM\Model\KickRequest**](../Model/KickRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multiAccountImport**
> \TencentCloud\IM\Model\MultiAccountImportResponse multiAccountImport($random, $multiAccountImportRequest)

导入多个帐号（https://cloud.tencent.com/document/product/269/4919）

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

$apiInstance = new TencentCloud\IM\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$multiAccountImportRequest = new \TencentCloud\IM\Model\MultiAccountImportRequest(); // \TencentCloud\IM\Model\MultiAccountImportRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->multiAccountImport($random, $multiAccountImportRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->multiAccountImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **multiAccountImportRequest** | [**\TencentCloud\IM\Model\MultiAccountImportRequest**](../Model/MultiAccountImportRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\MultiAccountImportResponse**](../Model/MultiAccountImportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryOnlineStatus**
> \TencentCloud\IM\Model\QueryOnlineStatusResponse queryOnlineStatus($random, $queryOnlineStatusRequest)

查询帐号在线状态（https://cloud.tencent.com/document/product/269/2566）

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

$apiInstance = new TencentCloud\IM\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$queryOnlineStatusRequest = new \TencentCloud\IM\Model\QueryOnlineStatusRequest(); // \TencentCloud\IM\Model\QueryOnlineStatusRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->queryOnlineStatus($random, $queryOnlineStatusRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryOnlineStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **queryOnlineStatusRequest** | [**\TencentCloud\IM\Model\QueryOnlineStatusRequest**](../Model/QueryOnlineStatusRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\QueryOnlineStatusResponse**](../Model/QueryOnlineStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


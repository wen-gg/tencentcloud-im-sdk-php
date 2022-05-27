# TencentCloud\IM\RelationshipsApi

All URIs are relative to *https://console.tim.qq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**blackListAdd**](RelationshipsApi.md#blackListAdd) | **POST** /v4/sns/black_list_add | 添加黑名单（https://cloud.tencent.com/document/product/269/3718）
[**blackListCheck**](RelationshipsApi.md#blackListCheck) | **POST** /v4/sns/black_list_check | 校验黑名单（https://cloud.tencent.com/document/product/269/3725）
[**blackListDelete**](RelationshipsApi.md#blackListDelete) | **POST** /v4/sns/black_list_delete | 删除黑名单（https://cloud.tencent.com/document/product/269/3719）
[**blackListGet**](RelationshipsApi.md#blackListGet) | **POST** /v4/sns/black_list_get | 拉取黑名单（https://cloud.tencent.com/document/product/269/3722）
[**friendAdd**](RelationshipsApi.md#friendAdd) | **POST** /v4/sns/friend_add | 添加好友（https://cloud.tencent.com/document/product/269/1643）
[**friendCheck**](RelationshipsApi.md#friendCheck) | **POST** /v4/sns/friend_check | 校验好友（https://cloud.tencent.com/document/product/269/1646）
[**friendDelete**](RelationshipsApi.md#friendDelete) | **POST** /v4/sns/friend_delete | 删除好友（https://cloud.tencent.com/document/product/269/1644）
[**friendDeleteAll**](RelationshipsApi.md#friendDeleteAll) | **POST** /v4/sns/friend_delete_all | 删除所有好友（https://cloud.tencent.com/document/product/269/1645）
[**friendGet**](RelationshipsApi.md#friendGet) | **POST** /v4/sns/friend_get | 拉取好友（https://cloud.tencent.com/document/product/269/1647）
[**friendGetList**](RelationshipsApi.md#friendGetList) | **POST** /v4/sns/friend_get_list | 拉取指定好友（https://cloud.tencent.com/document/product/269/8609）
[**friendImport**](RelationshipsApi.md#friendImport) | **POST** /v4/sns/friend_import | 导入好友（https://cloud.tencent.com/document/product/269/8301）
[**friendUpdate**](RelationshipsApi.md#friendUpdate) | **POST** /v4/sns/friend_update | 更新好友（https://cloud.tencent.com/document/product/269/12525）
[**groupAdd**](RelationshipsApi.md#groupAdd) | **POST** /v4/sns/group_add | 添加分组（https://cloud.tencent.com/document/product/269/10107）
[**groupDelete**](RelationshipsApi.md#groupDelete) | **POST** /v4/sns/group_delete | 删除分组（https://cloud.tencent.com/document/product/269/10108）
[**groupGet**](RelationshipsApi.md#groupGet) | **POST** /v4/sns/group_get | 拉取分组（https://cloud.tencent.com/document/product/269/54763）


# **blackListAdd**
> \TencentCloud\IM\Model\BlackListAddResponse blackListAdd($random, $blackListAddRequest)

添加黑名单（https://cloud.tencent.com/document/product/269/3718）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$blackListAddRequest = new \TencentCloud\IM\Model\BlackListAddRequest(); // \TencentCloud\IM\Model\BlackListAddRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->blackListAdd($random, $blackListAddRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->blackListAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **blackListAddRequest** | [**\TencentCloud\IM\Model\BlackListAddRequest**](../Model/BlackListAddRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\BlackListAddResponse**](../Model/BlackListAddResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blackListCheck**
> \TencentCloud\IM\Model\BlackListCheckResponse blackListCheck($random, $blackListCheckRequest)

校验黑名单（https://cloud.tencent.com/document/product/269/3725）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$blackListCheckRequest = new \TencentCloud\IM\Model\BlackListCheckRequest(); // \TencentCloud\IM\Model\BlackListCheckRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->blackListCheck($random, $blackListCheckRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->blackListCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **blackListCheckRequest** | [**\TencentCloud\IM\Model\BlackListCheckRequest**](../Model/BlackListCheckRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\BlackListCheckResponse**](../Model/BlackListCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blackListDelete**
> \TencentCloud\IM\Model\BlackListDeleteResponse blackListDelete($random, $blackListDeleteRequest)

删除黑名单（https://cloud.tencent.com/document/product/269/3719）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$blackListDeleteRequest = new \TencentCloud\IM\Model\BlackListDeleteRequest(); // \TencentCloud\IM\Model\BlackListDeleteRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->blackListDelete($random, $blackListDeleteRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->blackListDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **blackListDeleteRequest** | [**\TencentCloud\IM\Model\BlackListDeleteRequest**](../Model/BlackListDeleteRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\BlackListDeleteResponse**](../Model/BlackListDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blackListGet**
> \TencentCloud\IM\Model\BlackListGetResponse blackListGet($random, $blackListGetRequest)

拉取黑名单（https://cloud.tencent.com/document/product/269/3722）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$blackListGetRequest = new \TencentCloud\IM\Model\BlackListGetRequest(); // \TencentCloud\IM\Model\BlackListGetRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->blackListGet($random, $blackListGetRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->blackListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **blackListGetRequest** | [**\TencentCloud\IM\Model\BlackListGetRequest**](../Model/BlackListGetRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\BlackListGetResponse**](../Model/BlackListGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **friendAdd**
> \TencentCloud\IM\Model\FriendAddResponse friendAdd($random, $friendAddRequest)

添加好友（https://cloud.tencent.com/document/product/269/1643）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$friendAddRequest = new \TencentCloud\IM\Model\FriendAddRequest(); // \TencentCloud\IM\Model\FriendAddRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->friendAdd($random, $friendAddRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **friendAddRequest** | [**\TencentCloud\IM\Model\FriendAddRequest**](../Model/FriendAddRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\FriendAddResponse**](../Model/FriendAddResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **friendCheck**
> \TencentCloud\IM\Model\FriendCheckResponse friendCheck($random, $friendCheckRequest)

校验好友（https://cloud.tencent.com/document/product/269/1646）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$friendCheckRequest = new \TencentCloud\IM\Model\FriendCheckRequest(); // \TencentCloud\IM\Model\FriendCheckRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->friendCheck($random, $friendCheckRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **friendCheckRequest** | [**\TencentCloud\IM\Model\FriendCheckRequest**](../Model/FriendCheckRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\FriendCheckResponse**](../Model/FriendCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **friendDelete**
> \TencentCloud\IM\Model\FriendDeleteResponse friendDelete($random, $friendDeleteRequest)

删除好友（https://cloud.tencent.com/document/product/269/1644）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$friendDeleteRequest = new \TencentCloud\IM\Model\FriendDeleteRequest(); // \TencentCloud\IM\Model\FriendDeleteRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->friendDelete($random, $friendDeleteRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **friendDeleteRequest** | [**\TencentCloud\IM\Model\FriendDeleteRequest**](../Model/FriendDeleteRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\FriendDeleteResponse**](../Model/FriendDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **friendDeleteAll**
> \TencentCloud\IM\Model\FriendDeleteAllResponse friendDeleteAll($random, $friendDeleteAllRequest)

删除所有好友（https://cloud.tencent.com/document/product/269/1645）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$friendDeleteAllRequest = new \TencentCloud\IM\Model\FriendDeleteAllRequest(); // \TencentCloud\IM\Model\FriendDeleteAllRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->friendDeleteAll($random, $friendDeleteAllRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendDeleteAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **friendDeleteAllRequest** | [**\TencentCloud\IM\Model\FriendDeleteAllRequest**](../Model/FriendDeleteAllRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\FriendDeleteAllResponse**](../Model/FriendDeleteAllResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **friendGet**
> \TencentCloud\IM\Model\FriendGetResponse friendGet($random, $friendGetRequest)

拉取好友（https://cloud.tencent.com/document/product/269/1647）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$friendGetRequest = new \TencentCloud\IM\Model\FriendGetRequest(); // \TencentCloud\IM\Model\FriendGetRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->friendGet($random, $friendGetRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **friendGetRequest** | [**\TencentCloud\IM\Model\FriendGetRequest**](../Model/FriendGetRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\FriendGetResponse**](../Model/FriendGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **friendGetList**
> \TencentCloud\IM\Model\FriendGetListResponse friendGetList($random, $friendGetListRequest)

拉取指定好友（https://cloud.tencent.com/document/product/269/8609）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$friendGetListRequest = new \TencentCloud\IM\Model\FriendGetListRequest(); // \TencentCloud\IM\Model\FriendGetListRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->friendGetList($random, $friendGetListRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **friendGetListRequest** | [**\TencentCloud\IM\Model\FriendGetListRequest**](../Model/FriendGetListRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\FriendGetListResponse**](../Model/FriendGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **friendImport**
> \TencentCloud\IM\Model\FriendImportResponse friendImport($random, $friendImportRequest)

导入好友（https://cloud.tencent.com/document/product/269/8301）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$friendImportRequest = new \TencentCloud\IM\Model\FriendImportRequest(); // \TencentCloud\IM\Model\FriendImportRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->friendImport($random, $friendImportRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **friendImportRequest** | [**\TencentCloud\IM\Model\FriendImportRequest**](../Model/FriendImportRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\FriendImportResponse**](../Model/FriendImportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **friendUpdate**
> \TencentCloud\IM\Model\FriendUpdateResponse friendUpdate($random, $friendUpdateRequest)

更新好友（https://cloud.tencent.com/document/product/269/12525）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$friendUpdateRequest = new \TencentCloud\IM\Model\FriendUpdateRequest(); // \TencentCloud\IM\Model\FriendUpdateRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->friendUpdate($random, $friendUpdateRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->friendUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **friendUpdateRequest** | [**\TencentCloud\IM\Model\FriendUpdateRequest**](../Model/FriendUpdateRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\FriendUpdateResponse**](../Model/FriendUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupAdd**
> \TencentCloud\IM\Model\GroupAddResponse groupAdd($random, $groupAddRequest)

添加分组（https://cloud.tencent.com/document/product/269/10107）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$groupAddRequest = new \TencentCloud\IM\Model\GroupAddRequest(); // \TencentCloud\IM\Model\GroupAddRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->groupAdd($random, $groupAddRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->groupAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **groupAddRequest** | [**\TencentCloud\IM\Model\GroupAddRequest**](../Model/GroupAddRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GroupAddResponse**](../Model/GroupAddResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupDelete**
> \TencentCloud\IM\Model\GroupDeleteResponse groupDelete($random, $groupDeleteRequest)

删除分组（https://cloud.tencent.com/document/product/269/10108）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$groupDeleteRequest = new \TencentCloud\IM\Model\GroupDeleteRequest(); // \TencentCloud\IM\Model\GroupDeleteRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->groupDelete($random, $groupDeleteRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->groupDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **groupDeleteRequest** | [**\TencentCloud\IM\Model\GroupDeleteRequest**](../Model/GroupDeleteRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GroupDeleteResponse**](../Model/GroupDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupGet**
> \TencentCloud\IM\Model\GroupGetResponse groupGet($random, $groupGetRequest)

拉取分组（https://cloud.tencent.com/document/product/269/54763）

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

$apiInstance = new TencentCloud\IM\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$groupGetRequest = new \TencentCloud\IM\Model\GroupGetRequest(); // \TencentCloud\IM\Model\GroupGetRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->groupGet($random, $groupGetRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->groupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **groupGetRequest** | [**\TencentCloud\IM\Model\GroupGetRequest**](../Model/GroupGetRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GroupGetResponse**](../Model/GroupGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


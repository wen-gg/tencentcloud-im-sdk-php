# TencentCloud\IM\AllMemberPushApi

All URIs are relative to *https://console.tim.qq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**imAddTag**](AllMemberPushApi.md#imAddTag) | **POST** /v4/all_member_push/im_add_tag | 添加用户标签（https://cloud.tencent.com/document/product/269/45941）
[**imGetAttr**](AllMemberPushApi.md#imGetAttr) | **POST** /v4/all_member_push/im_get_attr | 获取用户属性（https://cloud.tencent.com/document/product/269/45937）
[**imGetAttrName**](AllMemberPushApi.md#imGetAttrName) | **POST** /v4/all_member_push/im_get_attr_name | 获取应用属性名称（https://cloud.tencent.com/document/product/269/45936）
[**imGetTag**](AllMemberPushApi.md#imGetTag) | **POST** /v4/all_member_push/im_get_tag | 获取用户标签（https://cloud.tencent.com/document/product/269/45940）
[**imPush**](AllMemberPushApi.md#imPush) | **POST** /v4/all_member_push/im_push | 全员推送（https://cloud.tencent.com/document/product/269/45934）
[**imRemoveAllTags**](AllMemberPushApi.md#imRemoveAllTags) | **POST** /v4/all_member_push/im_remove_all_tags | 删除用户所有标签（https://cloud.tencent.com/document/product/269/45943）
[**imRemoveAttr**](AllMemberPushApi.md#imRemoveAttr) | **POST** /v4/all_member_push/im_remove_attr | 删除用户属性（https://cloud.tencent.com/document/product/269/45939）
[**imRemoveTag**](AllMemberPushApi.md#imRemoveTag) | **POST** /v4/all_member_push/im_remove_tag | 删除用户标签（https://cloud.tencent.com/document/product/269/45942）
[**imSetAttr**](AllMemberPushApi.md#imSetAttr) | **POST** /v4/all_member_push/im_set_attr | 设置用户属性（https://cloud.tencent.com/document/product/269/45938）
[**imSetAttrName**](AllMemberPushApi.md#imSetAttrName) | **POST** /v4/all_member_push/im_set_attr_name | 设置应用属性名称（https://cloud.tencent.com/document/product/269/45935）


# **imAddTag**
> \TencentCloud\IM\Model\CommonResponse imAddTag($random, $imAddTagRequest)

添加用户标签（https://cloud.tencent.com/document/product/269/45941）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imAddTagRequest = new \TencentCloud\IM\Model\ImAddTagRequest(); // \TencentCloud\IM\Model\ImAddTagRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imAddTag($random, $imAddTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imAddTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imAddTagRequest** | [**\TencentCloud\IM\Model\ImAddTagRequest**](../Model/ImAddTagRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imGetAttr**
> \TencentCloud\IM\Model\ImGetAttrResponse imGetAttr($random, $imGetAttrRequest)

获取用户属性（https://cloud.tencent.com/document/product/269/45937）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imGetAttrRequest = new \TencentCloud\IM\Model\ImGetAttrRequest(); // \TencentCloud\IM\Model\ImGetAttrRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imGetAttr($random, $imGetAttrRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imGetAttr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imGetAttrRequest** | [**\TencentCloud\IM\Model\ImGetAttrRequest**](../Model/ImGetAttrRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\ImGetAttrResponse**](../Model/ImGetAttrResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imGetAttrName**
> \TencentCloud\IM\Model\ImGetAttrNameResponse imGetAttrName($random, $imGetAttrNameRequest)

获取应用属性名称（https://cloud.tencent.com/document/product/269/45936）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imGetAttrNameRequest = new \TencentCloud\IM\Model\ImGetAttrNameRequest(); // \TencentCloud\IM\Model\ImGetAttrNameRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imGetAttrName($random, $imGetAttrNameRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imGetAttrName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imGetAttrNameRequest** | [**\TencentCloud\IM\Model\ImGetAttrNameRequest**](../Model/ImGetAttrNameRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\ImGetAttrNameResponse**](../Model/ImGetAttrNameResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imGetTag**
> \TencentCloud\IM\Model\ImGetTagResponse imGetTag($random, $imGetTagRequest)

获取用户标签（https://cloud.tencent.com/document/product/269/45940）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imGetTagRequest = new \TencentCloud\IM\Model\ImGetTagRequest(); // \TencentCloud\IM\Model\ImGetTagRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imGetTag($random, $imGetTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imGetTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imGetTagRequest** | [**\TencentCloud\IM\Model\ImGetTagRequest**](../Model/ImGetTagRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\ImGetTagResponse**](../Model/ImGetTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imPush**
> \TencentCloud\IM\Model\ImPushResponse imPush($random, $imPushRequest)

全员推送（https://cloud.tencent.com/document/product/269/45934）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imPushRequest = new \TencentCloud\IM\Model\ImPushRequest(); // \TencentCloud\IM\Model\ImPushRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imPush($random, $imPushRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imPushRequest** | [**\TencentCloud\IM\Model\ImPushRequest**](../Model/ImPushRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\ImPushResponse**](../Model/ImPushResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imRemoveAllTags**
> \TencentCloud\IM\Model\CommonResponse imRemoveAllTags($random, $imRemoveAllTagRequest)

删除用户所有标签（https://cloud.tencent.com/document/product/269/45943）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imRemoveAllTagRequest = new \TencentCloud\IM\Model\ImRemoveAllTagRequest(); // \TencentCloud\IM\Model\ImRemoveAllTagRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imRemoveAllTags($random, $imRemoveAllTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imRemoveAllTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imRemoveAllTagRequest** | [**\TencentCloud\IM\Model\ImRemoveAllTagRequest**](../Model/ImRemoveAllTagRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imRemoveAttr**
> \TencentCloud\IM\Model\CommonResponse imRemoveAttr($random, $imRemoveAttrRequest)

删除用户属性（https://cloud.tencent.com/document/product/269/45939）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imRemoveAttrRequest = new \TencentCloud\IM\Model\ImRemoveAttrRequest(); // \TencentCloud\IM\Model\ImRemoveAttrRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imRemoveAttr($random, $imRemoveAttrRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imRemoveAttr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imRemoveAttrRequest** | [**\TencentCloud\IM\Model\ImRemoveAttrRequest**](../Model/ImRemoveAttrRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imRemoveTag**
> \TencentCloud\IM\Model\CommonResponse imRemoveTag($random, $imRemoveTagRequest)

删除用户标签（https://cloud.tencent.com/document/product/269/45942）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imRemoveTagRequest = new \TencentCloud\IM\Model\ImRemoveTagRequest(); // \TencentCloud\IM\Model\ImRemoveTagRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imRemoveTag($random, $imRemoveTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imRemoveTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imRemoveTagRequest** | [**\TencentCloud\IM\Model\ImRemoveTagRequest**](../Model/ImRemoveTagRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imSetAttr**
> \TencentCloud\IM\Model\CommonResponse imSetAttr($random, $imSetAttrRequest)

设置用户属性（https://cloud.tencent.com/document/product/269/45938）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imSetAttrRequest = new \TencentCloud\IM\Model\ImSetAttrRequest(); // \TencentCloud\IM\Model\ImSetAttrRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imSetAttr($random, $imSetAttrRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imSetAttr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imSetAttrRequest** | [**\TencentCloud\IM\Model\ImSetAttrRequest**](../Model/ImSetAttrRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imSetAttrName**
> \TencentCloud\IM\Model\CommonResponse imSetAttrName($random, $imSetAttrNameRequest)

设置应用属性名称（https://cloud.tencent.com/document/product/269/45935）

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

$apiInstance = new TencentCloud\IM\Api\AllMemberPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$imSetAttrNameRequest = new \TencentCloud\IM\Model\ImSetAttrNameRequest(); // \TencentCloud\IM\Model\ImSetAttrNameRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->imSetAttrName($random, $imSetAttrNameRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllMemberPushApi->imSetAttrName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **imSetAttrNameRequest** | [**\TencentCloud\IM\Model\ImSetAttrNameRequest**](../Model/ImSetAttrNameRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


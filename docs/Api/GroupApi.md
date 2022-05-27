# TencentCloud\IM\GroupApi

All URIs are relative to *https://console.tim.qq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupMember**](GroupApi.md#addGroupMember) | **POST** /v4/group_open_http_svc/add_group_member | 增加群成员（https://cloud.tencent.com/document/product/269/1621）
[**changeGroupOwner**](GroupApi.md#changeGroupOwner) | **POST** /v4/group_open_http_svc/change_group_owner | 转让群主（https://cloud.tencent.com/document/product/269/1633）
[**clearGroupAttr**](GroupApi.md#clearGroupAttr) | **POST** /v4/group_open_http_svc/clear_group_attr | 清空群自定义属性（https://cloud.tencent.com/document/product/269/67009）
[**createGroup**](GroupApi.md#createGroup) | **POST** /v4/group_open_http_svc/create_group | 创建群组（https://cloud.tencent.com/document/product/269/1615）
[**deleteGroupMember**](GroupApi.md#deleteGroupMember) | **POST** /v4/group_open_http_svc/delete_group_member | 删除群成员（https://cloud.tencent.com/document/product/269/1622）
[**deleteGroupMsgBySender**](GroupApi.md#deleteGroupMsgBySender) | **POST** /v4/group_open_http_svc/delete_group_msg_by_sender | 删除指定用户发送的消息（https://cloud.tencent.com/document/product/269/2359）
[**destroyGroup**](GroupApi.md#destroyGroup) | **POST** /v4/group_open_http_svc/destroy_group | 解散群组(https://cloud.tencent.com/document/product/269/1624)
[**forbidSendMsg**](GroupApi.md#forbidSendMsg) | **POST** /v4/group_open_http_svc/forbid_send_msg | 批量禁言和取消禁言(https://cloud.tencent.com/document/product/269/1627)
[**getAppidGroupList**](GroupApi.md#getAppidGroupList) | **POST** /v4/group_open_http_svc/get_appid_group_list | 获取 App 中的所有群组（https://cloud.tencent.com/document/product/269/1614）
[**getGroupAttr**](GroupApi.md#getGroupAttr) | **POST** /v4/group_open_http_svc/get_group_attr | 获取群自定义属性（https://cloud.tencent.com/document/product/269/67012）
[**getGroupInfo**](GroupApi.md#getGroupInfo) | **POST** /v4/group_open_http_svc/get_group_info | 获取群详细资料（https://cloud.tencent.com/document/product/269/1616）
[**getGroupMemberInfo**](GroupApi.md#getGroupMemberInfo) | **POST** /v4/group_open_http_svc/get_group_member_info | 获取群成员详细资料（https://cloud.tencent.com/document/product/269/1617）
[**getGroupShuttedUin**](GroupApi.md#getGroupShuttedUin) | **POST** /v4/group_open_http_svc/get_group_shutted_uin | 获取被禁言群成员列表(https://cloud.tencent.com/document/product/269/2925)
[**getJoinedGroupList**](GroupApi.md#getJoinedGroupList) | **POST** /v4/group_open_http_svc/get_joined_group_list | 获取用户所加入的群组(https://cloud.tencent.com/document/product/269/1625)
[**getOnlineMemberNum**](GroupApi.md#getOnlineMemberNum) | **POST** /v4/group_open_http_svc/get_online_member_num | 获取直播群在线人数（https://cloud.tencent.com/document/product/269/49180）
[**getRoleInGroup**](GroupApi.md#getRoleInGroup) | **POST** /v4/group_open_http_svc/get_role_in_group | 查询用户在群组中的身份(https://cloud.tencent.com/document/product/269/1626)
[**groupMsgGetSimple**](GroupApi.md#groupMsgGetSimple) | **POST** /v4/group_open_http_svc/group_msg_get_simple | 拉取群历史消息（https://cloud.tencent.com/document/product/269/2738）
[**groupMsgRecall**](GroupApi.md#groupMsgRecall) | **POST** /v4/group_open_http_svc/group_msg_recall | 撤回群消息（https://cloud.tencent.com/document/product/269/12341）
[**importGroup**](GroupApi.md#importGroup) | **POST** /v4/group_open_http_svc/import_group | 导入群基础资料（https://cloud.tencent.com/document/product/269/1634）
[**importGroupMember**](GroupApi.md#importGroupMember) | **POST** /v4/group_open_http_svc/import_group_member | 导入群成员（https://cloud.tencent.com/document/product/269/1636）
[**importGroupMsg**](GroupApi.md#importGroupMsg) | **POST** /v4/group_open_http_svc/import_group_msg | 导入群消息（https://cloud.tencent.com/document/product/269/1635）
[**modifyGroupAttr**](GroupApi.md#modifyGroupAttr) | **POST** /v4/group_open_http_svc/modify_group_attr | 修改群自定义属性（https://cloud.tencent.com/document/product/269/67010）
[**modifyGroupBaseInfo**](GroupApi.md#modifyGroupBaseInfo) | **POST** /v4/group_open_http_svc/modify_group_base_info | 修改群基础资料（https://cloud.tencent.com/document/product/269/1620）
[**modifyGroupMemberInfo**](GroupApi.md#modifyGroupMemberInfo) | **POST** /v4/group_open_http_svc/modify_group_member_info | 修改群成员资料(https://cloud.tencent.com/document/product/269/1623)
[**sendGroupMsg**](GroupApi.md#sendGroupMsg) | **POST** /v4/group_open_http_svc/send_group_msg | 在群组中发送普通消息（https://cloud.tencent.com/document/product/269/1629）
[**sendGroupSystemNotification**](GroupApi.md#sendGroupSystemNotification) | **POST** /v4/group_open_http_svc/send_group_system_notification | 在群组中发送系统通知（https://cloud.tencent.com/document/product/269/1630）
[**setGroupAttr**](GroupApi.md#setGroupAttr) | **POST** /v4/group_open_http_svc/set_group_attr | 重置群自定义属性（https://cloud.tencent.com/document/product/269/67011）
[**setUnreadMsgNum**](GroupApi.md#setUnreadMsgNum) | **POST** /v4/group_open_http_svc/set_unread_msg_num | 设置成员未读消息计数（https://cloud.tencent.com/document/product/269/1637）


# **addGroupMember**
> \TencentCloud\IM\Model\AddGroupMemberResponse addGroupMember($random, $addGroupMemberRequest)

增加群成员（https://cloud.tencent.com/document/product/269/1621）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$addGroupMemberRequest = new \TencentCloud\IM\Model\AddGroupMemberRequest(); // \TencentCloud\IM\Model\AddGroupMemberRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->addGroupMember($random, $addGroupMemberRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addGroupMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **addGroupMemberRequest** | [**\TencentCloud\IM\Model\AddGroupMemberRequest**](../Model/AddGroupMemberRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\AddGroupMemberResponse**](../Model/AddGroupMemberResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeGroupOwner**
> \TencentCloud\IM\Model\CommonResponse changeGroupOwner($random, $changeGroupOwnerRequest)

转让群主（https://cloud.tencent.com/document/product/269/1633）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$changeGroupOwnerRequest = new \TencentCloud\IM\Model\ChangeGroupOwnerRequest(); // \TencentCloud\IM\Model\ChangeGroupOwnerRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->changeGroupOwner($random, $changeGroupOwnerRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->changeGroupOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **changeGroupOwnerRequest** | [**\TencentCloud\IM\Model\ChangeGroupOwnerRequest**](../Model/ChangeGroupOwnerRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearGroupAttr**
> \TencentCloud\IM\Model\CommonResponse clearGroupAttr($random, $clearGroupAttrRequest)

清空群自定义属性（https://cloud.tencent.com/document/product/269/67009）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$clearGroupAttrRequest = new \TencentCloud\IM\Model\ClearGroupAttrRequest(); // \TencentCloud\IM\Model\ClearGroupAttrRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->clearGroupAttr($random, $clearGroupAttrRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->clearGroupAttr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **clearGroupAttrRequest** | [**\TencentCloud\IM\Model\ClearGroupAttrRequest**](../Model/ClearGroupAttrRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \TencentCloud\IM\Model\CreateGroupResponse createGroup($random, $createGroupRequest)

创建群组（https://cloud.tencent.com/document/product/269/1615）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$createGroupRequest = new \TencentCloud\IM\Model\CreateGroupRequest(); // \TencentCloud\IM\Model\CreateGroupRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->createGroup($random, $createGroupRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **createGroupRequest** | [**\TencentCloud\IM\Model\CreateGroupRequest**](../Model/CreateGroupRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CreateGroupResponse**](../Model/CreateGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupMember**
> \TencentCloud\IM\Model\CommonResponse deleteGroupMember($random, $deleteGroupMemberRequest)

删除群成员（https://cloud.tencent.com/document/product/269/1622）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$deleteGroupMemberRequest = new \TencentCloud\IM\Model\DeleteGroupMemberRequest(); // \TencentCloud\IM\Model\DeleteGroupMemberRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->deleteGroupMember($random, $deleteGroupMemberRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **deleteGroupMemberRequest** | [**\TencentCloud\IM\Model\DeleteGroupMemberRequest**](../Model/DeleteGroupMemberRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupMsgBySender**
> \TencentCloud\IM\Model\CommonResponse deleteGroupMsgBySender($random, $deleteGroupMsgBySenderRequest)

删除指定用户发送的消息（https://cloud.tencent.com/document/product/269/2359）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$deleteGroupMsgBySenderRequest = new \TencentCloud\IM\Model\DeleteGroupMsgBySenderRequest(); // \TencentCloud\IM\Model\DeleteGroupMsgBySenderRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->deleteGroupMsgBySender($random, $deleteGroupMsgBySenderRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupMsgBySender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **deleteGroupMsgBySenderRequest** | [**\TencentCloud\IM\Model\DeleteGroupMsgBySenderRequest**](../Model/DeleteGroupMsgBySenderRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destroyGroup**
> \TencentCloud\IM\Model\CommonResponse destroyGroup($random, $destroyGroupRequest)

解散群组(https://cloud.tencent.com/document/product/269/1624)

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$destroyGroupRequest = new \TencentCloud\IM\Model\DestroyGroupRequest(); // \TencentCloud\IM\Model\DestroyGroupRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->destroyGroup($random, $destroyGroupRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->destroyGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **destroyGroupRequest** | [**\TencentCloud\IM\Model\DestroyGroupRequest**](../Model/DestroyGroupRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forbidSendMsg**
> \TencentCloud\IM\Model\CommonResponse forbidSendMsg($random, $forbidSendMsgRequest)

批量禁言和取消禁言(https://cloud.tencent.com/document/product/269/1627)

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$forbidSendMsgRequest = new \TencentCloud\IM\Model\ForbidSendMsgRequest(); // \TencentCloud\IM\Model\ForbidSendMsgRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->forbidSendMsg($random, $forbidSendMsgRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->forbidSendMsg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **forbidSendMsgRequest** | [**\TencentCloud\IM\Model\ForbidSendMsgRequest**](../Model/ForbidSendMsgRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppidGroupList**
> \TencentCloud\IM\Model\GetAppidGroupListResponse getAppidGroupList($random, $getAppidGroupListRequest)

获取 App 中的所有群组（https://cloud.tencent.com/document/product/269/1614）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getAppidGroupListRequest = new \TencentCloud\IM\Model\GetAppidGroupListRequest(); // \TencentCloud\IM\Model\GetAppidGroupListRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getAppidGroupList($random, $getAppidGroupListRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAppidGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getAppidGroupListRequest** | [**\TencentCloud\IM\Model\GetAppidGroupListRequest**](../Model/GetAppidGroupListRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetAppidGroupListResponse**](../Model/GetAppidGroupListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupAttr**
> \TencentCloud\IM\Model\GetGroupAttrResponse getGroupAttr($random, $getGroupAttrRequest)

获取群自定义属性（https://cloud.tencent.com/document/product/269/67012）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getGroupAttrRequest = new \TencentCloud\IM\Model\GetGroupAttrRequest(); // \TencentCloud\IM\Model\GetGroupAttrRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getGroupAttr($random, $getGroupAttrRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupAttr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getGroupAttrRequest** | [**\TencentCloud\IM\Model\GetGroupAttrRequest**](../Model/GetGroupAttrRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetGroupAttrResponse**](../Model/GetGroupAttrResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupInfo**
> \TencentCloud\IM\Model\GetGroupInfoResponse getGroupInfo($random, $getGroupInfoRequest)

获取群详细资料（https://cloud.tencent.com/document/product/269/1616）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getGroupInfoRequest = new \TencentCloud\IM\Model\GetGroupInfoRequest(); // \TencentCloud\IM\Model\GetGroupInfoRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getGroupInfo($random, $getGroupInfoRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getGroupInfoRequest** | [**\TencentCloud\IM\Model\GetGroupInfoRequest**](../Model/GetGroupInfoRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetGroupInfoResponse**](../Model/GetGroupInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupMemberInfo**
> \TencentCloud\IM\Model\GetGroupMemberInfoResponse getGroupMemberInfo($random, $getGroupMemberInfoRequest)

获取群成员详细资料（https://cloud.tencent.com/document/product/269/1617）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getGroupMemberInfoRequest = new \TencentCloud\IM\Model\GetGroupMemberInfoRequest(); // \TencentCloud\IM\Model\GetGroupMemberInfoRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getGroupMemberInfo($random, $getGroupMemberInfoRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupMemberInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getGroupMemberInfoRequest** | [**\TencentCloud\IM\Model\GetGroupMemberInfoRequest**](../Model/GetGroupMemberInfoRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetGroupMemberInfoResponse**](../Model/GetGroupMemberInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupShuttedUin**
> \TencentCloud\IM\Model\GetGroupShuttedUinResponse getGroupShuttedUin($random, $getGroupShuttedUinRequest)

获取被禁言群成员列表(https://cloud.tencent.com/document/product/269/2925)

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getGroupShuttedUinRequest = new \TencentCloud\IM\Model\GetGroupShuttedUinRequest(); // \TencentCloud\IM\Model\GetGroupShuttedUinRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getGroupShuttedUin($random, $getGroupShuttedUinRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupShuttedUin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getGroupShuttedUinRequest** | [**\TencentCloud\IM\Model\GetGroupShuttedUinRequest**](../Model/GetGroupShuttedUinRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetGroupShuttedUinResponse**](../Model/GetGroupShuttedUinResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJoinedGroupList**
> \TencentCloud\IM\Model\GetJoinedGroupListResponse getJoinedGroupList($random, $getJoinedGroupListRequest)

获取用户所加入的群组(https://cloud.tencent.com/document/product/269/1625)

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getJoinedGroupListRequest = new \TencentCloud\IM\Model\GetJoinedGroupListRequest(); // \TencentCloud\IM\Model\GetJoinedGroupListRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getJoinedGroupList($random, $getJoinedGroupListRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getJoinedGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getJoinedGroupListRequest** | [**\TencentCloud\IM\Model\GetJoinedGroupListRequest**](../Model/GetJoinedGroupListRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetJoinedGroupListResponse**](../Model/GetJoinedGroupListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnlineMemberNum**
> \TencentCloud\IM\Model\GetOnlineMemberNumResponse getOnlineMemberNum($random, $getOnlineMemberNumRequest)

获取直播群在线人数（https://cloud.tencent.com/document/product/269/49180）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getOnlineMemberNumRequest = new \TencentCloud\IM\Model\GetOnlineMemberNumRequest(); // \TencentCloud\IM\Model\GetOnlineMemberNumRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getOnlineMemberNum($random, $getOnlineMemberNumRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getOnlineMemberNum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getOnlineMemberNumRequest** | [**\TencentCloud\IM\Model\GetOnlineMemberNumRequest**](../Model/GetOnlineMemberNumRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetOnlineMemberNumResponse**](../Model/GetOnlineMemberNumResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoleInGroup**
> \TencentCloud\IM\Model\GetRoleInGroupResponse getRoleInGroup($random, $getRoleInGroupRequest)

查询用户在群组中的身份(https://cloud.tencent.com/document/product/269/1626)

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$getRoleInGroupRequest = new \TencentCloud\IM\Model\GetRoleInGroupRequest(); // \TencentCloud\IM\Model\GetRoleInGroupRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->getRoleInGroup($random, $getRoleInGroupRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getRoleInGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **getRoleInGroupRequest** | [**\TencentCloud\IM\Model\GetRoleInGroupRequest**](../Model/GetRoleInGroupRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GetRoleInGroupResponse**](../Model/GetRoleInGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupMsgGetSimple**
> \TencentCloud\IM\Model\GroupMsgGetSimpleResponse groupMsgGetSimple($random, $groupMsgGetSimpleRequest)

拉取群历史消息（https://cloud.tencent.com/document/product/269/2738）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$groupMsgGetSimpleRequest = new \TencentCloud\IM\Model\GroupMsgGetSimpleRequest(); // \TencentCloud\IM\Model\GroupMsgGetSimpleRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->groupMsgGetSimple($random, $groupMsgGetSimpleRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupMsgGetSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **groupMsgGetSimpleRequest** | [**\TencentCloud\IM\Model\GroupMsgGetSimpleRequest**](../Model/GroupMsgGetSimpleRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GroupMsgGetSimpleResponse**](../Model/GroupMsgGetSimpleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupMsgRecall**
> \TencentCloud\IM\Model\GroupMsgRecallResponse groupMsgRecall($random, $groupMsgRecallRequest)

撤回群消息（https://cloud.tencent.com/document/product/269/12341）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$groupMsgRecallRequest = new \TencentCloud\IM\Model\GroupMsgRecallRequest(); // \TencentCloud\IM\Model\GroupMsgRecallRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->groupMsgRecall($random, $groupMsgRecallRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupMsgRecall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **groupMsgRecallRequest** | [**\TencentCloud\IM\Model\GroupMsgRecallRequest**](../Model/GroupMsgRecallRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\GroupMsgRecallResponse**](../Model/GroupMsgRecallResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importGroup**
> \TencentCloud\IM\Model\ImportGroupResponse importGroup($random, $importGroupRequest)

导入群基础资料（https://cloud.tencent.com/document/product/269/1634）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$importGroupRequest = new \TencentCloud\IM\Model\ImportGroupRequest(); // \TencentCloud\IM\Model\ImportGroupRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->importGroup($random, $importGroupRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->importGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **importGroupRequest** | [**\TencentCloud\IM\Model\ImportGroupRequest**](../Model/ImportGroupRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\ImportGroupResponse**](../Model/ImportGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importGroupMember**
> \TencentCloud\IM\Model\ImportGroupMemberResponse importGroupMember($random, $importGroupMemberRequest)

导入群成员（https://cloud.tencent.com/document/product/269/1636）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$importGroupMemberRequest = new \TencentCloud\IM\Model\ImportGroupMemberRequest(); // \TencentCloud\IM\Model\ImportGroupMemberRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->importGroupMember($random, $importGroupMemberRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->importGroupMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **importGroupMemberRequest** | [**\TencentCloud\IM\Model\ImportGroupMemberRequest**](../Model/ImportGroupMemberRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\ImportGroupMemberResponse**](../Model/ImportGroupMemberResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importGroupMsg**
> \TencentCloud\IM\Model\ImportGroupMsgResponse importGroupMsg($random, $importGroupMsgRequest)

导入群消息（https://cloud.tencent.com/document/product/269/1635）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$importGroupMsgRequest = new \TencentCloud\IM\Model\ImportGroupMsgRequest(); // \TencentCloud\IM\Model\ImportGroupMsgRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->importGroupMsg($random, $importGroupMsgRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->importGroupMsg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **importGroupMsgRequest** | [**\TencentCloud\IM\Model\ImportGroupMsgRequest**](../Model/ImportGroupMsgRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\ImportGroupMsgResponse**](../Model/ImportGroupMsgResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyGroupAttr**
> \TencentCloud\IM\Model\CommonResponse modifyGroupAttr($random, $modifyGroupAttrRequest)

修改群自定义属性（https://cloud.tencent.com/document/product/269/67010）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$modifyGroupAttrRequest = new \TencentCloud\IM\Model\ModifyGroupAttrRequest(); // \TencentCloud\IM\Model\ModifyGroupAttrRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->modifyGroupAttr($random, $modifyGroupAttrRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->modifyGroupAttr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **modifyGroupAttrRequest** | [**\TencentCloud\IM\Model\ModifyGroupAttrRequest**](../Model/ModifyGroupAttrRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyGroupBaseInfo**
> \TencentCloud\IM\Model\CommonResponse modifyGroupBaseInfo($random, $modifyGroupBaseInfoRequest)

修改群基础资料（https://cloud.tencent.com/document/product/269/1620）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$modifyGroupBaseInfoRequest = new \TencentCloud\IM\Model\ModifyGroupBaseInfoRequest(); // \TencentCloud\IM\Model\ModifyGroupBaseInfoRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->modifyGroupBaseInfo($random, $modifyGroupBaseInfoRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->modifyGroupBaseInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **modifyGroupBaseInfoRequest** | [**\TencentCloud\IM\Model\ModifyGroupBaseInfoRequest**](../Model/ModifyGroupBaseInfoRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyGroupMemberInfo**
> \TencentCloud\IM\Model\CommonResponse modifyGroupMemberInfo($random, $modifyGroupMemberInfoRequest)

修改群成员资料(https://cloud.tencent.com/document/product/269/1623)

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$modifyGroupMemberInfoRequest = new \TencentCloud\IM\Model\ModifyGroupMemberInfoRequest(); // \TencentCloud\IM\Model\ModifyGroupMemberInfoRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->modifyGroupMemberInfo($random, $modifyGroupMemberInfoRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->modifyGroupMemberInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **modifyGroupMemberInfoRequest** | [**\TencentCloud\IM\Model\ModifyGroupMemberInfoRequest**](../Model/ModifyGroupMemberInfoRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendGroupMsg**
> \TencentCloud\IM\Model\SendGroupMsgResponse sendGroupMsg($random, $sendGroupMsgRequest)

在群组中发送普通消息（https://cloud.tencent.com/document/product/269/1629）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$sendGroupMsgRequest = new \TencentCloud\IM\Model\SendGroupMsgRequest(); // \TencentCloud\IM\Model\SendGroupMsgRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->sendGroupMsg($random, $sendGroupMsgRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->sendGroupMsg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **sendGroupMsgRequest** | [**\TencentCloud\IM\Model\SendGroupMsgRequest**](../Model/SendGroupMsgRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\SendGroupMsgResponse**](../Model/SendGroupMsgResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendGroupSystemNotification**
> \TencentCloud\IM\Model\CommonResponse sendGroupSystemNotification($random, $sendGroupSystemNotificationRequest)

在群组中发送系统通知（https://cloud.tencent.com/document/product/269/1630）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$sendGroupSystemNotificationRequest = new \TencentCloud\IM\Model\SendGroupSystemNotificationRequest(); // \TencentCloud\IM\Model\SendGroupSystemNotificationRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->sendGroupSystemNotification($random, $sendGroupSystemNotificationRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->sendGroupSystemNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **sendGroupSystemNotificationRequest** | [**\TencentCloud\IM\Model\SendGroupSystemNotificationRequest**](../Model/SendGroupSystemNotificationRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setGroupAttr**
> \TencentCloud\IM\Model\CommonResponse setGroupAttr($random, $setGroupAttrRequest)

重置群自定义属性（https://cloud.tencent.com/document/product/269/67011）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$setGroupAttrRequest = new \TencentCloud\IM\Model\SetGroupAttrRequest(); // \TencentCloud\IM\Model\SetGroupAttrRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->setGroupAttr($random, $setGroupAttrRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setGroupAttr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **setGroupAttrRequest** | [**\TencentCloud\IM\Model\SetGroupAttrRequest**](../Model/SetGroupAttrRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUnreadMsgNum**
> \TencentCloud\IM\Model\CommonResponse setUnreadMsgNum($random, $setUnreadMsgNumRequest)

设置成员未读消息计数（https://cloud.tencent.com/document/product/269/1637）

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

$apiInstance = new TencentCloud\IM\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$setUnreadMsgNumRequest = new \TencentCloud\IM\Model\SetUnreadMsgNumRequest(); // \TencentCloud\IM\Model\SetUnreadMsgNumRequest | 
 //TODO: Set the request parameters


try {
    $result = $apiInstance->setUnreadMsgNum($random, $setUnreadMsgNumRequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setUnreadMsgNum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **random** | **int**|  |
 **setUnreadMsgNumRequest** | [**\TencentCloud\IM\Model\SetUnreadMsgNumRequest**](../Model/SetUnreadMsgNumRequest.md)|  | [optional]

### Return type

[**\TencentCloud\IM\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


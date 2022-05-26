# ImPushRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condition** | [**\TencentCloud\IM\Model\ImPushRequestCondition[]**](ImPushRequestCondition.md) | Condition 共有4种条件类型，分别是：属性的或条件 AttrsOr、属性的与条件 AttrsAnd、标签的或条件 TagsOr、标签的与条件 TagsAnd。AttrsOr 和 AttrsAnd 可以并存，TagsOr 和 TagsAnd 也可以并存。但是标签和属性条件不能并存。如果没有 Condition，则推送给全部用户 | [optional] 
**msgRandom** | **int** | 消息随机数（32位无符号整数），后台用于同一秒内的消息去重。请确保该字段填的是随机 | 
**msgBody** | [**\TencentCloud\IM\Model\TIMMsgElement[]**](TIMMsgElement.md) |  | 
**msgLifeTime** | **int** | 消息离线存储时间，单位秒，最多保存7天（604800秒）。默认为0，表示不离线存储，即只推在线用户 | [optional] 
**fromAccount** | **string** | 消息推送方帐号 | [optional] 
**offlinePushInfo** | [**\TencentCloud\IM\Model\OfflinePushInfo**](OfflinePushInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



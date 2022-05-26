# GroupMsgGetSimpleResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupId** | **string** | 请求中的群组 ID | [optional] 
**isFinished** | **int** | 是否返回了请求区间的全部消息 当成功返回了请求区间的全部消息时，值为1;当消息长度太长或者区间太大（超过20）导致无法返回全部消息时，值为0;当消息长度太长或者区间太大（超过20）且所有消息都过期时，值为2 | [optional] 
**rspMsgList** | **object[]** | 返回的消息列表 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



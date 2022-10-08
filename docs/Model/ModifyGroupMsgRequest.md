# ModifyGroupMsgRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupId** | **string** | 操作的群 ID | 
**msgSeq** | **int** | 自请求修改的消息 seq | 
**msgBody** | [**\TencentCloud\IM\Model\TIMMsgElement[]**](TIMMsgElement.md) |  | [optional] 
**cloudCustomData** | **string** | 消息自定义数据（云端保存，会发送到对端，程序卸载重装后还能拉取到） | [optional] 
**topicId** | **string** | 话题的 ID, 仅支持话题的社群适用此选项 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



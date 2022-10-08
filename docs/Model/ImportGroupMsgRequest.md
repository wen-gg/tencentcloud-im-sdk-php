# ImportGroupMsgRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupId** | **string** | 要导入消息的群 ID | 
**recentContactFlag** | **int** | 会话更新识别，为1的时候标识触发会话更新，默认不触发（avchatroom 群不支持）。 | [optional] 
**msgList** | [**\TencentCloud\IM\Model\ImportGroupMsgRequestMsgList[]**](ImportGroupMsgRequestMsgList.md) | 导入的消息列表 | 
**topicId** | **string** | 话题的 ID, 仅支持话题的社群适用此选项 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



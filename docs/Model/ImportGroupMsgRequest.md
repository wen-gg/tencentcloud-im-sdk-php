# ImportGroupMsgRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupId** | **string** | 要导入消息的群 ID | 
**recentContactFlag** | **int** | 会话更新识别，为1的时候标识触发会话更新，默认不触发（avchatroom 群不支持）。 | [optional] 
**msgList** | **string** | 导入的消息列表 | 
**fromAccount** | **string** | 指定消息发送者 | 
**sendTime** | **int** | 消息发送时间 | 
**random** | **int** | 32位无符号整数；如果5分钟内两条消息的随机值相同，后一条消息将被当做重复消息而丢弃 | [optional] 
**msgBody** | [**\TencentCloud\IM\Model\TIMMsgElement[]**](TIMMsgElement.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



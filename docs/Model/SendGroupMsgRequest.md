# SendGroupMsgRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupId** | **string** | 向哪个群组发送消息 | 
**random** | **int** | 无符号32位整数。如果5分钟内两条消息的随机值相同，后一条消息将被当做重复消息而丢弃 | 
**msgPriority** | **string** | 消息的优先级 | [optional] 
**msgBody** | [**\TencentCloud\IM\Model\TIMMsgElement[]**](TIMMsgElement.md) | 消息体，详细可参阅 消息格式描述(https://cloud.tencent.com/document/product/269/2720) | 
**fromAccount** | **string** | 消息来源帐号，选填。如果不填写该字段，则默认消息的发送者为调用该接口时使用的 App 管理员帐号。除此之外，App 亦可通过该字段“伪造”消息的发送者，从而实现一些特殊的功能需求。需要注意的是，如果指定该字段，必须要确保字段中的帐号是存在的 | [optional] 
**offlinePushInfo** | [**\TencentCloud\IM\Model\OfflinePushInfo**](OfflinePushInfo.md) |  | [optional] 
**forbidCallbackControl** | [**\TencentCloud\IM\Model\ForbidCallbackControl[]**](ForbidCallbackControl.md) | 消息回调禁止开关，只对单条消息有效，ForbidBeforeSendMsgCallback 表示禁止发消息前回调，ForbidAfterSendMsgCallback 表示禁止发消息后回调 | [optional] 
**onlineOnlyFlag** | **int** | 1表示消息仅发送在线成员，默认0表示发送所有成员，AVChatRoom(直播群)不支持该参数 | [optional] 
**sendMsgControl** | [**\TencentCloud\IM\Model\SendMsgControl[]**](SendMsgControl.md) | 消息发送权限，NoLastMsg 只对单条消息有效，表示不更新最近联系人会话；NoUnread 不计未读，只对单条消息有效。（如果该消息 OnlineOnlyFlag 设置为1，则不允许使用该字段。） | [optional] 
**cloudCustomData** | **string** | 消息自定义数据（云端保存，会发送到对端，程序卸载重装后还能拉取到） | [optional] 
**toAccount** | **string[]** | 指定消息接收者(接收者成员上限50个)，如果此字段被使用，消息则不计未读，仅旗舰版支持此功能，支持好友工作群（Work）、陌生人社交群（Public）、临时会议群（Meeting） | [optional] 
**topicId** | **string** | 话题的 ID, 仅支持话题的社群适用此选项 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



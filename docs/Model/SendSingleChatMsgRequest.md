# SendSingleChatMsgRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**syncOtherMachine** | **int** | 1：把消息同步到 From_Account 在线终端和漫游上；2：消息不同步至 From_Account；若不填写默认情况下会将消息存 From_Account 漫游 | [optional] 
**fromAccount** | **string** | 消息发送方 UserID（用于指定发送消息方帐号） | [optional] 
**toAccount** | **string** | 消息接收方 UserID | 
**msgLifeTime** | **int** | 消息离线保存时长（单位：秒），最长为7天（604800秒） 若设置该字段为0，则消息只发在线用户，不保存离线 若设置该字段超过7天（604800秒），仍只保存7天 若不设置该字段，则默认保存7天 | [optional] 
**msgSeq** | **int** | 消息序列号（32位无符号整数），后台会根据该字段去重及进行同秒内消息的排序，详细规则请看本接口的功能说明。若不填该字段，则由后台填入随机数 | [optional] 
**msgRandom** | **int** | 消息随机数（32位无符号整数），后台用于同一秒内的消息去重。请确保该字段填的是随机 | 
**msgTimeStamp** | **int** | 消息时间戳，UNIX 时间戳（单位：秒） | [optional] 
**forbidCallbackControl** | **string[]** | 消息回调禁止开关，只对本条消息有效，ForbidBeforeSendMsgCallback 表示禁止发消息前回调，ForbidAfterSendMsgCallback 表示禁止发消息后回调 | [optional] 
**sendMsgControl** | **string[]** | 消息发送控制选项，是一个 String 数组，只对本条消息有效。\&quot;NoUnread\&quot;表示该条消息不计入未读数。\&quot;NoLastMsg\&quot;表示该条消息不更新会话列表。\&quot;WithMuteNotifications\&quot;表示该条消息的接收方对发送方设置的免打扰选项生效（默认不生效） | [optional] 
**msgBody** | [**\TencentCloud\IM\Model\TIMMsgElement[]**](TIMMsgElement.md) |  | 
**cloudCustomData** | **string** |  | [optional] 
**offlinePushInfo** | [**\TencentCloud\IM\Model\OfflinePushInfo**](OfflinePushInfo.md) |  | [optional] 
**isNeedReadReceipt** | **int** | 该条消息是否需要已读回执，0为不需要，1为需要，默认为0 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



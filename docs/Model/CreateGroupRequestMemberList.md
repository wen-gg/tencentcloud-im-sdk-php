# CreateGroupRequestMemberList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**memberAccount** | **string** |  | 
**role** | **string** | 群内身份，包括 Owner 群主、Admin 群管理员以及 Member 群成员 | [optional] 
**joinTime** | **int** | 入群时间 | [optional] 
**msgSeq** | **int** | 该成员当前已读消息 Seq | [optional] 
**msgFlag** | **string** | 消息接收选项 消息接收选项，包括如下几种 AcceptAndNotify 表示接收并提示 AcceptNotNotify 表示接收不提示（不会触发 APNs 远程推送） Discard 表示屏蔽群消息（不会向客户端推送消息） | [optional] 
**nameCard** | **string** | 可读可写。最长50字节，不可调整 | [optional] 
**lastSendMsgTime** | **int** | 最后发送消息的时间 支持三个普通群，不支持直播群 | [optional] 
**appMemberDefinedData** | [**\TencentCloud\IM\Model\DefinedData[]**](DefinedData.md) | 群成员维度的自定义字段，默认情况是没有的，可以通过 即时通信 IM 控制台(https://console.cloud.tencent.com/im) 进行配置，详情请参阅 自定义字段(https://cloud.tencent.com/document/product/269/1502#.E8.87.AA.E5.AE.9A.E4.B9.89.E5.AD.97.E6.AE.B5) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



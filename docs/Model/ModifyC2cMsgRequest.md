# ModifyC2cMsgRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fromAccount** | **string** | 消息发送方 UserID | 
**toAccount** | **string** | 消息接收方 UserID | 
**msgKey** | **string** | 待修改消息的唯一标识。获取消息 MsgKey 的方法请参见本接口的接口说明 | 
**msgBody** | [**\TencentCloud\IM\Model\TIMMsgElement[]**](TIMMsgElement.md) |  | [optional] 
**cloudCustomData** | **string** | 消息自定义数据（云端保存，会发送到对端，程序卸载重装后还能拉取到） | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# GetRoamMsgRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fromAccount** | **string** | 会话其中一方的 UserID，若已指定发送消息方帐号，则为消息发送方 | 
**toAccount** | **string** | 会话其中一方的 UserID | 
**maxCnt** | **int** | 请求的消息条数 | 
**minTime** | **int** | 请求的消息时间范围的最小值 | 
**maxTime** | **int** | 请求的消息时间范围的最大值 | 
**lastMsgKey** | **string** | 上一次拉取到的最后一条消息的 MsgKey，续拉时需要填该字段,填写方法见示例（https://cloud.tencent.com/document/product/269/42794） | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



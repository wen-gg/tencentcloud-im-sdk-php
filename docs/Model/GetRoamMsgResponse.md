# GetRoamMsgResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**complete** | **int** | 是否全部拉取，0表示未全部拉取，需要续拉，1表示已全部拉取 | [optional] 
**msgCnt** | **int** | 本次拉取到的消息条数 | [optional] 
**lastMsgTime** | **int** | 本次拉取到的消息里的最后一条消息的时间 | [optional] 
**lastMsgKey** | **string** | 本次拉取到的消息里的最后一条消息的标识 | [optional] 
**msgList** | **object[]** | 返回的消息列表 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



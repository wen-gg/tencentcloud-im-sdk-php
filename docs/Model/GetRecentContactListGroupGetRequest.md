# GetRecentContactListGroupGetRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fromAccount** | **string** | 填 UserID，请求拉取该用户的会话列表 | 
**timeStamp** | **int** | 普通会话的起始时间，第一页填 0 | 
**startIndex** | **int** | 普通会话的起始位置，第一页填 0 | 
**topTimeStamp** | **int** | 置顶会话的起始时间，第一页填 0 | 
**topStartIndex** | **int** | 置顶会话的起始位置，第一页填 0 | 
**assistFlags** | **int** | 会话辅助标志位： bit 0 - 是否支持置顶会话 bit 1 - 是否返回空会话 bit 2 - 是否支持置顶会话分页 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



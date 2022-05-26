# GetRecentContactListGroupGetResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sessionItem** | **object[]** | 会话对象数组 | [optional] 
**completeFlag** | **int** | 结束标识：1 表示已返回全量会话，0 表示还有会话没拉完 | [optional] 
**timeStamp** | **int** | 普通会话下一页拉取的起始时间，分页拉取时通过请求包的 TimeStamp 字段带给移动通信后台 | [optional] 
**startIndex** | **int** | 普通会话下一页拉取的起始位置，分页拉取时通过请求包的 StartIndex 字段带给移动通信后台 | [optional] 
**topTimeStamp** | **int** | 置顶会话下一页拉取的起始时间，分页拉取时通过请求包的 TopTimeStamp 字段带给移动通信后台 | [optional] 
**topStartIndex** | **int** | 置顶会话下一页拉取的起始位置，分页拉取时通过请求包的 TopStartIndex 字段带给移动通信后台 | [optional] 
**errorDisplay** | **string** | 详细的客户端展示信息 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



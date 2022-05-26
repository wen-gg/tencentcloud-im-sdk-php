# GetGroupMemberInfoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**memberNum** | **int** | 本群组的群成员总数 | [optional] 
**memberList** | **object[]** | 获取到的群成员列表，其中包含了全部或者指定的群成员信息，成员信息字段详情请参阅 群成员资料（https://cloud.tencent.com/document/product/269/1502#SelfInfoFilter） | [optional] 
**appMemberDefinedData** | **object[]** | 返回的群成员自定义字段信息 | [optional] 
**next** | **string** | 下一次请求应该传的 Next 值，仅查询 Community（社群）时会返回该字段 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



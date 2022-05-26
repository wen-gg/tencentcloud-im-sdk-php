# GetRecentContactListGroupDeleteRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fromAccount** | **string** | 请求删除该 UserID 的会话 | 
**type** | **int** | 会话类型：1 表示 C2C 会话；2 表示 G2C 会话 | 
**toAccount** | **string** | C2C 会话才赋值，C2C 会话方的 UserID | [optional] 
**toGroupid** | **string** | G2C 会话才赋值，G2C 会话的群 ID | [optional] 
**clearRamble** | **int** | 是否清理漫游消息：1 表示清理漫游消息；0 表示不清理漫游消息 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



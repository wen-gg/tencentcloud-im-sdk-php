# DeleteGroupMemberRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupId** | **string** | 操作的群 ID | 
**silence** | **int** | 是否静默删人。0表示非静默删人，1表示静默删人。静默即删除成员时不通知群里所有成员，只通知被删除群成员。不填写该字段时默认为0 | [optional] 
**reason** | **string** | 踢出用户原因 | [optional] 
**memberToDelAccount** | **string[]** | 待删除的群成员 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



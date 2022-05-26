# ModifyGroupMemberInfoRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupId** | **string** | 操作的群 ID | 
**memberAccount** | **string** | 要操作的群成员 | 
**role** | **string** | 成员身份，Admin/Member 分别为设置/取消管理员 | [optional] 
**msgFlag** | **string** | 消息屏蔽类型 | [optional] 
**nameCard** | **string** | 群名片（最大不超过50个字节） | [optional] 
**appMemberDefinedData** | [**\TencentCloud\IM\Model\ModifyGroupMemberInfoRequestAppMemberDefinedData[]**](ModifyGroupMemberInfoRequestAppMemberDefinedData.md) | 群成员维度的自定义字段，默认情况是没有的，可以通过 即时通信 IM 控制台（https://console.cloud.tencent.com/im） 进行配置，详情请参阅 群组系统（https://cloud.tencent.com/document/product/269/1502） | [optional] 
**shutUpTime** | **int** | 需禁言时间，单位为秒，0表示取消禁言 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



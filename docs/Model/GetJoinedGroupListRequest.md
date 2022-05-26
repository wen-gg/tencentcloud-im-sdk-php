# GetJoinedGroupListRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**memberAccount** | **string** | 需要查询的用户帐号 | 
**withHugeGroups** | **int** | 是否获取用户加入的 AVChatRoom(直播群)，0表示不获取，1表示获取。默认为0 | [optional] 
**withNoActiveGroups** | **int** | 是否获取用户已加入但未激活的 Private（即新版本中 Work，好友工作群) 群信息，0表示不获取，1表示获取。默认为0 | [optional] 
**limit** | **int** | 单次拉取的群组数量，如果不填代表所有群组 | [optional] 
**offset** | **int** | 从第多少个群组开始拉取 | [optional] 
**groupType** | **string** | 拉取哪种群组类型，例如 Public(陌生人社交群)，Private（即新版本Work，好友工作群)，ChatRoom （即新版本Meeting，会议群），AVChatRoom(直播群)，Community（社群），不填为拉取所有 | [optional] 
**responseFilter** | [**\TencentCloud\IM\Model\GetJoinedGroupListRequestResponseFilter**](GetJoinedGroupListRequestResponseFilter.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



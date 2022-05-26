# OfflinePushInfoAndroidInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sound** | **string** | Android 离线推送声音文件路径。 | [optional] 
**huaWeiChannelID** | **string** | 华为手机 EMUI 10.0 及以上的通知渠道字段。该字段不为空时，会覆盖控制台配置的 ChannelID 值；该字段为空时，不会覆盖控制台配置的 ChannelID 值。 | [optional] 
**xiaoMiChannelID** | **string** | 小米手机 MIUI 10 及以上的通知类别（Channel）适配字段。该字段不为空时，会覆盖控制台配置的 ChannelID 值；该字段为空时，不会覆盖控制台配置的 ChannelID 值 | [optional] 
**oPPOChannelID** | **string** | OPPO 手机 Android 8.0 及以上的 NotificationChannel 通知适配字段。该字段不为空时，会覆盖控制台配置的 ChannelID 值；该字段为空时，不会覆盖控制台配置的 ChannelID 值。 | [optional] 
**googleChannelID** | **string** | Google 手机 Android 8.0 及以上的通知渠道字段。Google 推送新接口（上传证书文件）支持 channel id，旧接口（填写服务器密钥）不支持。 | [optional] 
**vIVOClassification** | **string** | VIVO 手机推送消息分类，“0”代表运营消息，“1”代表系统消息，不填默认为1。 | [optional] 
**huaWeiImportance** | **string** | 华为推送通知消息分类，取值为 LOW、NORMAL，不填默认为 NORMAL。 | [optional] 
**extAsHuaweiIntentParam** | **int** | 在控制台配置华为推送为“打开应用内指定页面”的前提下，传“1”表示将透传内容 Ext 作为 Intent 的参数，“0”表示将透传内容 Ext 作为 Action 参数。不填默认为0。两种传参区别可参见 华为推送文档（https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/andorid-basic-clickaction-0000001087554076#section20203190121410）。 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



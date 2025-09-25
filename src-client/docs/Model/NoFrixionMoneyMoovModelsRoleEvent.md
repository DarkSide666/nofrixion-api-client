# # NoFrixionMoneyMoovModelsRoleEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**role_id** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**type** | **string** | Events that can occur in a role. | [optional]
**inserted** | **\DateTime** |  | [optional]
**authoriser_hash** | **string** |  | [optional]
**name** | **string** | The name the role had at the time of the event. | [optional]
**description** | **string** | The description the role had at the time of the event. | [optional]
**merchant_permissions** | **string** | The merchant permissions the role had at the time of the event. | [optional]
**account_permissions** | **string** | The account permissions the role had at the time of the event. | [optional]
**client_session_timeout_seconds** | **int** | The client session timeout seconds the role had at the time of the event. | [optional]
**assignation_event_user_id** | **string** | For NoFrixion.MoneyMoov.Enums.RoleEventTypeEnum.AssignedToUser and NoFrixion.MoneyMoov.Enums.RoleEventTypeEnum.RemovedFromUser event types.  The user that was assigned to or removed from the role at the time of the event. | [optional]
**assigned_users** | **int** | The number of users assigned to the role at the time of the event. | [optional]
**account_ids** | **string[]** | IDs of the accounts that were assigned to the role-user during the event. | [optional]
**user** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](NoFrixionMoneyMoovModelsUser.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # NoFrixionMoneyMoovModelsUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**first_name** | **string** |  |
**last_name** | **string** |  |
**email_address** | **string** |  |
**two_factor_enabled** | **bool** |  | [optional]
**passkey_added** | **bool** |  | [optional]
**permissions** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserPermissions**](NoFrixionMoneyMoovModelsUserPermissions.md) |  | [optional]
**roles_with_scope** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRolesUserRoleWithScope[]**](NoFrixionMoneyMoovModelsRolesUserRoleWithScope.md) |  | [optional]
**client_session_timeouts** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsClientSessionTimeout[]**](NoFrixionMoneyMoovModelsClientSessionTimeout.md) | The number of seconds a session for this user should last before expiring.  This is based on the user&#39;s role on the merchant.  This is used to set the session timeout in the client. If not set the client&#39;s default  session timeout will be used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

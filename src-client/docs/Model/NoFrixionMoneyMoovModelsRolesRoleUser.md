# # NoFrixionMoneyMoovModelsRolesRoleUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**role_id** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**is_enabled** | **bool** | Indicates whether the role user is enabled.   An enabled role user is authorized to perform actions associated with their assigned role.  If set to &#x60;false&#x60;, the user is considered disabled and will not be granted authorization for role-based actions. | [optional]
**accounts** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRolesRoleUserAccount[]**](NoFrixionMoneyMoovModelsRolesRoleUserAccount.md) |  | [optional]
**user** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](NoFrixionMoneyMoovModelsUser.md) |  | [optional]
**role** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRolesRole**](NoFrixionMoneyMoovModelsRolesRole.md) |  | [optional]
**authorisation_status** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAuthorisationStatus**](NoFrixionMoneyMoovModelsAuthorisationStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

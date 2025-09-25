# # NoFrixionMoneyMoovModelsUserInvite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**invitee_email_address** | **string** |  | [optional]
**inviter_first_name** | **string** |  | [optional]
**inviter_last_name** | **string** |  | [optional]
**invitee_first_name** | **string** |  | [optional]
**invitee_last_name** | **string** |  | [optional]
**inviter_email_address** | **string** |  | [optional]
**merchant_id** | **string** |  | [optional]
**registration_url** | **string** |  | [optional]
**last_invited** | **\DateTime** |  | [optional]
**merchant_name** | **string** |  | [optional]
**message** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**user** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](NoFrixionMoneyMoovModelsUser.md) |  | [optional]
**is_invitee_registered** | **bool** | If true, indicates the invitee&#39;s email address corresponds to an existing MoneyMoov user. | [optional]
**initial_role_id** | **string** | The role ID to automatically assign to the merchant’s very first user.  Typically set by the compliance team when the first user is invited to a new merchant. | [optional]
**is_authorised** | **bool** | Will be set to true once the invite has met the authorisation requirements. | [optional]
**authorisation_status** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAuthorisationStatus**](NoFrixionMoneyMoovModelsAuthorisationStatus.md) |  | [optional]
**status** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

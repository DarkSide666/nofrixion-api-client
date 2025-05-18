# # NoFrixionMoneyMoovModelsUserInviteCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | ID of the merchant the user is being invited to. Can be empty if  provided by the URL. | [optional]
**invitee_email_address** | **string** | Email address of the user being invited. |
**invitee_first_name** | **string** | First Name of the user being invited. | [optional]
**invitee_last_name** | **string** | Last Name of the user being invited. | [optional]
**registration_url** | **string** | Optional URL to provide to the invited user to inform them where to  visit to accept the invite. | [optional]
**send_invite_email** | **bool** | If set to true an email will be sent to the invitee with instructions on  how to accept the invite. | [optional]
**initial_role_id** | **string** | The role ID to automatically assign to the merchant’s very first user.   This property can only be set when the merchant has no users with roles.  Typically set by the compliance team when the first user is invited to a new merchant. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # NoFrixionMoneyMoovModelsPayoutEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | The user id of the user who the event is for. | [optional]
**user_name** | **string** | The user name of the user who the event is for. | [optional]
**timestamp** | **\DateTime** | Event timestamp. | [optional]
**status** | **string** | Status of the payout. | [optional]
**event_type** | **string** | The event type. | [optional]
**rule_name** | **string** | The name of the rule that triggered the event. | [optional]
**error_reason** | **string** | Reason for the error, if any. | [optional]
**supplier_payee_verification_result** | **string** | If this event is a payee verification event, this contains the result of the verification. | [optional]
**payee_verified_account_name** | **string** | If this event is a payee verification complete event and the result is a close match,  this contains the actual verified name returned by the payee verification supplier. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

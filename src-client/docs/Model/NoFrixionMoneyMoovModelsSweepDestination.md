# # NoFrixionMoneyMoovModelsSweepDestination

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sweep_percentage** | **float** | The percentage of the total funds in the account when the rule is executed  that should be swept to the destination. | [optional]
**sweep_amount** | **float** | The amount that should be swept to the destination. Ignored if a sweep percentage is set. | [optional]
**priority** | **int** | The priority of the destination. Lower numbers represent higher priorities, e.g. 0 is the highest priority.   Relevant when there are multiple destinations in a sweep. The higher priority destinations will be paid first   and also attributed any remaining balance in the case of an uneven split. | [optional]
**is_disabled** | **bool** | If set to true, it indicates that the destiation is disabled and should not be used. | [optional]
**account_id** | **string** | An optional ID of an internal account the counterparty is associated with. If set  it will take precedence over any other destination details set for the counterparty. | [optional]
**internal_account_name** | **string** | If the counterparty is an internal account, this is the name of the account. | [optional]
**beneficiary_id** | **string** | Optional ID of a Beneficiary to use for the counterparty destination. If set  it will take precedence over any other destination details, except for AccountID,  set for the counterparty. | [optional]
**name** | **string** | The name of the counterparty. For a person this should be their full name. For a   company this should be their registered or trading name. | [optional]
**email_address** | **string** | An email address for the counterparty. Optional to set and depending on the payment  network does not always get set for pay ins. | [optional]
**phone_number** | **string** | A phone number for the counterparty. Optional to set and depending on the payment  network does not always get set for pay ins. | [optional]
**country_code** | **string** | A country code for the counterparty. Optional to set and depending on the payment  network does not always get set for pay ins | [optional]
**identifier** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAccountIdentifier**](NoFrixionMoneyMoovModelsAccountIdentifier.md) |  | [optional]
**summary** | **string** | Gets a convenient summary representation of the counterparty. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

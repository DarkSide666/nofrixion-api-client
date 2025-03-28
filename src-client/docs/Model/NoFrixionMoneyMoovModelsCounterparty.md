# # NoFrixionMoneyMoovModelsCounterparty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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

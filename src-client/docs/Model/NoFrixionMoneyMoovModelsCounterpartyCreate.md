# # NoFrixionMoneyMoovModelsCounterpartyCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | If set it indicates that the counterparty is an internal belonging to the   same merchant as the source account. | [optional]
**beneficiary_id** | **string** | If set it indicates that the counterparty is a beneficiary of the merchant. | [optional]
**name** | **string** | The name of the counterparty. For a person this should be their full name. For a   company this should be their registered or trading name. | [optional]
**email_address** | **string** | An email address for the counterparty. Optional to set and depending on the payment  network does not always get set for pay ins. | [optional]
**phone_number** | **string** | A phone number for the counterparty. Optional to set and depending on the payment  network does not always get set for pay ins. | [optional]
**country_code** | **string** | A country code for the counterparty. Optional to set and depending on the payment  network does not always get set for pay ins | [optional]
**identifier** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAccountIdentifierCreate**](NoFrixionMoneyMoovModelsAccountIdentifierCreate.md) |  | [optional]
**summary** | **string** | Gets a convenient summary representation of the counterparty. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

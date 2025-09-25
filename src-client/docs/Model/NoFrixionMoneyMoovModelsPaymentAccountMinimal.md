# # NoFrixionMoneyMoovModelsPaymentAccountMinimal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id for the account. | [optional]
**merchant_id** | **string** | The ID of the merchant that owns the account. | [optional]
**balance** | **float** | Balance of the account. | [optional]
**balance_minor_units** | **int** | Balance of the account expressed in the currency’s minor units (e.g. cents, pence). | [optional] [readonly]
**currency** | **string** | Currency of the account in ISO 4217 format | [optional]
**account_name** | **string** | Name for the account | [optional]
**identifier** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAccountIdentifier**](NoFrixionMoneyMoovModelsAccountIdentifier.md) |  | [optional]
**is_archived** | **bool** | Is the account archived | [optional]
**is_connected_account** | **bool** | Indicates if the payment account is an externally connected account.  Externally connected account can be used to view account balances and transactions. | [optional]
**submitted_payouts_balance** | **float** | Total of the payouts that have been submitted for processing. | [optional]
**available_balance** | **float** | The current available balance of the account. Calculated by subtracting any submitted payments from the current balance. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # NoFrixionMoneyMoovModelsPaymentAccountCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | The ID of the merchant the payment account is being created for. | [optional]
**currency** | **string** | Currency for the account, only EUR, GBP, USD and in sandbox BTC are supported. | [optional]
**account_name** | **string** | The name for the account. This name is descriptive only, and will not be  used when sending payments, but it should still be set to something that   identifies the purpose of the funds. For example \&quot;EUR Payment\&quot; would be  suitable to for an account used for general purpose business payments. | [optional]
**supplier_physical_account_id** | **string** | For internal use only. Leave empty unless requested otherwise. | [optional]
**account_type** | **string** | If specified the account type will be set to the specified value  disregarding the merchant default account type. | [optional]
**tribe_account_id** | **string** | If creating a Tribe account type, then this is the tribe account id | [optional]
**physical_account_id** | **string** | For EUR accounts this can be set to the ID of another account that will act as the  backing phyiscal account. The new account will then act as a Virtual account, able to   receive funds but the transactions will be recorded aginst the backing physical account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

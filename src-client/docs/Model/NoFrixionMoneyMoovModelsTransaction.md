# # NoFrixionMoneyMoovModelsTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the transaction. | [optional]
**account_id** | **string** | The ID of the account the transaction belongs to. | [optional]
**account_name** | **string** | The name of the account the transaction belongs to. | [optional]
**merchant_id** | **string** | The ID of the merchant that owns the account. | [optional]
**type** | **string** | Type of the transaction. | [optional]
**amount** | **float** | Amount of the transaction. Negative values indicate a pay out debit), positive  values a pay in (credit). | [optional]
**amount_minor_units** | **int** | Amount of the transaction expressed in the currency’s minor units (e.g. cents, pence). | [optional] [readonly]
**currency** | **string** | Currency of transaction. | [optional]
**description** | **string** | Description of the transaction. | [optional]
**transaction_date** | **\DateTime** | Date when the transaction occurred. | [optional]
**inserted** | **\DateTime** | Date when the transaction was inserted into the ledger. | [optional]
**your_reference** | **string** | For a pay in the reference the sending party attached. For a pay out the   reference that the payer attached for themselves. | [optional]
**their_reference** | **string** | For a pay out the reference that the payer attached for the receiving party. For a  pay in this will typically be empty but for internal transactions may contain the  reference the sending party set for themselves. | [optional]
**counterparty** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterparty**](NoFrixionMoneyMoovModelsCounterparty.md) |  | [optional]
**counterparty_summary** | **string** | For pay in (credit) transactions this will contain a descriptive string with the   most important fields about the counterparty. | [optional]
**balance** | **float** | Balance left on the account after the transaction. | [optional]
**balance_minor_units** | **int** | Balance on the account expressed in the currency’s minor units (e.g. cents, pence). | [optional] [readonly]
**rule_id** | **string** | ID of the rule that resulted in the transaction. | [optional]
**payout_id** | **string** | ID of the payout that resulted in the transaction. | [optional]
**virtual_iban** | **string** | If set it indicates the  payin was to a virtual IBAN. | [optional]
**tags** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag[]**](NoFrixionMoneyMoovModelsTag.md) | An optional list of descriptive tags attached to the transaction. | [optional]
**account_sequence_number** | **int** | The sequence number of transaction on a per account basis. This sequence number is guaranteed to be an arithemtic sequence   number for all transactions belonging to the same account. | [optional]
**payment_request_id** | **string** | For Pay by Bank and Direct Debit transactions this will contain the ID of the payment request. | [optional]
**fx_currency** | **string** | For an FX payout this is the currency that was received or that was instructed. | [optional]
**fx_amount** | **float** | For an FX payout this is the amound in the FX currency. | [optional]
**fx_rate** | **float** | For an FX payout this is the exchange rate between the transaction currency and the FX currency. | [optional]
**payment_request_custom_fields** | **array<string,string>** | The custom fields that were attached to the payment request that resulted in this transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

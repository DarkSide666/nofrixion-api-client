# # NoFrixionMoneyMoovModelsPaymentAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id for the account. | [optional]
**merchant_id** | **string** | The ID of the merchant that owns the account. | [optional]
**balance** | **float** | Balance of the account. | [optional]
**balance_minor_units** | **int** | Balance of the account expressed in the currency’s minor units (e.g. cents, pence). | [optional] [readonly]
**submitted_payouts_balance** | **float** | Total of the payouts that have been submitted for processing. | [optional]
**submitted_payouts_balance_minor_units** | **int** | The balance of the submitted payouts expressed in the currency’s minor units (e.g. cents, pence). | [optional] [readonly]
**inserted** | **\DateTime** | Timestamp when the account was created. | [optional]
**last_updated** | **\DateTime** | Timestamp when the account was last updated. | [optional]
**currency** | **string** | Currency of the account in ISO 4217 format | [optional]
**account_name** | **string** | Name for the account | [optional]
**identifier** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAccountIdentifier**](NoFrixionMoneyMoovModelsAccountIdentifier.md) |  | [optional]
**display_name** | **string** | Gets a unique display name for the payment account. Useful for when payment accounts need to   be listed. | [optional] [readonly]
**summary** | **string** | Gets a summary of the payments account&#39;s most important properties. | [optional] [readonly]
**is_default** | **bool** | Is the default account | [optional]
**available_balance** | **float** | The current available balance of the account. Calculated by subtracting any submitted payments from the current balance. | [optional] [readonly]
**available_balance_minor_units** | **int** | The available balance expressed in the currency’s minor units (e.g. cents, pence). | [optional] [readonly]
**account_supplier_name** | **string** | The payment account supplier name. A payment account can be supplied by multiple payment processors. | [optional]
**is_connected_account** | **bool** | Indicates if the payment account is an externally connected account.  Externally connected account can be used to view account balances and transactions. | [optional]
**consent_id** | **string** | The ID of the consent used to connect the external account. | [optional]
**external_account_icon** | **string** | The Icon for external accounts | [optional]
**bank_name** | **string** | The bank name for external accounts | [optional]
**expiry_date** | **\DateTime** | The date that the external account will expire | [optional]
**xero_bank_feed_connection_status** | **string** | States the status of the Xero bank feed connection, if applicable. | [optional]
**xero_bank_feed_sync_status** | **string** |  | [optional]
**xero_bank_feed_last_synced_at** | **\DateTime** |  | [optional]
**xero_bank_feed_sync_last_failed_at** | **\DateTime** |  | [optional]
**xero_bank_feed_sync_last_failure_reason** | **string** |  | [optional]
**xero_unsynchronised_transactions_count** | **int** | Indicates the number of unsynchronised transactions with Xero | [optional]
**last_transaction** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsLastTransaction**](NoFrixionMoneyMoovModelsLastTransaction.md) |  | [optional]
**created_by** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](NoFrixionMoneyMoovModelsUser.md) |  | [optional]
**default_payment_rail** | **string** | Indicates the default payment rail for this account. Normally it will be left as the  default value but in some special cases it may be set to indicate payouts from this account  should be attempted with a specific payment rail. | [optional]
**rules** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRuleMinimal[]**](NoFrixionMoneyMoovModelsRuleMinimal.md) | The list of rules associated with this account. | [optional]
**is_archived** | **bool** | Indicates whether the account is archived. Archived accounts are not displayed in the UI.  If an account receives a payment it will be automatically unarchived. | [optional]
**supplier_sepa_instant_status** | **string** | Indicates the status of the SEPA Instant payment rail for this account. | [optional]
**physical_account_id** | **string** | For virtual accounts this is the ID of the physical account that the virtual account is linked to. | [optional]
**is_virtual** | **bool** | True if the account is a virtual account. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # NoFrixionMoneyMoovModelsPayrun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**batch_payout_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**merchant_id** | **string** |  | [optional]
**invoices** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunInvoice[]**](NoFrixionMoneyMoovModelsPayrunInvoice.md) |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**schedule_date** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**source_accounts** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount[]**](NoFrixionMoneyMoovModelsPaymentAccount.md) |  | [optional]
**last_updated_by** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](NoFrixionMoneyMoovModelsUser.md) |  | [optional]
**events** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunEvent[]**](NoFrixionMoneyMoovModelsPayrunEvent.md) |  | [optional]
**payouts** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout[]**](NoFrixionMoneyMoovModelsPayout.md) |  | [optional]
**payments** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunPayment[]**](NoFrixionMoneyMoovModelsPayrunPayment.md) |  | [optional]
**is_archived** | **bool** |  | [optional]
**total_eur** | **float** |  | [optional]
**total_gbp** | **float** |  | [optional]
**total_usd** | **float** |  | [optional]
**payouts_count** | **int** |  | [optional]
**authorisation_date** | **\DateTime** |  | [optional]
**can_edit** | **bool** |  | [optional] [readonly]
**can_delete** | **bool** |  | [optional] [readonly]
**authorisers_required_count** | **int** | The number of authorisers required for this payrun. Is determined by business settings  on the source account and/or merchant. | [optional]
**authorisers_completed_count** | **int** | The number of distinct authorisers that have authorised the payrun. | [optional]
**can_authorise** | **bool** | True if the payrun can be authorised by the user who loaded it. | [optional]
**has_current_user_authorised** | **bool** | True if the payrun was loaded for a user and that user has already authorised the latest version of the payrun. | [optional]
**authorisations** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsApproveAuthorisation[]**](NoFrixionMoneyMoovModelsApproveAuthorisation.md) | A list of the users who have successfully authorised the latest version of the payrun and when. | [optional]
**nonce** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

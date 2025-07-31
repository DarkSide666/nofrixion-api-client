# # NoFrixionMoneyMoovModelsBeneficiary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**merchant_id** | **string** | Gets or Sets the merchant id. | [optional]
**name** | **string** | The descriptive name for the beneficiary. |
**currency** | **string** | Gets or Sets the currency. |
**destination** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterparty**](NoFrixionMoneyMoovModelsCounterparty.md) |  | [optional]
**approval_callback_url** | **string** |  | [optional]
**is_enabled** | **bool** |  | [optional]
**authorisations** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsApproveAuthorisation[]**](NoFrixionMoneyMoovModelsApproveAuthorisation.md) | A list of users who have successfully authorised the latest version of the beneficiary. | [optional]
**can_authorise** | **bool** | True if the beneficiary can be authorised by the user who loaded it. | [optional]
**can_update** | **bool** | True if the beneficiary can be updated by the user who loaded it. | [optional]
**has_current_user_authorised** | **bool** | True if the beneficiary was loaded for a user and that user has already authorised the latest version of the beneficiary. | [optional]
**authorisers_required_count** | **int** | The number of authorisers required for this beneficiary. Is determined by business settings  on the source account and/or merchant. | [optional]
**authorisers_completed_count** | **int** | The number of distinct authorisers that have authorised the beneficiary. | [optional]
**authentication_methods** | **string[]** | A list of authentication types allowed to authorise the payout. | [optional]
**created_by_email_address** | **string** |  | [optional]
**nonce** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**last_authorised** | **\DateTime** |  | [optional]
**created_by** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](NoFrixionMoneyMoovModelsUser.md) |  | [optional]
**their_reference** | **string** | The reference that will be used by default as TheirReference when creating payouts to this beneficiary  if no TheirReference is specified for the payout. | [optional]
**beneficiary_events** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryEvent[]**](NoFrixionMoneyMoovModelsBeneficiaryEvent.md) |  | [optional]
**source_accounts** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount[]**](NoFrixionMoneyMoovModelsPaymentAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

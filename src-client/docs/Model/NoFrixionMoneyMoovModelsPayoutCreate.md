# # NoFrixionMoneyMoovModelsPayoutCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the source account for the payout. |
**type** | **string** | The type of account identifier to use for the payout destination. |
**description** | **string** |  | [optional]
**currency** | **string** |  |
**amount** | **float** |  |
**your_reference** | **string** | Gets or Sets the your reference property. | [optional]
**their_reference** | **string** |  | [optional]
**destination** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterpartyCreate**](NoFrixionMoneyMoovModelsCounterpartyCreate.md) |  | [optional]
**invoice_id** | **string** | Optional field to associate the payout with the invoice from an external   application such as Xero. The InvoiceID needs to be unique for each  account. | [optional]
**allow_incomplete** | **bool** | If set to true the payout will get created even if the business validation   rules fail. The basic data validation rules must still pass. The original   purpose of this flag was to allow payouts to be created from i3rd party applications,  such as Xero, that may not have things like an IBAN set for a supplier.  The missing information must be filled, either by an update from the 3rd party  application, or manually, before the payout can be submitted for processing. | [optional]
**tag_ids** | **string[]** | An optional list of tag ids to add to the payout. | [optional]
**scheduled** | **bool** | Should this payout be scheduled for a future date? | [optional]
**schedule_date** | **\DateTime** | The date the payout should be submitted. | [optional]
**beneficiary_id** | **string** | Optional. The ID of the beneficiary to use for the payout destination. | [optional]
**batch_payout_id** | **string** | The ID of the batch payout this payout is part of. | [optional]
**topup_payrun_id** | **string** | Optional, if set it indicates that this payout will be used to top up   a payment account for a pay run by an internal transfer. | [optional]
**payment_rail** | **string** | Optional field to indicate the payment rail to use for the payout. Currrently only  supports choosing between SEPA-CT and SEPA-INST for EUR payments. If not set, for a EUR  payment, the default behaviour is to attempt SEPA-INST and fallback to SEPA-CT if rejected. | [optional]
**documents** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutDocumentCreate[]**](NoFrixionMoneyMoovModelsPayoutDocumentCreate.md) | List of documents to attach to the payout. Optional.  Used for identifying or associating documents with the payout. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

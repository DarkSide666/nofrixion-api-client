# # NoFrixionMoneyMoovModelsPayoutUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the source account for the payout. | [optional]
**type** | **string** |  | [optional]
**description** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**amount** | **float** |  | [optional]
**your_reference** | **string** |  | [optional]
**their_reference** | **string** |  | [optional]
**destination** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterparty**](NoFrixionMoneyMoovModelsCounterparty.md) |  | [optional]
**allow_incomplete** | **bool** | If set to true the payout will get updated even if the business validation   rules fail. The basic data validation rules must still pass. The original   purpose of this flag was to allow payouts to be created from i3rd party applications,  such as Xero, that may not have things like an IBAN set for a supplier.  The missing information must be filled, either by an update from the 3rd party  application, or manually, before the payout can be submitted for processing. | [optional]
**tag_ids** | **string[]** | An optional list of tag ids to add to the payout. | [optional]
**scheduled** | **bool** | Should this payout be scheduled for a future date? | [optional]
**schedule_date** | **\DateTime** | The date the payout should be submitted. | [optional]
**payment_rail** | **string** | Optional field to indicate the payment rail to use for the payout. Currrently only  supports choosing between SEPA-CT and SEPA-INST for EUR payments. If not set, for a EUR  payment, the default behaviour is to attempt SEPA-INST and fallback to SEPA-CT if rejected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

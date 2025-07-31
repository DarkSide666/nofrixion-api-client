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
**charge_bearer** | **string** | Optional field to set who should pay any fees for the payout. Typically only  used for international payments and ignored for SEPA and Faster Payments. | [optional]
**fx_destination_currency** | **string** | Optional. For an FX payout this is the currency that the beneficiary should be sent. | [optional]
**fx_destination_amount** | **float** | Optional but one of Amount or FxDestinationAmount must be set. If specified this will be the amount sent to the payee.  The payout&#39;s Amount will be dynamically adjusted based on this amount and the FX rate. | [optional]
**fx_use_destination_amount** | **bool** | For a multi-currency payout this indicates how the Amount and FxDestinaationAmount are treated.  If true the FxDestinationAmount is authoritative and the Amount is set based on the FxRate. If false then the Amount is authoritative  and the FxDestinationAmount is set based on the Amount and FxRate. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

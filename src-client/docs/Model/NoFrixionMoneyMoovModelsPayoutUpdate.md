# # NoFrixionMoneyMoovModelsPayoutUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the source account for the payout. | [optional]
**type** | **string** |  | [optional]
**description** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**amount** | **float** |  | [optional]
**your_reference** | **string** | The Your reference field is an optional field that gets set locally on the payer&#39;s transaction record. It does not get   sent out through the payment network. The maximum length for the field is 256 characters. An empty value is also supported.  Supported characters:  a b c d e f g h i j k l m n o p q r s t u v w x y z  A B C D E F G H I J K L M N O P Q R S T U V W X Y Z  0 1 2 3 4 5 6 7 8 9  / - ? : ( ) . , &#39; + Space  In addition the field cannot start with a : or - character. | [optional]
**their_reference** | **string** | The Their reference field gets sent to the payee and appears on their transaction record.   The maximum length for the field varies depending on the payment network. For SEPA (Euro) it is 140 characters. For Faster Payments (GBP) it is 18 characters.  a b c d e f g h i j k l m n o p q r s t u v w x y z  A B C D E F G H I J K L M N O P Q R S T U V W X Y Z  0 1 2 3 4 5 6 7 8 9  / - ? : ( ) . , &#39; + Space  In addition the field cannot start with a : or - character. | [optional]
**destination** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterparty**](NoFrixionMoneyMoovModelsCounterparty.md) |  | [optional]
**allow_incomplete** | **bool** | If set to true the payout will get updated even if the business validation   rules fail. The basic data validation rules must still pass. The original   purpose of this flag was to allow payouts to be created from i3rd party applications,  such as Xero, that may not have things like an IBAN set for a supplier.  The missing information must be filled, either by an update from the 3rd party  application, or manually, before the payout can be submitted for processing. | [optional]
**tag_ids** | **string[]** | An optional list of tag ids to add to the payout. | [optional]
**scheduled** | **bool** | Should this payout be scheduled for a future date? | [optional]
**schedule_date** | **\DateTime** | The date the payout should be submitted. | [optional]
**payment_rail** | **string** | Optional field to indicate the payment rail to use for the payout. Currently only  supports choosing between SEPA-CT and SEPA-INST for EUR payments. If not set, for a EUR  payment, the default behaviour is to attempt SEPA-INST and fallback to SEPA-CT if rejected. | [optional]
**charge_bearer** | **string** | Optional field to set who should pay any fees for the payout. Typically only  used for international payments and ignored for SEPA and Faster Payments. | [optional]
**fx_destination_currency** | **string** | Optional. For an FX payout this is the currency that the beneficiary should be sent. | [optional]
**fx_destination_amount** | **float** | Optional but one of Amount or FxDestinationAmount must be set. If specified this will be the amount sent to the payee.  The payout&#39;s Amount will be dynamically adjusted based on this amount and the FX rate. | [optional]
**fx_use_destination_amount** | **bool** | For a multi-currency payout this indicates how the Amount and FxDestinationAmount are treated.  If true the FxDestinationAmount is authoritative and the Amount is set based on the FxRate. If false then the Amount is authoritative  and the FxDestinationAmount is set based on the Amount and FxRate. | [optional]
**fx_quote_id** | **string** | Optional. For multi-currency payouts this is the ID of a held rate that can be used for the FX conversion. If left  empty the mid-market FX rate will be used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

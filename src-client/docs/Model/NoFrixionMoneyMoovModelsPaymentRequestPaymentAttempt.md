# # NoFrixionMoneyMoovModelsPaymentRequestPaymentAttempt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attempt_key** | **string** | For pay by bank attempts this is the ID that gets set on all the events (initiate,  callback, webhook and settlement) for the same attempt. For cards and lightning different  fields are used to group payment request events. | [optional]
**payment_request_id** | **string** | The ID of the payment request the result is for. | [optional]
**initiated_at** | **\DateTime** | Timestamp the payment was initiated at. | [optional]
**authorised_at** | **\DateTime** | If the attempt was authorised this is the timestamp it occurred at. | [optional]
**card_authorised_at** | **\DateTime** | If the card payment attempt was authorised this is the timestamp it occurred at. | [optional]
**card_payer_authentication_setup_failed_at** | **\DateTime** | If the card payment attempt authorisation was not succesfully set up  this is the timestamp it occurred at. | [optional]
**card_authorise_failed_at** | **\DateTime** | If the card payment attempt was not succesfully authorised this is the timestamp  it occurred at. | [optional]
**settled_at** | **\DateTime** | If the PISP attempt was settled this is the timestamp it occurred at. | [optional]
**settle_failed_at** | **\DateTime** | If the PISP attempt failed to settled after the expected settlement time this  is the timestamp the failure was recorded at. | [optional]
**payment_method** | **string** | The payment type for the received money. | [optional]
**attempted_amount** | **float** | The payment amount attempted. | [optional]
**authorised_amount** | **float** | The payment amount that was authorised by the payer. | [optional]
**card_authorised_amount** | **float** | The card payment amount that was authorised by the payer. | [optional]
**settled_amount** | **float** | The funds that were received from the payer. | [optional]
**refund_attempts** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestRefundAttempt[]**](NoFrixionMoneyMoovModelsPaymentRequestRefundAttempt.md) | The refund attempts associated with this payment attempt. | [optional]
**capture_attempts** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestCaptureAttempt[]**](NoFrixionMoneyMoovModelsPaymentRequestCaptureAttempt.md) | The card capture attempts associated with this payment attempt. | [optional]
**currency** | **string** | The authorised payment currency. | [optional]
**payment_processor** | **string** | The card processor that was used for the payment event. | [optional]
**wallet_name** | **string** |  | [optional]
**institution_id** | **string** | Where available this is the ID of the institution used by the payer. For example in PIS attempts  this will be the ID of the bank the payer used for the attempt. | [optional]
**institution_name** | **string** | Where available this is the name of the institution used by the payer. For example,  in PIS attempts this will be the name of the bank the payer used for the attempt. | [optional]
**tokenised_card_id** | **string** | For card payments the merchant can request a reusable token for this payer and  use it to submit subsequent merchant initiated payments. | [optional]
**reconciled_transaction_id** | **string** | When the payment attempt is settled (only relevant for non-card payments) this is the payin transaction that  the payment request event was reconciled with. | [optional]
**pisp_authorisation_failed_at** | **\DateTime** | Timestamp for PSIP bank authorisation error or failure. | [optional]
**status** | **string** |  | [optional] [readonly]
**is_paid** | **bool** | True once the attempt has actually been paid (card authorised or settled). | [optional] [readonly]
**paid_at** | **\DateTime** | The time the payment went through (card authorisation time or settlement time). | [optional] [readonly]
**paid_amount** | **float** | The amount that was actually paid. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

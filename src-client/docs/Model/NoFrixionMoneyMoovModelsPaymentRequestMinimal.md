# # NoFrixionMoneyMoovModelsPaymentRequestMinimal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**merchant_id** | **string** |  | [optional]
**merchant_name** | **string** |  | [optional]
**merchant_short_name** | **string** |  | [optional]
**amount** | **float** | The amount of money to request. | [optional]
**currency** | **string** | The currency of the request. | [optional]
**title** | **string** | The title of the payment request. | [optional]
**description** | **string** | An optional description for the payment request. If set this field will appear  on the transaction record for some card processors. | [optional]
**payment_processor** | **string** | The card processor | [optional]
**payment_processor_key** | **string** | The card processors public key | [optional]
**callback_url** | **string** |  | [optional]
**card_stripe_payment_intent_secret** | **string** |  | [optional]
**jwk** | **string** | The jwk containing the public key | [optional]
**payment_methods_list** | **string[]** | The payment methods that the payment request supports. | [optional]
**pisp_error** | **string** | This is the error returned from the bank which is recorded in payment request events. | [optional]
**priority_bank_id** | **string** |  | [optional]
**google_pay_merchant_id** | **string** | Merchant ID from Google Pay | [optional]
**payment_attempts** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestPaymentAttempt[]**](NoFrixionMoneyMoovModelsPaymentRequestPaymentAttempt.md) | The payment attempts for this payment request. | [optional]
**status** | **string** | The status of the payment request. | [optional]
**partial_payment_method** | **string** |  | [optional]
**stripe_account_id** | **string** | Account ID of connected customers in Stripe | [optional]
**country_code** | **string** | The country code associated with the payment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

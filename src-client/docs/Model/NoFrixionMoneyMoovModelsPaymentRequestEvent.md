# # NoFrixionMoneyMoovModelsPaymentRequestEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**payment_request_id** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**event_type** | **string** |  | [optional]
**amount** | **float** |  |
**currency** | **string** |  | [optional]
**status** | **string** |  | [optional]
**error_reason** | **string** |  | [optional]
**error_message** | **string** |  | [optional]
**card_request_id** | **string** |  | [optional]
**card_transaction_id** | **string** |  | [optional]
**card_token_customer_id** | **string** | If the option to create a reusable token for card payments was set this field contains  the token the merchant can store to use for repeat payments. | [optional]
**card_authorization_response_id** | **string** | For a successful card authorization this field will hold the response ID. If a capture  needs to be performed this is the ID that must be used. | [optional]
**lightning_invoice** | **string** | For Bitcoin Lightning payments this field holds the invoice presented to the payer. | [optional]
**lightning_r_hash** | **string** | For Bitcoin Lightning payments the hash of the invoice presented to the payer. | [optional]
**pisp_payment_service_provider_id** | **string** | For a payment initiation this is the service provider ID selected by the payer, typically  the ID for the bank or similar financial institution. | [optional]
**pisp_payment_initiation_id** | **string** | For a payment initiation this is the ID returned by the service provider initiating  the payment for us. | [optional]
**pisp_redirect_url** | **string** | For a payment initiation this is the redirect URL returned by the service provider  initiating the payment for us. This is the URL the payer is redirected to   authenticate with their financial institution and authorise the payment. | [optional]
**payment_processor_name** | **string** | If the event was for a card payment this is the name of the card processor,  e.g. CyberSource or Checkout, that was used. | [optional]
**pisp_bank_status** | **string** | For payment initiation attempts some providers (e.g. Modulr) will return two status fields. The first  status field is from the provider and the second is from the bank. | [optional]
**wallet_name** | **string** |  | [optional]
**refund_payout_id** | **string** | ID of the Payout that was created for refund. | [optional]
**apple_pay_transaction_id** | **string** | Transaction ID received in Apple pay token. | [optional]
**pisp_payment_institution_name** | **string** | For a payment initiation this is the name of the financial institution that  is used to initiate and authorise the payment. | [optional]
**origin_url** | **string** | Optional field that can be set by payment methods, such as pay by bank, that may want to redirect  back to the URL that initiated the attempt in the case of a failure condition. | [optional]
**reconciled_transaction_id** | **string** | For settlement events (only relevant for non-card payments) this is the payin transaction that  the payment request event was reconciled with. | [optional]
**direct_debit_payment_id** | **string** | Payment ID issued by the Direct Debit supplier. | [optional]
**direct_debit_payment_reference** | **string** | Reference string issued by the Direct Debit supplier. | [optional]
**drirect_debit_mandate_id** | **string** | The ID of the mandate that was used wehn requesting payment. | [optional]
**card_scheme** | **string** | For card payment events this field holds the scheme of the payer&#39;s card, e.g. Visa, Mastercard, etc. | [optional]
**card_expiry_year** | **int** | For card payment events this field holds the payer&#39;s card expiry year. | [optional]
**card_expiry_month** | **int** | For card payment events this field holds the payer&#39;s card expiry month. | [optional]
**card_last_four_digits** | **string** | For card payment events this field holds the payer&#39;s card last four digits. | [optional]
**card_issuer** | **string** | For card payment events this field holds the payer&#39;s card issuer. | [optional]
**card_issuer_country** | **string** | For card payment events this field holds the payer&#39;s card issuer country of origin. | [optional]
**payment_method_type** | **string** | The type of payment method the event relates to, e.g. card, pisp, etc. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

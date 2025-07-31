# Nofrixion\Client\PaymentRequestsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**captureCardPayment()**](PaymentRequestsApi.md#captureCardPayment) | **POST** /api/v1/paymentrequests/{id}/card/capture | Submits a request to capture a previously authorised card payment. |
| [**createAndPayPaymentRequest()**](PaymentRequestsApi.md#createAndPayPaymentRequest) | **POST** /api/v1/paymentrequests/payondemand | Creates a payment request record and processes the payment. |
| [**createPaymentRequest()**](PaymentRequestsApi.md#createPaymentRequest) | **POST** /api/v1/paymentrequests | Creates a payment request record. |
| [**deleteAllTokenisedCards()**](PaymentRequestsApi.md#deleteAllTokenisedCards) | **DELETE** /api/v1/paymentrequests/card/customertokens/removeall/{customerEmailAddress} | Deletes all the card tokens for a customer. |
| [**deleteAllTokenisedCardsForMerchant()**](PaymentRequestsApi.md#deleteAllTokenisedCardsForMerchant) | **DELETE** /api/v1/paymentrequests/card/customertokens/removeall/{merchantID}/{customerEmailAddress} | Deletes all the card tokens for a customer. |
| [**deletePaymentRequest()**](PaymentRequestsApi.md#deletePaymentRequest) | **DELETE** /api/v1/paymentrequests/{id} | Deletes a payment request, along with its keys and addresses, if there&#39;s  no payment event associated with it. |
| [**deletePaymentRequestTemplate()**](PaymentRequestsApi.md#deletePaymentRequestTemplate) | **DELETE** /api/v1/paymentrequests/{merchantID}/templates/{templateID} | Deletes a payment request template for a merchant. |
| [**deleteTokenisedCard()**](PaymentRequestsApi.md#deleteTokenisedCard) | **DELETE** /api/v1/paymentrequests/card/customertokens/{id} | Deletes a single card token. |
| [**exportPaymentRequests()**](PaymentRequestsApi.md#exportPaymentRequests) | **GET** /api/v1/paymentrequests/export | Export a list of all payment requests to a CSV file. |
| [**getAllPaymentRequestsPaged()**](PaymentRequestsApi.md#getAllPaymentRequestsPaged) | **GET** /api/v1/paymentrequests | Gets a list of all payment requests. |
| [**getPaymentRequest()**](PaymentRequestsApi.md#getPaymentRequest) | **GET** /api/v1/paymentrequests/{id} | Gets a payment request. |
| [**getPaymentRequestEvents()**](PaymentRequestsApi.md#getPaymentRequestEvents) | **GET** /api/v1/paymentrequests/{id}/events | Gets a payment requests&#39;s events. |
| [**getPaymentRequestForOrder()**](PaymentRequestsApi.md#getPaymentRequestForOrder) | **GET** /api/v1/paymentrequests/getbyorderid/{orderID} | Gets a payment request by its order ID. |
| [**getPaymentRequestMetricsForMerchant()**](PaymentRequestsApi.md#getPaymentRequestMetricsForMerchant) | **GET** /api/v1/paymentrequests/metrics | Gets payment request metrics of a merchant. |
| [**getPaymentRequestMinimal()**](PaymentRequestsApi.md#getPaymentRequestMinimal) | **GET** /api/v1/paymentrequests/{id}/minimal | Gets a minimal representation of a payment request. |
| [**getPaymentRequestReceipt()**](PaymentRequestsApi.md#getPaymentRequestReceipt) | **GET** /api/v1/paymentrequests/{id}/receipt | Gets the PDF receipt for a payment request. |
| [**getPaymentRequestResult()**](PaymentRequestsApi.md#getPaymentRequestResult) | **GET** /api/v1/paymentrequests/{id}/result | Gets a payment request result. |
| [**getPaymentRequestTemplate()**](PaymentRequestsApi.md#getPaymentRequestTemplate) | **GET** /api/v1/paymentrequests/{merchantID}/templates/{templateID} | Gets a payment request template for a merchant. |
| [**getPaymentRequestTemplates()**](PaymentRequestsApi.md#getPaymentRequestTemplates) | **GET** /api/v1/paymentrequests/{merchantID}/templates | Gets a list of payment request templates for a merchant. |
| [**getPublicKeyForCardPayment()**](PaymentRequestsApi.md#getPublicKeyForCardPayment) | **GET** /api/v1/paymentrequests/{id}/card/publickey | Gets the public key to encrypt card details with when submitting an authorisation. |
| [**getTokenisedCards()**](PaymentRequestsApi.md#getTokenisedCards) | **GET** /api/v1/paymentrequests/card/customertokens/{customerEmailAddress} | Gets a list of the tokenised cards stored for a single customer. |
| [**getTokenisedCardsForMerchant()**](PaymentRequestsApi.md#getTokenisedCardsForMerchant) | **GET** /api/v1/paymentrequests/card/customertokens/{merchantID}/{customerEmailAddress} | Gets a list of the tokenised cards stored for a single customer. |
| [**refundCardPayment()**](PaymentRequestsApi.md#refundCardPayment) | **POST** /api/v1/paymentrequests/{id}/card/refund/{partialRefundAmount} | Submits a request to refund a card payment. |
| [**simulatePayByBankCallback()**](PaymentRequestsApi.md#simulatePayByBankCallback) | **PUT** /api/v1/paymentrequests/{id}/pisp/sandboxcallback | This action simulates a payment initiation callback from a bank to authorise a payment in a sandbox environment. |
| [**submitCardPayment()**](PaymentRequestsApi.md#submitCardPayment) | **POST** /api/v1/paymentrequests/{id}/card | Submit a payment authorisation request to the card gateway. |
| [**submitDirectDebitForMandate()**](PaymentRequestsApi.md#submitDirectDebitForMandate) | **POST** /api/v1/paymentrequests/{id}/directdebit | Submits a Direct Debit payment attempt. |
| [**submitPayByBank()**](PaymentRequestsApi.md#submitPayByBank) | **POST** /api/v1/paymentrequests/{id}/pisp | Submits a payment initiation request. |
| [**submitTokenisedCardPayment()**](PaymentRequestsApi.md#submitTokenisedCardPayment) | **POST** /api/v1/paymentrequests/{id}/card/paywithtoken | Submits a payment request, using a tokenised card, to a payment gateway. |
| [**updatePaymentRequest()**](PaymentRequestsApi.md#updatePaymentRequest) | **PUT** /api/v1/paymentrequests/{id} | Updates a payment request. |
| [**updatePaymentRequestTemplate()**](PaymentRequestsApi.md#updatePaymentRequestTemplate) | **PUT** /api/v1/paymentrequests/{merchantID}/templates/{templateID} | Updates a payment request template for a merchant. |
| [**voidAllCardPayments()**](PaymentRequestsApi.md#voidAllCardPayments) | **POST** /api/v1/paymentrequests/{id}/card/voidpaymentrequest | Submits a request to void all payments for a payment request. |
| [**voidCardPayment()**](PaymentRequestsApi.md#voidCardPayment) | **POST** /api/v1/paymentrequests/{id}/card/void | Submits a request to void a card payment. |


## `captureCardPayment()`

```php
captureCardPayment($id, $authorization_id, $amount): \Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse
```

Submits a request to capture a previously authorised card payment.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request to perform the capture for.
$authorization_id = 'authorization_id_example'; // string | The ID returned from a successful card authorisation.
$amount = 3.4; // float | The amount to capture. Must be less than the authorisation amount.

try {
    $result = $apiInstance->captureCardPayment($id, $authorization_id, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->captureCardPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request to perform the capture for. | |
| **authorization_id** | **string**| The ID returned from a successful card authorisation. | |
| **amount** | **float**| The amount to capture. Must be less than the authorisation amount. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse**](../Model/NoFrixionBizBizModelsPaymentsCardPaymentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAndPayPaymentRequest()`

```php
createAndPayPaymentRequest($payment_request_create_amount, $card_sensitive_card_number, $card_sensitive_card_security_code, $card_sensitive_expiry_month, $card_sensitive_expiry_year, $card_expiry_month, $card_expiry_year, $payment_initiation_request_provider_id, $payment_request_create_merchant_id, $payment_request_create_currency, $payment_request_create_customer_id, $payment_request_create_order_id, $payment_request_create_payment_method_types, $payment_request_create_payment_methods, $payment_request_create_description, $payment_request_create_pisp_account_id, $payment_request_create_shipping_first_name, $payment_request_create_shipping_last_name, $payment_request_create_shipping_address_line1, $payment_request_create_shipping_address_line2, $payment_request_create_shipping_address_city, $payment_request_create_shipping_address_county, $payment_request_create_shipping_address_post_code, $payment_request_create_shipping_address_country_code, $payment_request_create_shipping_phone, $payment_request_create_shipping_email, $payment_request_create_origin_url, $payment_request_create_base_origin_url, $payment_request_create_callback_url, $payment_request_create_failure_callback_url, $payment_request_create_success_web_hook_url, $payment_request_create_card_authorize_only, $payment_request_create_card_create_token, $payment_request_create_card_create_token_mode, $payment_request_create_card_transmit_raw_details, $payment_request_create_card_processor_merchant_id, $payment_request_create_ignore_address_verification, $payment_request_create_card_ignore_cvn, $payment_request_create_pisp_recipient_reference, $payment_request_create_use_hosted_payment_page, $payment_request_create_card_no_payer_authentication, $payment_request_create_partial_payment_method, $payment_request_create_customer_email_address, $payment_request_create_payment_processor, $payment_request_create_lightning_invoice, $payment_request_create_lightning_invoice_expires_at, $payment_request_create_notification_email_addresses, $payment_request_create_priority_bank_id, $payment_request_create_title, $payment_request_create_partial_payment_steps, $payment_request_create_payrun_id, $payment_request_create_sandbox_settle_delay_in_seconds, $payment_request_create_tag_ids, $payment_request_create_tags, $payment_request_create_auto_send_receipt, $payment_request_create_custom_fields, $payment_request_create_due_date, $payment_request_create_field_display_settings, $payment_request_create_notification_role_ids, $card_sensitive_jwt_token, $card_sensitive_number_token, $card_sensitive_cvc_token, $card_sensitive_card_holder_first_name, $card_sensitive_card_holder_last_name, $card_sensitive_billing_address_line1, $card_sensitive_billing_address_line2, $card_sensitive_billing_address_city, $card_sensitive_billing_address_county, $card_sensitive_billing_address_post_code, $card_sensitive_billing_address_country_code, $card_sensitive_billing_phone, $card_sensitive_billing_email, $card_sensitive_save_card_consent, $card_sensitive_partial_amount, $card_jwt_token, $card_number_token, $card_cvc_token, $card_card_holder_first_name, $card_card_holder_last_name, $card_billing_address_line1, $card_billing_address_line2, $card_billing_address_city, $card_billing_address_county, $card_billing_address_post_code, $card_billing_address_country_code, $card_billing_phone, $card_billing_email, $card_save_card_consent, $card_partial_amount, $payment_method, $card_token_tokenised_card_id, $card_token_payment_initiator, $card_token_card_security_code, $card_token_partial_amount, $payment_initiation_request_partial_amount, $payment_initiation_request_redirect_to_origin_url, $payment_initiation_request_origin_url): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsIPaymentResponse
```

Creates a payment request record and processes the payment.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanCreatePaymentRequests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_request_create_amount = 3.4; // float | The amount of money to request.
$card_sensitive_card_number = 'card_sensitive_card_number_example'; // string
$card_sensitive_card_security_code = 'card_sensitive_card_security_code_example'; // string
$card_sensitive_expiry_month = 'card_sensitive_expiry_month_example'; // string
$card_sensitive_expiry_year = 'card_sensitive_expiry_year_example'; // string
$card_expiry_month = 'card_expiry_month_example'; // string
$card_expiry_year = 'card_expiry_year_example'; // string
$payment_initiation_request_provider_id = 'payment_initiation_request_provider_id_example'; // string | This is the ID of the institution (bank) that the payer ha chosen.
$payment_request_create_merchant_id = 'payment_request_create_merchant_id_example'; // string | The ID of the merchant to create the payment request for.
$payment_request_create_currency = 'payment_request_create_currency_example'; // string | The currency of the payment request.
$payment_request_create_customer_id = 'payment_request_create_customer_id_example'; // string | An optional customer identifier for the payment request. This field is sent to the   payer's bank when using payment initiation. The restriction in the available characters  is due to some banks rejecting requests when ones outside the set are used.
$payment_request_create_order_id = 'payment_request_create_order_id_example'; // string | An optional order ID for the payment request. If the request is for an invoice this  is the most appropriate field for the invoice ID.
$payment_request_create_payment_method_types = 'payment_request_create_payment_method_types_example'; // string | The payment methods that the payment request supports. When setting using form data  should be supplied as a comma separated list, for example \\\"card, pisp, lightning\\\".
$payment_request_create_payment_methods = array('payment_request_create_payment_methods_example'); // string[] | The payment methods that the payment request supports.
$payment_request_create_description = 'payment_request_create_description_example'; // string | An optional description for the payment request. If set this field will appear  on the transaction record for some card processors.
$payment_request_create_pisp_account_id = 'payment_request_create_pisp_account_id_example'; // string | The payment account ID to use to receive payment initiation payments. This must match one of your  NoFrixion payment account IDs. This can be left blank to use your default payment account.
$payment_request_create_shipping_first_name = 'payment_request_create_shipping_first_name_example'; // string | Optionally the first name of the customer's shipping address.
$payment_request_create_shipping_last_name = 'payment_request_create_shipping_last_name_example'; // string | Optionally the last name of the customer's shipping address.
$payment_request_create_shipping_address_line1 = 'payment_request_create_shipping_address_line1_example'; // string | Optionally the first line of the customer's shipping address.
$payment_request_create_shipping_address_line2 = 'payment_request_create_shipping_address_line2_example'; // string | Optionally the second line of the customer's shipping address.
$payment_request_create_shipping_address_city = 'payment_request_create_shipping_address_city_example'; // string | Optionally the city of the customer's shipping address.
$payment_request_create_shipping_address_county = 'payment_request_create_shipping_address_county_example'; // string | Optionally the state or county of the customer's shipping address.
$payment_request_create_shipping_address_post_code = 'payment_request_create_shipping_address_post_code_example'; // string | Optionally the post code of the customer's shipping address.
$payment_request_create_shipping_address_country_code = 'payment_request_create_shipping_address_country_code_example'; // string | Optionally the country code of the customer's shipping address.
$payment_request_create_shipping_phone = 'payment_request_create_shipping_phone_example'; // string | Optionally the shipping phone number for the customer.
$payment_request_create_shipping_email = 'payment_request_create_shipping_email_example'; // string | Optionally the shipping email address for the customer.
$payment_request_create_origin_url = 'payment_request_create_origin_url_example'; // string
$payment_request_create_base_origin_url = 'payment_request_create_base_origin_url_example'; // string | For card payments the origin of the payment page needs to be set in advance.  A public key context is generated to encrypt sensitive card details and is bound  to a single origin URL.
$payment_request_create_callback_url = 'payment_request_create_callback_url_example'; // string | Once a payment is processed, or a notification of an inbound payment is received,  a callback request will be made to this URL. Typically it will be the page on  a merchant's web site that displays the results of the payment attempt.
$payment_request_create_failure_callback_url = 'payment_request_create_failure_callback_url_example'; // string | Optional callback URL for payment failures that can occur when the payer is   redirected away from the payment page. Typically the payer is only sent away  from the payment page for pay by bank attempts. If this URL is not set the   payer will be redirected back to the original URL the payment attempt was initiated  from.
$payment_request_create_success_web_hook_url = 'payment_request_create_success_web_hook_url_example'; // string | If a payment event results in the payment request being classified as fully paid this  success webhook URL will be invoked. The URL will be invoked as a GET request, i.e.  there will be no request body. Two query parameters will be added to the URL. The   first one will be \\\"id\\\" and will hold the payment request ID. The second one will be  \\\"orderid\\\" and will hold the payment request OrderID, note the OrderID could be empty  if it was not set when the payment request was created.  The recommended approach when receiving a success web hook is to use the \\\"id\\\" parameter  to call the moneymoov get payment request endpoint to retrieve the full details of the  payment request and check the status. Web hooks can be easily spoofed and should not be  relied upon.
$payment_request_create_card_authorize_only = True; // bool | For card payments the default behaviour is to authorise and capture the payment at the same  time. If a merchant needs to authorise and then capture at a later point this property needs  to be set to true.
$payment_request_create_card_create_token = True; // bool | For card payments a payment attempt can be used to create a reusable token for subsequent  payments. Setting this field to true will create a reusable customer token.
$payment_request_create_card_create_token_mode = 'payment_request_create_card_create_token_mode_example'; // string | This specifies whether user consent will be taken before tokenising card or not.  This cannot be 'None' if CardCreateToken is set to true. If this is set to 'UserConsentRequired'  then, the user consent will overwrite CardCreateToken flag on submit card payment.
$payment_request_create_card_transmit_raw_details = True; // bool | If set to true for card payments the sensitive card number and card verification number   will be transmitted directly rather than being tokenised. This makes the payment quicker  but more exposed to client side flaws such as cross site scripting.
$payment_request_create_card_processor_merchant_id = 'payment_request_create_card_processor_merchant_id_example'; // string | Optional field that if specified indicates the processor merchant ID that should be used  to process any card payments. Mainly useful where a merchant has multiple processor  merchant ID's. If left empty the default merchant card settings will be used.
$payment_request_create_ignore_address_verification = True; // bool | If set to true the card payment gateway will be directed to proceed with a payment even if the  address verification checks fails.
$payment_request_create_card_ignore_cvn = True; // bool | If set to true the card payment gateway will be directed to proceed with a payment even if the  card verification number check fails.
$payment_request_create_pisp_recipient_reference = 'payment_request_create_pisp_recipient_reference_example'; // string | For Payment Initiation payments this is the reference that will be requested to used as the reference   on the your transaction record. Note that it is not guaranteed that the sending bank will use this  reference and in practice it has been observed to be supported by only half to two thirds of banks.
$payment_request_create_use_hosted_payment_page = True; // bool | If set to true, and the merchant is configured for hosted payment pages, the base and callback URLs  will be set to use the hosted payment page.
$payment_request_create_card_no_payer_authentication = True; // bool | If set to true for card payments no attempt will be made to use payer authentication (3-D Secure and equivalent).  Skipping payer authentication can help avoid failed payment attempts when a payer is not enrolled or when they  can't be bothered completing their issuing bank's authentication steps. A disadvantage is it exposes the merchant   to liability for charge backs.
$payment_request_create_partial_payment_method = 'payment_request_create_partial_payment_method_example'; // string | The approach to use, or not, for accepting partial payments.
$payment_request_create_customer_email_address = 'payment_request_create_customer_email_address_example'; // string | Optional email address for the customer. If the tokenise card option is set then the customer email address  is mandatory.
$payment_request_create_payment_processor = 'payment_request_create_payment_processor_example'; // string | Lists the supported card and PIS processors.
$payment_request_create_lightning_invoice = 'payment_request_create_lightning_invoice_example'; // string
$payment_request_create_lightning_invoice_expires_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$payment_request_create_notification_email_addresses = 'payment_request_create_notification_email_addresses_example'; // string
$payment_request_create_priority_bank_id = 'payment_request_create_priority_bank_id_example'; // string | The ID of the bank that is set as the priority bank for display on pay element.
$payment_request_create_title = 'payment_request_create_title_example'; // string | A generic field to contain any additional data that the merchant wishes to store against the payment request.  E.g. product or service information.
$payment_request_create_partial_payment_steps = 'payment_request_create_partial_payment_steps_example'; // string | An optional comma separated list of partial payment amounts. The amounts represent guidance, or suggestions, as to  how the payer will be requested to make partial payments.
$payment_request_create_payrun_id = 'payment_request_create_payrun_id_example'; // string | Optional, if set it indicates that this payment request will be used to top up a payment account for a pay run.
$payment_request_create_sandbox_settle_delay_in_seconds = 56; // int | Sandbox only. Optional. If set, the simulated Direct Debit settlement will be delayed by the specified number of seconds.  Must be greater than 0 and less than 600. Otherwise, the default value will be used.
$payment_request_create_tag_ids = array('payment_request_create_tag_ids_example'); // string[] | An optional list of tag ids to add to the payment request
$payment_request_create_tags = array('payment_request_create_tags_example'); // string[] | An optional list of tag values to set on the payment request. If no matching  tag exists it will be created.
$payment_request_create_auto_send_receipt = True; // bool | If set to true, a receipt will be automatically sent to the CustomerEmailAddress when payments are received.
$payment_request_create_custom_fields = array(new \Nofrixion\Client\Model\\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestCustomFieldCreate()); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestCustomFieldCreate[] | A list of custom fields to add to the payment request. The custom fields  are data type agnostic which means that the API will not do any validation or formatting  in the key-value pairs. The API will store the custom fields as is.
$payment_request_create_due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | An optional due date for the payment request.
$payment_request_create_field_display_settings = array(new \Nofrixion\Client\Model\\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestFieldDisplaySetting()); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestFieldDisplaySetting[] | An optional display settings for the payment request fields. This allows the merchant to control how  the fields are displayed on the hosted payment page, receipt, etc.
$payment_request_create_notification_role_ids = array('payment_request_create_notification_role_ids_example'); // string[] | An optional list of notification role IDs that will receive notifications  about the payment request. This is useful for roles that need to be notified  about payment request events.
$card_sensitive_jwt_token = 'card_sensitive_jwt_token_example'; // string | The JWT token is not used if the raw card details are provided. This  property is to override the base card property and stop it being required.
$card_sensitive_number_token = 'card_sensitive_number_token_example'; // string | The Number Token is not used if the raw card details are provided. This  property is to override the base card property and stop it being required.
$card_sensitive_cvc_token = 'card_sensitive_cvc_token_example'; // string | The Cvc Token is not used if the raw card details are provided. This  property is to override the base card property and stop it being required.
$card_sensitive_card_holder_first_name = 'card_sensitive_card_holder_first_name_example'; // string
$card_sensitive_card_holder_last_name = 'card_sensitive_card_holder_last_name_example'; // string
$card_sensitive_billing_address_line1 = 'card_sensitive_billing_address_line1_example'; // string
$card_sensitive_billing_address_line2 = 'card_sensitive_billing_address_line2_example'; // string
$card_sensitive_billing_address_city = 'card_sensitive_billing_address_city_example'; // string
$card_sensitive_billing_address_county = 'card_sensitive_billing_address_county_example'; // string
$card_sensitive_billing_address_post_code = 'card_sensitive_billing_address_post_code_example'; // string
$card_sensitive_billing_address_country_code = 'card_sensitive_billing_address_country_code_example'; // string
$card_sensitive_billing_phone = 'card_sensitive_billing_phone_example'; // string
$card_sensitive_billing_email = 'card_sensitive_billing_email_example'; // string
$card_sensitive_save_card_consent = True; // bool
$card_sensitive_partial_amount = 3.4; // float | Optional partial payment amount. If not specified then the full payment request  amount will be attempted.
$card_jwt_token = 'card_jwt_token_example'; // string | The tokenised Card Number and CardVerification Number (CVN) details.  Typically generated by the CyberSource javascript library.
$card_number_token = 'card_number_token_example'; // string
$card_cvc_token = 'card_cvc_token_example'; // string
$card_card_holder_first_name = 'card_card_holder_first_name_example'; // string
$card_card_holder_last_name = 'card_card_holder_last_name_example'; // string
$card_billing_address_line1 = 'card_billing_address_line1_example'; // string
$card_billing_address_line2 = 'card_billing_address_line2_example'; // string
$card_billing_address_city = 'card_billing_address_city_example'; // string
$card_billing_address_county = 'card_billing_address_county_example'; // string
$card_billing_address_post_code = 'card_billing_address_post_code_example'; // string
$card_billing_address_country_code = 'card_billing_address_country_code_example'; // string
$card_billing_phone = 'card_billing_phone_example'; // string
$card_billing_email = 'card_billing_email_example'; // string
$card_save_card_consent = True; // bool
$card_partial_amount = 3.4; // float | Optional partial payment amount. If not specified then the full payment request  amount will be attempted.
$payment_method = 'payment_method_example'; // string | The single payment method to use for the pay on demand payment request.
$card_token_tokenised_card_id = 'card_token_tokenised_card_id_example'; // string | The ID of the tokenised card to use for the payment. The merchant needs to ensure that  the use of the tokenised card is restricted to the same customer that created it.
$card_token_payment_initiator = 'card_token_payment_initiator_example'; // string | Indicates who initiated the card token payment, customer or merchant.
$card_token_card_security_code = 'card_token_card_security_code_example'; // string | Not used for merchant initiated transactions. Optional for customer initiated transactions.  If supplied will be sent to the card processor as a check that the customer using the   tokenised card knows the card verification number.
$card_token_partial_amount = 3.4; // float | Optional partial payment amount. If not specified then the full payment request  amount will be attempted.
$payment_initiation_request_partial_amount = 3.4; // float | Optional. If 0 the full amount is assumed.
$payment_initiation_request_redirect_to_origin_url = 'payment_initiation_request_redirect_to_origin_url_example'; // string
$payment_initiation_request_origin_url = 'payment_initiation_request_origin_url_example'; // string | Optional. If set should indicate the origin URL the payer is making the   payment from. If a pay by bank attempt fails and the payment request does not  have a FailureCallbackUrl set then the payer will be redirected to this URL.

try {
    $result = $apiInstance->createAndPayPaymentRequest($payment_request_create_amount, $card_sensitive_card_number, $card_sensitive_card_security_code, $card_sensitive_expiry_month, $card_sensitive_expiry_year, $card_expiry_month, $card_expiry_year, $payment_initiation_request_provider_id, $payment_request_create_merchant_id, $payment_request_create_currency, $payment_request_create_customer_id, $payment_request_create_order_id, $payment_request_create_payment_method_types, $payment_request_create_payment_methods, $payment_request_create_description, $payment_request_create_pisp_account_id, $payment_request_create_shipping_first_name, $payment_request_create_shipping_last_name, $payment_request_create_shipping_address_line1, $payment_request_create_shipping_address_line2, $payment_request_create_shipping_address_city, $payment_request_create_shipping_address_county, $payment_request_create_shipping_address_post_code, $payment_request_create_shipping_address_country_code, $payment_request_create_shipping_phone, $payment_request_create_shipping_email, $payment_request_create_origin_url, $payment_request_create_base_origin_url, $payment_request_create_callback_url, $payment_request_create_failure_callback_url, $payment_request_create_success_web_hook_url, $payment_request_create_card_authorize_only, $payment_request_create_card_create_token, $payment_request_create_card_create_token_mode, $payment_request_create_card_transmit_raw_details, $payment_request_create_card_processor_merchant_id, $payment_request_create_ignore_address_verification, $payment_request_create_card_ignore_cvn, $payment_request_create_pisp_recipient_reference, $payment_request_create_use_hosted_payment_page, $payment_request_create_card_no_payer_authentication, $payment_request_create_partial_payment_method, $payment_request_create_customer_email_address, $payment_request_create_payment_processor, $payment_request_create_lightning_invoice, $payment_request_create_lightning_invoice_expires_at, $payment_request_create_notification_email_addresses, $payment_request_create_priority_bank_id, $payment_request_create_title, $payment_request_create_partial_payment_steps, $payment_request_create_payrun_id, $payment_request_create_sandbox_settle_delay_in_seconds, $payment_request_create_tag_ids, $payment_request_create_tags, $payment_request_create_auto_send_receipt, $payment_request_create_custom_fields, $payment_request_create_due_date, $payment_request_create_field_display_settings, $payment_request_create_notification_role_ids, $card_sensitive_jwt_token, $card_sensitive_number_token, $card_sensitive_cvc_token, $card_sensitive_card_holder_first_name, $card_sensitive_card_holder_last_name, $card_sensitive_billing_address_line1, $card_sensitive_billing_address_line2, $card_sensitive_billing_address_city, $card_sensitive_billing_address_county, $card_sensitive_billing_address_post_code, $card_sensitive_billing_address_country_code, $card_sensitive_billing_phone, $card_sensitive_billing_email, $card_sensitive_save_card_consent, $card_sensitive_partial_amount, $card_jwt_token, $card_number_token, $card_cvc_token, $card_card_holder_first_name, $card_card_holder_last_name, $card_billing_address_line1, $card_billing_address_line2, $card_billing_address_city, $card_billing_address_county, $card_billing_address_post_code, $card_billing_address_country_code, $card_billing_phone, $card_billing_email, $card_save_card_consent, $card_partial_amount, $payment_method, $card_token_tokenised_card_id, $card_token_payment_initiator, $card_token_card_security_code, $card_token_partial_amount, $payment_initiation_request_partial_amount, $payment_initiation_request_redirect_to_origin_url, $payment_initiation_request_origin_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->createAndPayPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_create_amount** | **float**| The amount of money to request. | |
| **card_sensitive_card_number** | **string**|  | |
| **card_sensitive_card_security_code** | **string**|  | |
| **card_sensitive_expiry_month** | **string**|  | |
| **card_sensitive_expiry_year** | **string**|  | |
| **card_expiry_month** | **string**|  | |
| **card_expiry_year** | **string**|  | |
| **payment_initiation_request_provider_id** | **string**| This is the ID of the institution (bank) that the payer ha chosen. | |
| **payment_request_create_merchant_id** | **string**| The ID of the merchant to create the payment request for. | [optional] |
| **payment_request_create_currency** | **string**| The currency of the payment request. | [optional] |
| **payment_request_create_customer_id** | **string**| An optional customer identifier for the payment request. This field is sent to the   payer&#39;s bank when using payment initiation. The restriction in the available characters  is due to some banks rejecting requests when ones outside the set are used. | [optional] |
| **payment_request_create_order_id** | **string**| An optional order ID for the payment request. If the request is for an invoice this  is the most appropriate field for the invoice ID. | [optional] |
| **payment_request_create_payment_method_types** | **string**| The payment methods that the payment request supports. When setting using form data  should be supplied as a comma separated list, for example \\\&quot;card, pisp, lightning\\\&quot;. | [optional] |
| **payment_request_create_payment_methods** | [**string[]**](../Model/string.md)| The payment methods that the payment request supports. | [optional] |
| **payment_request_create_description** | **string**| An optional description for the payment request. If set this field will appear  on the transaction record for some card processors. | [optional] |
| **payment_request_create_pisp_account_id** | **string**| The payment account ID to use to receive payment initiation payments. This must match one of your  NoFrixion payment account IDs. This can be left blank to use your default payment account. | [optional] |
| **payment_request_create_shipping_first_name** | **string**| Optionally the first name of the customer&#39;s shipping address. | [optional] |
| **payment_request_create_shipping_last_name** | **string**| Optionally the last name of the customer&#39;s shipping address. | [optional] |
| **payment_request_create_shipping_address_line1** | **string**| Optionally the first line of the customer&#39;s shipping address. | [optional] |
| **payment_request_create_shipping_address_line2** | **string**| Optionally the second line of the customer&#39;s shipping address. | [optional] |
| **payment_request_create_shipping_address_city** | **string**| Optionally the city of the customer&#39;s shipping address. | [optional] |
| **payment_request_create_shipping_address_county** | **string**| Optionally the state or county of the customer&#39;s shipping address. | [optional] |
| **payment_request_create_shipping_address_post_code** | **string**| Optionally the post code of the customer&#39;s shipping address. | [optional] |
| **payment_request_create_shipping_address_country_code** | **string**| Optionally the country code of the customer&#39;s shipping address. | [optional] |
| **payment_request_create_shipping_phone** | **string**| Optionally the shipping phone number for the customer. | [optional] |
| **payment_request_create_shipping_email** | **string**| Optionally the shipping email address for the customer. | [optional] |
| **payment_request_create_origin_url** | **string**|  | [optional] |
| **payment_request_create_base_origin_url** | **string**| For card payments the origin of the payment page needs to be set in advance.  A public key context is generated to encrypt sensitive card details and is bound  to a single origin URL. | [optional] |
| **payment_request_create_callback_url** | **string**| Once a payment is processed, or a notification of an inbound payment is received,  a callback request will be made to this URL. Typically it will be the page on  a merchant&#39;s web site that displays the results of the payment attempt. | [optional] |
| **payment_request_create_failure_callback_url** | **string**| Optional callback URL for payment failures that can occur when the payer is   redirected away from the payment page. Typically the payer is only sent away  from the payment page for pay by bank attempts. If this URL is not set the   payer will be redirected back to the original URL the payment attempt was initiated  from. | [optional] |
| **payment_request_create_success_web_hook_url** | **string**| If a payment event results in the payment request being classified as fully paid this  success webhook URL will be invoked. The URL will be invoked as a GET request, i.e.  there will be no request body. Two query parameters will be added to the URL. The   first one will be \\\&quot;id\\\&quot; and will hold the payment request ID. The second one will be  \\\&quot;orderid\\\&quot; and will hold the payment request OrderID, note the OrderID could be empty  if it was not set when the payment request was created.  The recommended approach when receiving a success web hook is to use the \\\&quot;id\\\&quot; parameter  to call the moneymoov get payment request endpoint to retrieve the full details of the  payment request and check the status. Web hooks can be easily spoofed and should not be  relied upon. | [optional] |
| **payment_request_create_card_authorize_only** | **bool**| For card payments the default behaviour is to authorise and capture the payment at the same  time. If a merchant needs to authorise and then capture at a later point this property needs  to be set to true. | [optional] |
| **payment_request_create_card_create_token** | **bool**| For card payments a payment attempt can be used to create a reusable token for subsequent  payments. Setting this field to true will create a reusable customer token. | [optional] |
| **payment_request_create_card_create_token_mode** | **string**| This specifies whether user consent will be taken before tokenising card or not.  This cannot be &#39;None&#39; if CardCreateToken is set to true. If this is set to &#39;UserConsentRequired&#39;  then, the user consent will overwrite CardCreateToken flag on submit card payment. | [optional] |
| **payment_request_create_card_transmit_raw_details** | **bool**| If set to true for card payments the sensitive card number and card verification number   will be transmitted directly rather than being tokenised. This makes the payment quicker  but more exposed to client side flaws such as cross site scripting. | [optional] |
| **payment_request_create_card_processor_merchant_id** | **string**| Optional field that if specified indicates the processor merchant ID that should be used  to process any card payments. Mainly useful where a merchant has multiple processor  merchant ID&#39;s. If left empty the default merchant card settings will be used. | [optional] |
| **payment_request_create_ignore_address_verification** | **bool**| If set to true the card payment gateway will be directed to proceed with a payment even if the  address verification checks fails. | [optional] |
| **payment_request_create_card_ignore_cvn** | **bool**| If set to true the card payment gateway will be directed to proceed with a payment even if the  card verification number check fails. | [optional] |
| **payment_request_create_pisp_recipient_reference** | **string**| For Payment Initiation payments this is the reference that will be requested to used as the reference   on the your transaction record. Note that it is not guaranteed that the sending bank will use this  reference and in practice it has been observed to be supported by only half to two thirds of banks. | [optional] |
| **payment_request_create_use_hosted_payment_page** | **bool**| If set to true, and the merchant is configured for hosted payment pages, the base and callback URLs  will be set to use the hosted payment page. | [optional] |
| **payment_request_create_card_no_payer_authentication** | **bool**| If set to true for card payments no attempt will be made to use payer authentication (3-D Secure and equivalent).  Skipping payer authentication can help avoid failed payment attempts when a payer is not enrolled or when they  can&#39;t be bothered completing their issuing bank&#39;s authentication steps. A disadvantage is it exposes the merchant   to liability for charge backs. | [optional] |
| **payment_request_create_partial_payment_method** | **string**| The approach to use, or not, for accepting partial payments. | [optional] |
| **payment_request_create_customer_email_address** | **string**| Optional email address for the customer. If the tokenise card option is set then the customer email address  is mandatory. | [optional] |
| **payment_request_create_payment_processor** | **string**| Lists the supported card and PIS processors. | [optional] |
| **payment_request_create_lightning_invoice** | **string**|  | [optional] |
| **payment_request_create_lightning_invoice_expires_at** | **\DateTime**|  | [optional] |
| **payment_request_create_notification_email_addresses** | **string**|  | [optional] |
| **payment_request_create_priority_bank_id** | **string**| The ID of the bank that is set as the priority bank for display on pay element. | [optional] |
| **payment_request_create_title** | **string**| A generic field to contain any additional data that the merchant wishes to store against the payment request.  E.g. product or service information. | [optional] |
| **payment_request_create_partial_payment_steps** | **string**| An optional comma separated list of partial payment amounts. The amounts represent guidance, or suggestions, as to  how the payer will be requested to make partial payments. | [optional] |
| **payment_request_create_payrun_id** | **string**| Optional, if set it indicates that this payment request will be used to top up a payment account for a pay run. | [optional] |
| **payment_request_create_sandbox_settle_delay_in_seconds** | **int**| Sandbox only. Optional. If set, the simulated Direct Debit settlement will be delayed by the specified number of seconds.  Must be greater than 0 and less than 600. Otherwise, the default value will be used. | [optional] |
| **payment_request_create_tag_ids** | [**string[]**](../Model/string.md)| An optional list of tag ids to add to the payment request | [optional] |
| **payment_request_create_tags** | [**string[]**](../Model/string.md)| An optional list of tag values to set on the payment request. If no matching  tag exists it will be created. | [optional] |
| **payment_request_create_auto_send_receipt** | **bool**| If set to true, a receipt will be automatically sent to the CustomerEmailAddress when payments are received. | [optional] |
| **payment_request_create_custom_fields** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestCustomFieldCreate[]**](../Model/\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestCustomFieldCreate.md)| A list of custom fields to add to the payment request. The custom fields  are data type agnostic which means that the API will not do any validation or formatting  in the key-value pairs. The API will store the custom fields as is. | [optional] |
| **payment_request_create_due_date** | **\DateTime**| An optional due date for the payment request. | [optional] |
| **payment_request_create_field_display_settings** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestFieldDisplaySetting[]**](../Model/\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestFieldDisplaySetting.md)| An optional display settings for the payment request fields. This allows the merchant to control how  the fields are displayed on the hosted payment page, receipt, etc. | [optional] |
| **payment_request_create_notification_role_ids** | [**string[]**](../Model/string.md)| An optional list of notification role IDs that will receive notifications  about the payment request. This is useful for roles that need to be notified  about payment request events. | [optional] |
| **card_sensitive_jwt_token** | **string**| The JWT token is not used if the raw card details are provided. This  property is to override the base card property and stop it being required. | [optional] |
| **card_sensitive_number_token** | **string**| The Number Token is not used if the raw card details are provided. This  property is to override the base card property and stop it being required. | [optional] |
| **card_sensitive_cvc_token** | **string**| The Cvc Token is not used if the raw card details are provided. This  property is to override the base card property and stop it being required. | [optional] |
| **card_sensitive_card_holder_first_name** | **string**|  | [optional] |
| **card_sensitive_card_holder_last_name** | **string**|  | [optional] |
| **card_sensitive_billing_address_line1** | **string**|  | [optional] |
| **card_sensitive_billing_address_line2** | **string**|  | [optional] |
| **card_sensitive_billing_address_city** | **string**|  | [optional] |
| **card_sensitive_billing_address_county** | **string**|  | [optional] |
| **card_sensitive_billing_address_post_code** | **string**|  | [optional] |
| **card_sensitive_billing_address_country_code** | **string**|  | [optional] |
| **card_sensitive_billing_phone** | **string**|  | [optional] |
| **card_sensitive_billing_email** | **string**|  | [optional] |
| **card_sensitive_save_card_consent** | **bool**|  | [optional] |
| **card_sensitive_partial_amount** | **float**| Optional partial payment amount. If not specified then the full payment request  amount will be attempted. | [optional] |
| **card_jwt_token** | **string**| The tokenised Card Number and CardVerification Number (CVN) details.  Typically generated by the CyberSource javascript library. | [optional] |
| **card_number_token** | **string**|  | [optional] |
| **card_cvc_token** | **string**|  | [optional] |
| **card_card_holder_first_name** | **string**|  | [optional] |
| **card_card_holder_last_name** | **string**|  | [optional] |
| **card_billing_address_line1** | **string**|  | [optional] |
| **card_billing_address_line2** | **string**|  | [optional] |
| **card_billing_address_city** | **string**|  | [optional] |
| **card_billing_address_county** | **string**|  | [optional] |
| **card_billing_address_post_code** | **string**|  | [optional] |
| **card_billing_address_country_code** | **string**|  | [optional] |
| **card_billing_phone** | **string**|  | [optional] |
| **card_billing_email** | **string**|  | [optional] |
| **card_save_card_consent** | **bool**|  | [optional] |
| **card_partial_amount** | **float**| Optional partial payment amount. If not specified then the full payment request  amount will be attempted. | [optional] |
| **payment_method** | **string**| The single payment method to use for the pay on demand payment request. | [optional] |
| **card_token_tokenised_card_id** | **string**| The ID of the tokenised card to use for the payment. The merchant needs to ensure that  the use of the tokenised card is restricted to the same customer that created it. | [optional] |
| **card_token_payment_initiator** | **string**| Indicates who initiated the card token payment, customer or merchant. | [optional] |
| **card_token_card_security_code** | **string**| Not used for merchant initiated transactions. Optional for customer initiated transactions.  If supplied will be sent to the card processor as a check that the customer using the   tokenised card knows the card verification number. | [optional] |
| **card_token_partial_amount** | **float**| Optional partial payment amount. If not specified then the full payment request  amount will be attempted. | [optional] |
| **payment_initiation_request_partial_amount** | **float**| Optional. If 0 the full amount is assumed. | [optional] |
| **payment_initiation_request_redirect_to_origin_url** | **string**|  | [optional] |
| **payment_initiation_request_origin_url** | **string**| Optional. If set should indicate the origin URL the payer is making the   payment from. If a pay by bank attempt fails and the payment request does not  have a FailureCallbackUrl set then the payer will be redirected to this URL. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsIPaymentResponse**](../Model/NoFrixionMoneyMoovModelsIPaymentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentRequest()`

```php
createPaymentRequest($no_frixion_money_moov_models_payment_request_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest
```

Creates a payment request record.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanCreatePaymentRequests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_payment_request_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestCreate | A payment request object containing the details of the record to create.

try {
    $result = $apiInstance->createPaymentRequest($no_frixion_money_moov_models_payment_request_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_payment_request_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestCreate**](../Model/NoFrixionMoneyMoovModelsPaymentRequestCreate.md)| A payment request object containing the details of the record to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest**](../Model/NoFrixionMoneyMoovModelsPaymentRequest.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllTokenisedCards()`

```php
deleteAllTokenisedCards($customer_email_address): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]
```

Deletes all the card tokens for a customer.

<b>Authorization</b>: Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_email_address = 'customer_email_address_example'; // string | The email of the customer to delete all card tokens for.

try {
    $result = $apiInstance->deleteAllTokenisedCards($customer_email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->deleteAllTokenisedCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_email_address** | **string**| The email of the customer to delete all card tokens for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]**](../Model/NoFrixionMoneyMoovModelsCardCustomerToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllTokenisedCardsForMerchant()`

```php
deleteAllTokenisedCardsForMerchant($merchant_id, $customer_email_address): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]
```

Deletes all the card tokens for a customer.

<b>Authorization</b>: End user token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to delete all customer card tokens for.
$customer_email_address = 'customer_email_address_example'; // string | The email of the customer to delete all card tokens for.

try {
    $result = $apiInstance->deleteAllTokenisedCardsForMerchant($merchant_id, $customer_email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->deleteAllTokenisedCardsForMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to delete all customer card tokens for. | |
| **customer_email_address** | **string**| The email of the customer to delete all card tokens for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]**](../Model/NoFrixionMoneyMoovModelsCardCustomerToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePaymentRequest()`

```php
deletePaymentRequest($id)
```

Deletes a payment request, along with its keys and addresses, if there's  no payment event associated with it.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanDeletePaymentRequests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the payment request to delete.

try {
    $apiInstance->deletePaymentRequest($id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->deletePaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the payment request to delete. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePaymentRequestTemplate()`

```php
deletePaymentRequestTemplate($merchant_id, $template_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate
```

Deletes a payment request template for a merchant.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanDeletePaymentRequestTemplates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to delete payment request templates for.
$template_id = 'template_id_example'; // string | The ID of the template.

try {
    $result = $apiInstance->deletePaymentRequestTemplate($merchant_id, $template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->deletePaymentRequestTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to delete payment request templates for. | |
| **template_id** | **string**| The ID of the template. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate**](../Model/NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTokenisedCard()`

```php
deleteTokenisedCard($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]
```

Deletes a single card token.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the card token to delete.

try {
    $result = $apiInstance->deleteTokenisedCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->deleteTokenisedCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the card token to delete. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]**](../Model/NoFrixionMoneyMoovModelsCardCustomerToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportPaymentRequests()`

```php
exportPaymentRequests($merchant_id, $page, $size, $from_date, $to_date, $status, $search, $currency, $min_amount, $max_amount, $tags, $sort): \SplFileObject
```

Export a list of all payment requests to a CSV file.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewPaymentRequests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant ID to get he list of payment requests for. This field is ignored for              merchant tokens and required for user tokens.
$page = 1; // int | The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned.
$size = 20; // int | The number of records to be retrieved from a page.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payment requests created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payment requests created up until this date.
$status = 'All'; // string | The status filter to apply to retrieve payment requests with this status
$search = 'search_example'; // string | The text filter to apply to retrieve payment requests with a similar title, description, merchant name or contact information.
$currency = 'currency_example'; // string | The currency filter to apply to retrieve payment requests with this currency.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payment requests that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payment requests that don't exceed this amount.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payment requests with at least one of these tags.
$sort = 'sort_example'; // string | Optional expression to sort the order of the payment requests. Example \"Amount desc,Inserted asc\".

try {
    $result = $apiInstance->exportPaymentRequests($merchant_id, $page, $size, $from_date, $to_date, $status, $search, $currency, $min_amount, $max_amount, $tags, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->exportPaymentRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant ID to get he list of payment requests for. This field is ignored for              merchant tokens and required for user tokens. | [optional] |
| **page** | **int**| The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned. | [optional] [default to 1] |
| **size** | **int**| The number of records to be retrieved from a page. | [optional] [default to 20] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payment requests created after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payment requests created up until this date. | [optional] |
| **status** | **string**| The status filter to apply to retrieve payment requests with this status | [optional] [default to &#39;All&#39;] |
| **search** | **string**| The text filter to apply to retrieve payment requests with a similar title, description, merchant name or contact information. | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve payment requests with this currency. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve payment requests that exceed this amount. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve payment requests that don&#39;t exceed this amount. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| The tag filter to apply to retrieve payment requests with at least one of these tags. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the payment requests. Example \&quot;Amount desc,Inserted asc\&quot;. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPaymentRequestsPaged()`

```php
getAllPaymentRequestsPaged($merchant_id, $page, $size, $from_date, $to_date, $status, $search, $currency, $min_amount, $max_amount, $tags, $sort): \Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPaymentRequestPageResponse
```

Gets a list of all payment requests.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewPaymentRequests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant ID to get he list of payment requests for. This field is ignored for              merchant tokens and required for user tokens.
$page = 1; // int | The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned.
$size = 20; // int | The number of records to be retrieved from a page.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payment requests created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payment requests created up until this date.
$status = 'All'; // string | The status filter to apply to retrieve payment requests with this status
$search = 'search_example'; // string | The text filter to apply to retrieve payment requests with a similar title, description, merchant name or contact information.
$currency = 'currency_example'; // string | The currency filter to apply to retrieve payment requests with this currency.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payment requests that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payment requests that don't exceed this amount.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payment requests with at least one of these tags.
$sort = 'sort_example'; // string | Optional expression to sort the order of the payment requests. Example \"Amount desc,Inserted asc\".

try {
    $result = $apiInstance->getAllPaymentRequestsPaged($merchant_id, $page, $size, $from_date, $to_date, $status, $search, $currency, $min_amount, $max_amount, $tags, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getAllPaymentRequestsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant ID to get he list of payment requests for. This field is ignored for              merchant tokens and required for user tokens. | [optional] |
| **page** | **int**| The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned. | [optional] [default to 1] |
| **size** | **int**| The number of records to be retrieved from a page. | [optional] [default to 20] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payment requests created after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payment requests created up until this date. | [optional] |
| **status** | **string**| The status filter to apply to retrieve payment requests with this status | [optional] [default to &#39;All&#39;] |
| **search** | **string**| The text filter to apply to retrieve payment requests with a similar title, description, merchant name or contact information. | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve payment requests with this currency. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve payment requests that exceed this amount. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve payment requests that don&#39;t exceed this amount. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| The tag filter to apply to retrieve payment requests with at least one of these tags. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the payment requests. Example \&quot;Amount desc,Inserted asc\&quot;. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPaymentRequestPageResponse**](../Model/NoFrixionBizBizModelsPagingPaymentRequestPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRequest()`

```php
getPaymentRequest($id, $include_events): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest
```

Gets a payment request.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewPaymentRequests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request to retrieve.
$include_events = false; // bool | Set to true to include any associated payment request events.

try {
    $result = $apiInstance->getPaymentRequest($id, $include_events);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request to retrieve. | |
| **include_events** | **bool**| Set to true to include any associated payment request events. | [optional] [default to false] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest**](../Model/NoFrixionMoneyMoovModelsPaymentRequest.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRequestEvents()`

```php
getPaymentRequestEvents($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestEvent[]
```

Gets a payment requests's events.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the payment request to get the events for.

try {
    $result = $apiInstance->getPaymentRequestEvents($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPaymentRequestEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the payment request to get the events for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestEvent[]**](../Model/NoFrixionMoneyMoovModelsPaymentRequestEvent.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRequestForOrder()`

```php
getPaymentRequestForOrder($order_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest
```

Gets a payment request by its order ID.

<b>Authorization</b>: Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The order ID of the payment request to retrieve. Useful when the              payment request has been created by an external application such as WooCommerce or Xero.

try {
    $result = $apiInstance->getPaymentRequestForOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPaymentRequestForOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The order ID of the payment request to retrieve. Useful when the              payment request has been created by an external application such as WooCommerce or Xero. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest**](../Model/NoFrixionMoneyMoovModelsPaymentRequest.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRequestMetricsForMerchant()`

```php
getPaymentRequestMetricsForMerchant($merchant_id, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestMetrics
```

Gets payment request metrics of a merchant.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewPaymentRequests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant ID to get the payment request metrics. This field is ignored for              merchant tokens and required for user tokens.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payment request metrics created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payment request metrics created up until this date.
$search = 'search_example'; // string | The text filter to apply to retrieve payment requests with a similar title, description or contact information.k
$currency = 'currency_example'; // string | The currency filter to apply to retrieve payment request metrics with this currency.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payment request metrics that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payment request metrics that don't exceed this amount.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payment request metrics with at least one of these tags.

try {
    $result = $apiInstance->getPaymentRequestMetricsForMerchant($merchant_id, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPaymentRequestMetricsForMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant ID to get the payment request metrics. This field is ignored for              merchant tokens and required for user tokens. | [optional] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payment request metrics created after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payment request metrics created up until this date. | [optional] |
| **search** | **string**| The text filter to apply to retrieve payment requests with a similar title, description or contact information.k | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve payment request metrics with this currency. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve payment request metrics that exceed this amount. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve payment request metrics that don&#39;t exceed this amount. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| The tag filter to apply to retrieve payment request metrics with at least one of these tags. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestMetrics**](../Model/NoFrixionMoneyMoovModelsPaymentRequestMetrics.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRequestMinimal()`

```php
getPaymentRequestMinimal($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestMinimal
```

Gets a minimal representation of a payment request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request to retrieve.

try {
    $result = $apiInstance->getPaymentRequestMinimal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPaymentRequestMinimal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestMinimal**](../Model/NoFrixionMoneyMoovModelsPaymentRequestMinimal.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRequestReceipt()`

```php
getPaymentRequestReceipt($id)
```

Gets the PDF receipt for a payment request.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewPaymentRequests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request to download the receipt for.

try {
    $apiInstance->getPaymentRequestReceipt($id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPaymentRequestReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request to download the receipt for. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRequestResult()`

```php
getPaymentRequestResult($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestResult
```

Gets a payment request result.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the payment request to get the result for.

try {
    $result = $apiInstance->getPaymentRequestResult($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPaymentRequestResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the payment request to get the result for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestResult**](../Model/NoFrixionMoneyMoovModelsPaymentRequestResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRequestTemplate()`

```php
getPaymentRequestTemplate($merchant_id, $template_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate
```

Gets a payment request template for a merchant.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewPaymentRequestTemplates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get payment request templates for.
$template_id = 'template_id_example'; // string | The ID of the template.

try {
    $result = $apiInstance->getPaymentRequestTemplate($merchant_id, $template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPaymentRequestTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get payment request templates for. | |
| **template_id** | **string**| The ID of the template. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate**](../Model/NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRequestTemplates()`

```php
getPaymentRequestTemplates($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate[]
```

Gets a list of payment request templates for a merchant.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewPaymentRequestTemplates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get payment request templates for.

try {
    $result = $apiInstance->getPaymentRequestTemplates($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPaymentRequestTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get payment request templates for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate[]**](../Model/NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicKeyForCardPayment()`

```php
getPublicKeyForCardPayment($id): \Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPublicKey
```

Gets the public key to encrypt card details with when submitting an authorisation.

The public key will be used on the client, such as a browser, to encrypt the sensitive  card details before transmitting the authorisation request to the card processor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request the public key will be used with.

try {
    $result = $apiInstance->getPublicKeyForCardPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getPublicKeyForCardPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request the public key will be used with. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPublicKey**](../Model/NoFrixionBizBizModelsPaymentsCardPublicKey.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTokenisedCards()`

```php
getTokenisedCards($customer_email_address): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]
```

Gets a list of the tokenised cards stored for a single customer.

<b>Authorization</b>: Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_email_address = 'customer_email_address_example'; // string | The email address of the customer to retrieve the stored cards for.

try {
    $result = $apiInstance->getTokenisedCards($customer_email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getTokenisedCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_email_address** | **string**| The email address of the customer to retrieve the stored cards for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]**](../Model/NoFrixionMoneyMoovModelsCardCustomerToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTokenisedCardsForMerchant()`

```php
getTokenisedCardsForMerchant($merchant_id, $customer_email_address): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]
```

Gets a list of the tokenised cards stored for a single customer.

<b>Authorization</b>: End user token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get all customer card tokens for.
$customer_email_address = 'customer_email_address_example'; // string | The email address of the customer to retrieve the stored cards for.

try {
    $result = $apiInstance->getTokenisedCardsForMerchant($merchant_id, $customer_email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->getTokenisedCardsForMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get all customer card tokens for. | |
| **customer_email_address** | **string**| The email address of the customer to retrieve the stored cards for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCardCustomerToken[]**](../Model/NoFrixionMoneyMoovModelsCardCustomerToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundCardPayment()`

```php
refundCardPayment($id, $partial_refund_amount, $authorization_id): \Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse
```

Submits a request to refund a card payment.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request a card payment has previously been captured for.
$partial_refund_amount = 3.4; // float | The partial amount to be refunded in case of captured payment.
$authorization_id = 'authorization_id_example'; // string | The authorisation ID of the card payment to refund.

try {
    $result = $apiInstance->refundCardPayment($id, $partial_refund_amount, $authorization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->refundCardPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request a card payment has previously been captured for. | |
| **partial_refund_amount** | **float**| The partial amount to be refunded in case of captured payment. | |
| **authorization_id** | **string**| The authorisation ID of the card payment to refund. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse**](../Model/NoFrixionBizBizModelsPaymentsCardPaymentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `simulatePayByBankCallback()`

```php
simulatePayByBankCallback($id, $no_frixion_money_moov_models_payment_request_pisp_sandbox_callback): string
```

This action simulates a payment initiation callback from a bank to authorise a payment in a sandbox environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request.
$no_frixion_money_moov_models_payment_request_pisp_sandbox_callback = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestPispSandboxCallback(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestPispSandboxCallback | The callback instance with details for the sandbox simulated payment attempt.

try {
    $result = $apiInstance->simulatePayByBankCallback($id, $no_frixion_money_moov_models_payment_request_pisp_sandbox_callback);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->simulatePayByBankCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request. | |
| **no_frixion_money_moov_models_payment_request_pisp_sandbox_callback** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestPispSandboxCallback**](../Model/NoFrixionMoneyMoovModelsPaymentRequestPispSandboxCallback.md)| The callback instance with details for the sandbox simulated payment attempt. | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitCardPayment()`

```php
submitCardPayment($id, $expiry_month, $expiry_year, $jwt_token, $number_token, $cvc_token, $card_holder_first_name, $card_holder_last_name, $billing_address_line1, $billing_address_line2, $billing_address_city, $billing_address_county, $billing_address_post_code, $billing_address_country_code, $billing_phone, $billing_email, $save_card_consent, $partial_amount): \Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse
```

Submit a payment authorisation request to the card gateway.

If the payer is enrolled in the payer authentication scheme then the response to this              method can indicate that the payer needs to be sent to the issuing bank for authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request the card payment is being submitted for.
$expiry_month = 'expiry_month_example'; // string
$expiry_year = 'expiry_year_example'; // string
$jwt_token = 'jwt_token_example'; // string | The tokenised Card Number and CardVerification Number (CVN) details.  Typically generated by the CyberSource javascript library.
$number_token = 'number_token_example'; // string
$cvc_token = 'cvc_token_example'; // string
$card_holder_first_name = 'card_holder_first_name_example'; // string
$card_holder_last_name = 'card_holder_last_name_example'; // string
$billing_address_line1 = 'billing_address_line1_example'; // string
$billing_address_line2 = 'billing_address_line2_example'; // string
$billing_address_city = 'billing_address_city_example'; // string
$billing_address_county = 'billing_address_county_example'; // string
$billing_address_post_code = 'billing_address_post_code_example'; // string
$billing_address_country_code = 'billing_address_country_code_example'; // string
$billing_phone = 'billing_phone_example'; // string
$billing_email = 'billing_email_example'; // string
$save_card_consent = True; // bool
$partial_amount = 3.4; // float | Optional partial payment amount. If not specified then the full payment request  amount will be attempted.

try {
    $result = $apiInstance->submitCardPayment($id, $expiry_month, $expiry_year, $jwt_token, $number_token, $cvc_token, $card_holder_first_name, $card_holder_last_name, $billing_address_line1, $billing_address_line2, $billing_address_city, $billing_address_county, $billing_address_post_code, $billing_address_country_code, $billing_phone, $billing_email, $save_card_consent, $partial_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->submitCardPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request the card payment is being submitted for. | |
| **expiry_month** | **string**|  | |
| **expiry_year** | **string**|  | |
| **jwt_token** | **string**| The tokenised Card Number and CardVerification Number (CVN) details.  Typically generated by the CyberSource javascript library. | [optional] |
| **number_token** | **string**|  | [optional] |
| **cvc_token** | **string**|  | [optional] |
| **card_holder_first_name** | **string**|  | [optional] |
| **card_holder_last_name** | **string**|  | [optional] |
| **billing_address_line1** | **string**|  | [optional] |
| **billing_address_line2** | **string**|  | [optional] |
| **billing_address_city** | **string**|  | [optional] |
| **billing_address_county** | **string**|  | [optional] |
| **billing_address_post_code** | **string**|  | [optional] |
| **billing_address_country_code** | **string**|  | [optional] |
| **billing_phone** | **string**|  | [optional] |
| **billing_email** | **string**|  | [optional] |
| **save_card_consent** | **bool**|  | [optional] |
| **partial_amount** | **float**| Optional partial payment amount. If not specified then the full payment request  amount will be attempted. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse**](../Model/NoFrixionBizBizModelsPaymentsCardPaymentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitDirectDebitForMandate()`

```php
submitDirectDebitForMandate($id, $mandate_id, $submit_after)
```

Submits a Direct Debit payment attempt.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the payment request to pay.
$mandate_id = 'mandate_id_example'; // string | ID of the existing Direct Debit mandate record.
$submit_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Defines when this payment should be earliest submitted              to the customer's bank account. Optional.              Payments will be submitted as soon as possible, if not specified.

try {
    $apiInstance->submitDirectDebitForMandate($id, $mandate_id, $submit_after);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->submitDirectDebitForMandate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the payment request to pay. | |
| **mandate_id** | **string**| ID of the existing Direct Debit mandate record. | [optional] |
| **submit_after** | **\DateTime**| Defines when this payment should be earliest submitted              to the customer&#39;s bank account. Optional.              Payments will be submitted as soon as possible, if not specified. | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitPayByBank()`

```php
submitPayByBank($id, $provider_id, $partial_amount, $redirect_to_origin_url, $origin_url): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentInitiationResponse
```

Submits a payment initiation request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request the payment initiation is being submitted for.
$provider_id = 'provider_id_example'; // string | This is the ID of the institution (bank) that the payer ha chosen.
$partial_amount = 3.4; // float | Optional. If 0 the full amount is assumed.
$redirect_to_origin_url = 'redirect_to_origin_url_example'; // string
$origin_url = 'origin_url_example'; // string | Optional. If set should indicate the origin URL the payer is making the   payment from. If a pay by bank attempt fails and the payment request does not  have a FailureCallbackUrl set then the payer will be redirected to this URL.

try {
    $result = $apiInstance->submitPayByBank($id, $provider_id, $partial_amount, $redirect_to_origin_url, $origin_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->submitPayByBank: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request the payment initiation is being submitted for. | |
| **provider_id** | **string**| This is the ID of the institution (bank) that the payer ha chosen. | |
| **partial_amount** | **float**| Optional. If 0 the full amount is assumed. | [optional] |
| **redirect_to_origin_url** | **string**|  | [optional] |
| **origin_url** | **string**| Optional. If set should indicate the origin URL the payer is making the   payment from. If a pay by bank attempt fails and the payment request does not  have a FailureCallbackUrl set then the payer will be redirected to this URL. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentInitiationResponse**](../Model/NoFrixionMoneyMoovModelsPaymentInitiationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitTokenisedCardPayment()`

```php
submitTokenisedCardPayment($id, $tokenised_card_id, $payment_initiator, $card_security_code, $partial_amount): \Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse
```

Submits a payment request, using a tokenised card, to a payment gateway.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request the card payment is being submitted for.
$tokenised_card_id = 'tokenised_card_id_example'; // string | The ID of the tokenised card to use for the payment. The merchant needs to ensure that  the use of the tokenised card is restricted to the same customer that created it.
$payment_initiator = 'payment_initiator_example'; // string | Indicates who initiated the card token payment, customer or merchant.
$card_security_code = 'card_security_code_example'; // string | Not used for merchant initiated transactions. Optional for customer initiated transactions.  If supplied will be sent to the card processor as a check that the customer using the   tokenised card knows the card verification number.
$partial_amount = 3.4; // float | Optional partial payment amount. If not specified then the full payment request  amount will be attempted.

try {
    $result = $apiInstance->submitTokenisedCardPayment($id, $tokenised_card_id, $payment_initiator, $card_security_code, $partial_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->submitTokenisedCardPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request the card payment is being submitted for. | |
| **tokenised_card_id** | **string**| The ID of the tokenised card to use for the payment. The merchant needs to ensure that  the use of the tokenised card is restricted to the same customer that created it. | [optional] |
| **payment_initiator** | **string**| Indicates who initiated the card token payment, customer or merchant. | [optional] |
| **card_security_code** | **string**| Not used for merchant initiated transactions. Optional for customer initiated transactions.  If supplied will be sent to the card processor as a check that the customer using the   tokenised card knows the card verification number. | [optional] |
| **partial_amount** | **float**| Optional partial payment amount. If not specified then the full payment request  amount will be attempted. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse**](../Model/NoFrixionBizBizModelsPaymentsCardPaymentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentRequest()`

```php
updatePaymentRequest($id, $no_frixion_money_moov_models_payment_request_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest
```

Updates a payment request.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanUpdatePaymentRequests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request to update.
$no_frixion_money_moov_models_payment_request_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestUpdate | The payment request containing the updated details to apply.

try {
    $result = $apiInstance->updatePaymentRequest($id, $no_frixion_money_moov_models_payment_request_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->updatePaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request to update. | |
| **no_frixion_money_moov_models_payment_request_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestUpdate**](../Model/NoFrixionMoneyMoovModelsPaymentRequestUpdate.md)| The payment request containing the updated details to apply. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest**](../Model/NoFrixionMoneyMoovModelsPaymentRequest.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentRequestTemplate()`

```php
updatePaymentRequestTemplate($merchant_id, $template_id, $no_frixion_money_moov_models_payment_requests_payment_request_template_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate
```

Updates a payment request template for a merchant.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanUpdatePaymentRequestTemplates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant for the payment request template update.
$template_id = 'template_id_example'; // string | The ID of the template.
$no_frixion_money_moov_models_payment_requests_payment_request_template_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestTemplateUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestTemplateUpdate | The template to update

try {
    $result = $apiInstance->updatePaymentRequestTemplate($merchant_id, $template_id, $no_frixion_money_moov_models_payment_requests_payment_request_template_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->updatePaymentRequestTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant for the payment request template update. | |
| **template_id** | **string**| The ID of the template. | |
| **no_frixion_money_moov_models_payment_requests_payment_request_template_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestTemplateUpdate**](../Model/NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestTemplateUpdate.md)| The template to update | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate**](../Model/NoFrixionMoneyMoovModelsPaymentRequestsMerchantPaymentRequestTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidAllCardPayments()`

```php
voidAllCardPayments($id): \Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse[]
```

Submits a request to void all payments for a payment request.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request to void the payments for.

try {
    $result = $apiInstance->voidAllCardPayments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->voidAllCardPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request to void the payments for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse[]**](../Model/NoFrixionBizBizModelsPaymentsCardPaymentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidCardPayment()`

```php
voidCardPayment($id, $authorization_id): \Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse
```

Submits a request to void a card payment.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment request a card payment has previously been authorised or captured for.
$authorization_id = 'authorization_id_example'; // string | The authorisation ID of the card payment to void.

try {
    $result = $apiInstance->voidCardPayment($id, $authorization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->voidCardPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment request a card payment has previously been authorised or captured for. | |
| **authorization_id** | **string**| The authorisation ID of the card payment to void. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPaymentsCardPaymentResponse**](../Model/NoFrixionBizBizModelsPaymentsCardPaymentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

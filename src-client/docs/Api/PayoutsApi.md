# Nofrixion\Client\PayoutsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelScheduledPayout()**](PayoutsApi.md#cancelScheduledPayout) | **PUT** /api/v1/payouts/cancel/{id} | Attempts to cancel a scheduled payout. |
| [**createBatchPayout()**](PayoutsApi.md#createBatchPayout) | **POST** /api/v1/payouts/batch | Creates a new batch payout. |
| [**createPayout()**](PayoutsApi.md#createPayout) | **POST** /api/v1/payouts | Creates a new payout. |
| [**createPayouts()**](PayoutsApi.md#createPayouts) | **POST** /api/v1/payouts/batchcreate | Creates payouts. |
| [**deletePayout()**](PayoutsApi.md#deletePayout) | **DELETE** /api/v1/payouts/{id} | Deletes a payout record. |
| [**deletePayouts()**](PayoutsApi.md#deletePayouts) | **DELETE** /api/v1/payouts/batchdelete | Deletes a list of payout records. |
| [**exportPayouts()**](PayoutsApi.md#exportPayouts) | **GET** /api/v1/payouts/export | Exports a list of all payouts for a specific merchant to a CSV file. |
| [**getBatchPayout()**](PayoutsApi.md#getBatchPayout) | **GET** /api/v1/payouts/batch/{id} | Gets a list of all the payouts contained in a batch. |
| [**getPayout()**](PayoutsApi.md#getPayout) | **GET** /api/v1/payouts/{id} | Gets a single payout. |
| [**getPayoutForInvoice()**](PayoutsApi.md#getPayoutForInvoice) | **GET** /api/v1/payouts/getbyinvoiceid/{invoiceID} | Gets a payout by its invoice ID. |
| [**getPayoutMetrics()**](PayoutsApi.md#getPayoutMetrics) | **GET** /api/v1/payouts/metrics | Gets a list of all payout metrics for a specific merchant. |
| [**getPayoutProof()**](PayoutsApi.md#getPayoutProof) | **GET** /api/v1/payouts/{id}/proof | Generates a proof of payment PDF document with the details of a payout. |
| [**getPayoutStatus()**](PayoutsApi.md#getPayoutStatus) | **GET** /api/v1/payouts/status/{id} | Gets a single payout status from. |
| [**getPayoutsPaged()**](PayoutsApi.md#getPayoutsPaged) | **GET** /api/v1/payouts | Gets a list of all payouts for a specific merchant. |
| [**rejectPayout()**](PayoutsApi.md#rejectPayout) | **PUT** /api/v1/payouts/reject/{id} | Rejects the authorisation for a payout. |
| [**sendPayout()**](PayoutsApi.md#sendPayout) | **POST** /api/v1/payouts/send | Creates and submits a payout for a trusted caller. |
| [**sendToBeneficiary()**](PayoutsApi.md#sendToBeneficiary) | **POST** /api/v1/payouts/sendbeneficiary | Creates and submits a payout to a pre-authorised beneficiary. |
| [**submitBatchPayout()**](PayoutsApi.md#submitBatchPayout) | **POST** /api/v1/payouts/batch/submit/{id} | Submits a batch payout for processing. |
| [**submitPayout()**](PayoutsApi.md#submitPayout) | **POST** /api/v1/payouts/submit/{id} | Submits a payout for processing. |
| [**updatePayout()**](PayoutsApi.md#updatePayout) | **PUT** /api/v1/payouts/{id} | Updates a payout record. |


## `cancelScheduledPayout()`

```php
cancelScheduledPayout($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Attempts to cancel a scheduled payout.

If successful the payout will be reverted to a pending state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout to cancel.

try {
    $result = $apiInstance->cancelScheduledPayout($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->cancelScheduledPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout to cancel. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBatchPayout()`

```php
createBatchPayout($request_body): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBatchPayout
```

Creates a new batch payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[] | The IDs of the payout to include in the batch.

try {
    $result = $apiInstance->createBatchPayout($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->createBatchPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)| The IDs of the payout to include in the batch. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBatchPayout**](../Model/NoFrixionMoneyMoovModelsBatchPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPayout()`

```php
createPayout($no_frixion_money_moov_models_payout_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Creates a new payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_payout_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate | The object containing the details of the payout to create.

try {
    $result = $apiInstance->createPayout($no_frixion_money_moov_models_payout_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->createPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_payout_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate**](../Model/NoFrixionMoneyMoovModelsPayoutCreate.md)| The object containing the details of the payout to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPayouts()`

```php
createPayouts($no_frixion_money_moov_models_payout_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutsPayoutsCreateResponse
```

Creates payouts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_payout_create = array(new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate()); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate[] | A list of objects containing the details of the payouts to create.

try {
    $result = $apiInstance->createPayouts($no_frixion_money_moov_models_payout_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->createPayouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_payout_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate[]**](../Model/NoFrixionMoneyMoovModelsPayoutCreate.md)| A list of objects containing the details of the payouts to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutsPayoutsCreateResponse**](../Model/NoFrixionMoneyMoovModelsPayoutsPayoutsCreateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayout()`

```php
deletePayout($id)
```

Deletes a payout record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment record to delete.

try {
    $apiInstance->deletePayout($id);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->deletePayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment record to delete. | |

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

## `deletePayouts()`

```php
deletePayouts($request_body)
```

Deletes a list of payout records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[] | The IDs of the payouts to be deleted

try {
    $apiInstance->deletePayouts($request_body);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->deletePayouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)| The IDs of the payouts to be deleted | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportPayouts()`

```php
exportPayouts($merchant_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort): \SplFileObject
```

Exports a list of all payouts for a specific merchant to a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Required. The ID of the merchant to get the payouts for.
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$statuses = array('statuses_example'); // string[] | An optional status filter for the payout records.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created up until this date.
$search = 'search_example'; // string | The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information.
$currency = 'currency_example'; // string | The currency filter to apply to retrieve payouts with this currency.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payouts that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payouts that don't exceed this amount.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payouts with at least one of these tags.
$sort = 'sort_example'; // string | Optional expression to sort the order of the payouts.

try {
    $result = $apiInstance->exportPayouts($merchant_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->exportPayouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Required. The ID of the merchant to get the payouts for. | [optional] |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| An optional status filter for the payout records. | [optional] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payouts created after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payouts created up until this date. | [optional] |
| **search** | **string**| The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information. | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve payouts with this currency. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve payouts that exceed this amount. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve payouts that don&#39;t exceed this amount. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| The tag filter to apply to retrieve payouts with at least one of these tags. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the payouts. | [optional] |

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

## `getBatchPayout()`

```php
getBatchPayout($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBatchPayout
```

Gets a list of all the payouts contained in a batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the batch payout to retrieve.

try {
    $result = $apiInstance->getBatchPayout($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getBatchPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the batch payout to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBatchPayout**](../Model/NoFrixionMoneyMoovModelsBatchPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayout()`

```php
getPayout($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Gets a single payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout record to retrieve.

try {
    $result = $apiInstance->getPayout($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout record to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayoutForInvoice()`

```php
getPayoutForInvoice($invoice_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest
```

Gets a payout by its invoice ID.

Can only be called with a merchant token. The payout lookup is done by              invoice and merchant ID and relies on the merchant ID from the token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | The invoice ID of the payout to retrieve. Useful when the              payout has been created by an external application such as Xero.

try {
    $result = $apiInstance->getPayoutForInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutForInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| The invoice ID of the payout to retrieve. Useful when the              payout has been created by an external application such as Xero. | |

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

## `getPayoutMetrics()`

```php
getPayoutMetrics($merchant_id, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutMetrics
```

Gets a list of all payout metrics for a specific merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Required. The ID of the merchant to get the payout metrics for.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created after this date as metrics.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created up until this date as metrics.
$search = 'search_example'; // string | The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information as metrics.
$currency = 'currency_example'; // string | The currency filter to apply to retrieve payouts with this currency as metrics.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payouts that exceed this amount as metrics.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payouts that don't exceed this amount as metrics.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payouts with at least one of these tags as metrics.

try {
    $result = $apiInstance->getPayoutMetrics($merchant_id, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Required. The ID of the merchant to get the payout metrics for. | [optional] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payouts created after this date as metrics. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payouts created up until this date as metrics. | [optional] |
| **search** | **string**| The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information as metrics. | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve payouts with this currency as metrics. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve payouts that exceed this amount as metrics. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve payouts that don&#39;t exceed this amount as metrics. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| The tag filter to apply to retrieve payouts with at least one of these tags as metrics. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutMetrics**](../Model/NoFrixionMoneyMoovModelsPayoutMetrics.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayoutProof()`

```php
getPayoutProof($id)
```

Generates a proof of payment PDF document with the details of a payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the payout.

try {
    $apiInstance->getPayoutProof($id);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutProof: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the payout. | |

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

## `getPayoutStatus()`

```php
getPayoutStatus($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Gets a single payout status from.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout record to retrieve.

try {
    $result = $apiInstance->getPayoutStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout record to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayoutsPaged()`

```php
getPayoutsPaged($merchant_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort): \Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPayoutPageResponse
```

Gets a list of all payouts for a specific merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Required. The ID of the merchant to get the payouts for.
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$statuses = array('statuses_example'); // string[] | An optional status filter for the payout records.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created up until this date.
$search = 'search_example'; // string | The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information.
$currency = 'currency_example'; // string | The currency filter to apply to retrieve payouts with this currency.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payouts that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payouts that don't exceed this amount.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payouts with at least one of these tags.
$sort = 'sort_example'; // string | Optional expression to sort the order of the payouts.

try {
    $result = $apiInstance->getPayoutsPaged($merchant_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Required. The ID of the merchant to get the payouts for. | [optional] |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| An optional status filter for the payout records. | [optional] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payouts created after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payouts created up until this date. | [optional] |
| **search** | **string**| The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information. | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve payouts with this currency. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve payouts that exceed this amount. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve payouts that don&#39;t exceed this amount. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| The tag filter to apply to retrieve payouts with at least one of these tags. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the payouts. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPayoutPageResponse**](../Model/NoFrixionBizBizModelsPagingPayoutPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectPayout()`

```php
rejectPayout($id, $no_frixion_money_moov_models_payout_reject): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Rejects the authorisation for a payout.

If successful the payout will be set to REJECTED_APPROVAL state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout to reject.
$no_frixion_money_moov_models_payout_reject = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutReject(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutReject | Reason for rejection.

try {
    $result = $apiInstance->rejectPayout($id, $no_frixion_money_moov_models_payout_reject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->rejectPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout to reject. | |
| **no_frixion_money_moov_models_payout_reject** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutReject**](../Model/NoFrixionMoneyMoovModelsPayoutReject.md)| Reason for rejection. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPayout()`

```php
sendPayout($no_frixion_money_moov_models_payout_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Creates and submits a payout for a trusted caller.

Access to this endpoint is restricted, please contact support for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_payout_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate | The object containing the details of the payout to create and submit.

try {
    $result = $apiInstance->sendPayout($no_frixion_money_moov_models_payout_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->sendPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_payout_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate**](../Model/NoFrixionMoneyMoovModelsPayoutCreate.md)| The object containing the details of the payout to create and submit. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendToBeneficiary()`

```php
sendToBeneficiary($no_frixion_money_moov_models_payout_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Creates and submits a payout to a pre-authorised beneficiary.

Access to this endpoint is restricted to merchant tokens using a digital signature and IP address whitelist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_payout_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate | The object containing the details of the payout to create and submit. The payout              will only be accepted if the destination is set as a beneficairy ID.

try {
    $result = $apiInstance->sendToBeneficiary($no_frixion_money_moov_models_payout_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->sendToBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_payout_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate**](../Model/NoFrixionMoneyMoovModelsPayoutCreate.md)| The object containing the details of the payout to create and submit. The payout              will only be accepted if the destination is set as a beneficairy ID. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitBatchPayout()`

```php
submitBatchPayout($id)
```

Submits a batch payout for processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the batch payout to submit.

try {
    $apiInstance->submitBatchPayout($id);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->submitBatchPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the batch payout to submit. | |

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

## `submitPayout()`

```php
submitPayout($id)
```

Submits a payout for processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout to submit.

try {
    $apiInstance->submitPayout($id);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->submitPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout to submit. | |

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

## `updatePayout()`

```php
updatePayout($id, $no_frixion_money_moov_models_payout_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Updates a payout record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout to update.
$no_frixion_money_moov_models_payout_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutUpdate | The object containing the details of payout to update.

try {
    $result = $apiInstance->updatePayout($id, $no_frixion_money_moov_models_payout_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->updatePayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout to update. | |
| **no_frixion_money_moov_models_payout_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutUpdate**](../Model/NoFrixionMoneyMoovModelsPayoutUpdate.md)| The object containing the details of payout to update. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Nofrixion\Client\MandatesApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMandate()**](MandatesApi.md#createMandate) | **POST** /api/v1/mandates | Creates a Direct Debit mandate. |
| [**getMandate()**](MandatesApi.md#getMandate) | **GET** /api/v1/mandates/{id} | Gets a specific mandate&#39;s information. |
| [**getMandatesPaged()**](MandatesApi.md#getMandatesPaged) | **GET** /api/v1/mandates | Gets all mandates from a specific merchant with the supplied parameters. |


## `createMandate()`

```php
createMandate($no_frixion_money_moov_models_mandates_mandate_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMandatesMandate
```

Creates a Direct Debit mandate.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanCreateMandates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MandatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_mandates_mandate_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMandatesMandateCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMandatesMandateCreate | Mandate, customer and bank account information model.

try {
    $result = $apiInstance->createMandate($no_frixion_money_moov_models_mandates_mandate_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MandatesApi->createMandate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_mandates_mandate_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMandatesMandateCreate**](../Model/NoFrixionMoneyMoovModelsMandatesMandateCreate.md)| Mandate, customer and bank account information model. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMandatesMandate**](../Model/NoFrixionMoneyMoovModelsMandatesMandate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMandate()`

```php
getMandate($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMandatesMandate
```

Gets a specific mandate's information.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewMandates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MandatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the mandate to retrieve information from.

try {
    $result = $apiInstance->getMandate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MandatesApi->getMandate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the mandate to retrieve information from. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMandatesMandate**](../Model/NoFrixionMoneyMoovModelsMandatesMandate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMandatesPaged()`

```php
getMandatesPaged($merchant_id, $page, $size, $from_date, $to_date, $status, $search, $currency, $min_amount, $max_amount, $sort): \Nofrixion\Client\Model\NoFrixionBizBizModelsPagingMerchantDirectDebitMandatePageResponse
```

Gets all mandates from a specific merchant with the supplied parameters.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewMandates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MandatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | ID of the merchant to retrieve mandates for.
$page = 1; // int | The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned.
$size = 20; // int | The number of records to be retrieved from a page.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve mandates created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve mandates created up until this date.
$status = 'status_example'; // string | The status filter to apply to retrieve mandates with this status
$search = 'search_example'; // string | The text filter to apply to retrieve mandates with similar customer, bank account or mandate information.
$currency = 'currency_example'; // string | The currency filter to apply to retrieve mandates with this currency.
$min_amount = 3.4; // float | The amount filter to apply to retrieve mandates that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve mandates that don't exceed this amount.
$sort = 'sort_example'; // string | Optional expression to sort the order of the mandates. Example \"Amount desc,Inserted asc\".

try {
    $result = $apiInstance->getMandatesPaged($merchant_id, $page, $size, $from_date, $to_date, $status, $search, $currency, $min_amount, $max_amount, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MandatesApi->getMandatesPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| ID of the merchant to retrieve mandates for. | [optional] |
| **page** | **int**| The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned. | [optional] [default to 1] |
| **size** | **int**| The number of records to be retrieved from a page. | [optional] [default to 20] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve mandates created after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve mandates created up until this date. | [optional] |
| **status** | **string**| The status filter to apply to retrieve mandates with this status | [optional] |
| **search** | **string**| The text filter to apply to retrieve mandates with similar customer, bank account or mandate information. | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve mandates with this currency. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve mandates that exceed this amount. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve mandates that don&#39;t exceed this amount. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the mandates. Example \&quot;Amount desc,Inserted asc\&quot;. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPagingMerchantDirectDebitMandatePageResponse**](../Model/NoFrixionBizBizModelsPagingMerchantDirectDebitMandatePageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

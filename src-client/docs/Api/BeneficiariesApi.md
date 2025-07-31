# Nofrixion\Client\BeneficiariesApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authoriseBeneficiary()**](BeneficiariesApi.md#authoriseBeneficiary) | **POST** /api/v1/beneficiaries/authorise/{id} | Authorises a beneficiary. |
| [**createBeneficiary()**](BeneficiariesApi.md#createBeneficiary) | **POST** /api/v1/beneficiaries | Creates a new beneficiary. |
| [**deleteBeneficiary()**](BeneficiariesApi.md#deleteBeneficiary) | **DELETE** /api/v1/beneficiaries/{id} | Deletes a beneficiary |
| [**disableBeneficiary()**](BeneficiariesApi.md#disableBeneficiary) | **PUT** /api/v1/beneficiaries/disable/{id} | Attempts to disable a beneficiary. If successful the beneficiary will be disabled. |
| [**enableBeneficiary()**](BeneficiariesApi.md#enableBeneficiary) | **PUT** /api/v1/beneficiaries/enable/{id} | Attempts to enable a beneficiary. If successful the beneficiary will be enabled. |
| [**exportBeneficiaries()**](BeneficiariesApi.md#exportBeneficiaries) | **GET** /api/v1/beneficiaries/export | Export beneficiaries to CSV. |
| [**getBeneficiaries()**](BeneficiariesApi.md#getBeneficiaries) | **GET** /api/v1/beneficiaries | Gets a list of all beneficiaries. |
| [**getBeneficiary()**](BeneficiariesApi.md#getBeneficiary) | **GET** /api/v1/beneficiaries/{id} | Get&#39;s a beneficiary by beneficiary ID. |
| [**updateBeneficiary()**](BeneficiariesApi.md#updateBeneficiary) | **PUT** /api/v1/beneficiaries/{id} | Updates a beneficiary. |


## `authoriseBeneficiary()`

```php
authoriseBeneficiary($id)
```

Authorises a beneficiary.

<b>Authorization</b>: Strong end user token is required.  <b>User permissions required</b>: CanAuthoriseBeneficiaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the beneficiary record to authorise.

try {
    $apiInstance->authoriseBeneficiary($id);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->authoriseBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the beneficiary record to authorise. | |

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

## `createBeneficiary()`

```php
createBeneficiary($no_frixion_money_moov_models_beneficiary_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Creates a new beneficiary.

The authorisation requirements for a new beneficiary depend on each merchant's settings. By              default new beneficiaries do not require authorisation before being enabled.  <b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanCreateBeneficiaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_beneficiary_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryCreate | The beneficiary to create.

try {
    $result = $apiInstance->createBeneficiary($no_frixion_money_moov_models_beneficiary_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->createBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_beneficiary_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryCreate**](../Model/NoFrixionMoneyMoovModelsBeneficiaryCreate.md)| The beneficiary to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBeneficiary()`

```php
deleteBeneficiary($id)
```

Deletes a beneficiary

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanDeleteBeneficiaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the beneficiary to delete.

try {
    $apiInstance->deleteBeneficiary($id);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->deleteBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the beneficiary to delete. | |

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

## `disableBeneficiary()`

```php
disableBeneficiary($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Attempts to disable a beneficiary. If successful the beneficiary will be disabled.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanEditBeneficiaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the beneficiary to disable.

try {
    $result = $apiInstance->disableBeneficiary($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->disableBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the beneficiary to disable. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableBeneficiary()`

```php
enableBeneficiary($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Attempts to enable a beneficiary. If successful the beneficiary will be enabled.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanEditBeneficiaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the beneficiary to enable.

try {
    $result = $apiInstance->enableBeneficiary($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->enableBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the beneficiary to enable. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportBeneficiaries()`

```php
exportBeneficiaries($merchant_id, $page_number, $page_size, $search, $currency, $include_disabled, $sort): \SplFileObject
```

Export beneficiaries to CSV.

<b>Authorization</b>: End user token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Optional. The ID of the merchant to retrieve the beneficiaries for.               If not set beneficiaries for all merchants the user has access to will be returned
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$search = 'search_example'; // string | The text filter used to retrieve the records.
$currency = 'currency_example'; // string | The currency filter used to retrieve the records..
$include_disabled = false; // bool | If set to true will include disabled beneficiaries as well
$sort = 'sort_example'; // string | Optional expression to sort the order of the beneficiaries.

try {
    $result = $apiInstance->exportBeneficiaries($merchant_id, $page_number, $page_size, $search, $currency, $include_disabled, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->exportBeneficiaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Optional. The ID of the merchant to retrieve the beneficiaries for.               If not set beneficiaries for all merchants the user has access to will be returned | [optional] |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **search** | **string**| The text filter used to retrieve the records. | [optional] |
| **currency** | **string**| The currency filter used to retrieve the records.. | [optional] |
| **include_disabled** | **bool**| If set to true will include disabled beneficiaries as well | [optional] [default to false] |
| **sort** | **string**| Optional expression to sort the order of the beneficiaries. | [optional] |

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

## `getBeneficiaries()`

```php
getBeneficiaries($merchant_id, $page_number, $page_size, $search, $currency, $include_disabled, $sort, $source_account_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryPageResponse
```

Gets a list of all beneficiaries.

<b>Authorization</b>: End user token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Optional. The ID of the merchant to retrieve the beneficiaries for.               If not set beneficiaries for all merchants the user has access to will be returned
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$search = 'search_example'; // string | The text filter used to retrieve the records.
$currency = 'currency_example'; // string | The currency filter used to retrieve the records..
$include_disabled = false; // bool | If set to true will include disabled beneficiaries as well
$sort = 'sort_example'; // string | Optional expression to sort the order of the beneficiaries.
$source_account_id = 'source_account_id_example'; // string | Optional. The ID of the source account to filter beneficiaries by.

try {
    $result = $apiInstance->getBeneficiaries($merchant_id, $page_number, $page_size, $search, $currency, $include_disabled, $sort, $source_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->getBeneficiaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Optional. The ID of the merchant to retrieve the beneficiaries for.               If not set beneficiaries for all merchants the user has access to will be returned | [optional] |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **search** | **string**| The text filter used to retrieve the records. | [optional] |
| **currency** | **string**| The currency filter used to retrieve the records.. | [optional] |
| **include_disabled** | **bool**| If set to true will include disabled beneficiaries as well | [optional] [default to false] |
| **sort** | **string**| Optional expression to sort the order of the beneficiaries. | [optional] |
| **source_account_id** | **string**| Optional. The ID of the source account to filter beneficiaries by. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryPageResponse**](../Model/NoFrixionMoneyMoovModelsBeneficiaryPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBeneficiary()`

```php
getBeneficiary($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Get's a beneficiary by beneficiary ID.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanViewBeneficiaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The beneficiaryID of the beneficiary to retrieve.

try {
    $result = $apiInstance->getBeneficiary($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->getBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The beneficiaryID of the beneficiary to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBeneficiary()`

```php
updateBeneficiary($id, $no_frixion_money_moov_models_beneficiary_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Updates a beneficiary.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanEditBeneficiaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the beneficiary to update.
$no_frixion_money_moov_models_beneficiary_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryUpdate | The beneficiary to update

try {
    $result = $apiInstance->updateBeneficiary($id, $no_frixion_money_moov_models_beneficiary_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->updateBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the beneficiary to update. | |
| **no_frixion_money_moov_models_beneficiary_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryUpdate**](../Model/NoFrixionMoneyMoovModelsBeneficiaryUpdate.md)| The beneficiary to update | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

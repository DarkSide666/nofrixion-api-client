# Nofrixion\Client\PayrunsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archivePayrun()**](PayrunsApi.md#archivePayrun) | **DELETE** /api/v1/payruns/{id}/archive | Archives a pay run, excluding it from most actions. |
| [**cancelPayrun()**](PayrunsApi.md#cancelPayrun) | **PUT** /api/v1/payruns/{id}/cancel | Cancels the schedule of a pay run and delete&#39;s all it&#39;s payouts. |
| [**createPayrun()**](PayrunsApi.md#createPayrun) | **POST** /api/v1/payruns/{merchantID} | Create a new Payrun from a list of invoices. |
| [**deletePayrun()**](PayrunsApi.md#deletePayrun) | **DELETE** /api/v1/payruns/{id} | Deletes a pay run, along with its invoices, if it&#39;s in a Draft state. |
| [**getPayrun()**](PayrunsApi.md#getPayrun) | **GET** /api/v1/payruns/{id} | Gets a single payrun. |
| [**getPayrunsPaged()**](PayrunsApi.md#getPayrunsPaged) | **GET** /api/v1/payruns | Gets all payruns for a merchant. |
| [**rejectPayrun()**](PayrunsApi.md#rejectPayrun) | **PUT** /api/v1/payruns/{id}/reject | Rejects a payrun. |
| [**requestPayrunAuthorisation()**](PayrunsApi.md#requestPayrunAuthorisation) | **POST** /api/v1/payruns/{id}/request-authorisation | Request authorisation from authorisers for this payrun. |
| [**submitPayrun()**](PayrunsApi.md#submitPayrun) | **POST** /api/v1/payruns/{id}/submit | Submits a payrun for processing. |
| [**unarchivePayrun()**](PayrunsApi.md#unarchivePayrun) | **PUT** /api/v1/payruns/{id}/unarchive | Restores an archived pay run, making it retrievable from most actions. |
| [**updatePayrun()**](PayrunsApi.md#updatePayrun) | **PUT** /api/v1/payruns/{id} | Updates a payrun. |


## `archivePayrun()`

```php
archivePayrun($id)
```

Archives a pay run, excluding it from most actions.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanDeletePayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the pay run to archive.

try {
    $apiInstance->archivePayrun($id);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->archivePayrun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the pay run to archive. | |

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

## `cancelPayrun()`

```php
cancelPayrun($id)
```

Cancels the schedule of a pay run and delete's all it's payouts.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanEditPayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the pay run to cancel the schedule.

try {
    $apiInstance->cancelPayrun($id);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->cancelPayrun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the pay run to cancel the schedule. | |

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

## `createPayrun()`

```php
createPayrun($merchant_id, $no_frixion_money_moov_models_payrun_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrun
```

Create a new Payrun from a list of invoices.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanCreatePayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant ID to create the Payrun for.
$no_frixion_money_moov_models_payrun_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunCreate | The properties, including the list of invocies, for the PayRun.

try {
    $result = $apiInstance->createPayrun($merchant_id, $no_frixion_money_moov_models_payrun_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->createPayrun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant ID to create the Payrun for. | |
| **no_frixion_money_moov_models_payrun_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunCreate**](../Model/NoFrixionMoneyMoovModelsPayrunCreate.md)| The properties, including the list of invocies, for the PayRun. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrun**](../Model/NoFrixionMoneyMoovModelsPayrun.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayrun()`

```php
deletePayrun($id)
```

Deletes a pay run, along with its invoices, if it's in a Draft state.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanDeletePayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the pay run to delete.

try {
    $apiInstance->deletePayrun($id);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->deletePayrun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the pay run to delete. | |

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

## `getPayrun()`

```php
getPayrun($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrun
```

Gets a single payrun.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewPayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payrun record to retrieve.

try {
    $result = $apiInstance->getPayrun($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->getPayrun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payrun record to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrun**](../Model/NoFrixionMoneyMoovModelsPayrun.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrunsPaged()`

```php
getPayrunsPaged($merchant_id, $page_number, $page_size, $from_date, $to_date, $sort, $statuses, $search, $only_archived): \Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPayrunPageResponse
```

Gets all payruns for a merchant.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanViewPayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant ID to get the payruns for
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payruns created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payruns created up until this date.
$sort = 'sort_example'; // string | Optional expression to sort the order of the payruns.
$statuses = array('statuses_example'); // string[] | An optional status filter list
$search = 'search_example'; // string | The text filter to apply to retrieve payruns
$only_archived = false; // bool | Flag that indicates whether to fetch only archived payruns or not

try {
    $result = $apiInstance->getPayrunsPaged($merchant_id, $page_number, $page_size, $from_date, $to_date, $sort, $statuses, $search, $only_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->getPayrunsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant ID to get the payruns for | [optional] |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payruns created after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payruns created up until this date. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the payruns. | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| An optional status filter list | [optional] |
| **search** | **string**| The text filter to apply to retrieve payruns | [optional] |
| **only_archived** | **bool**| Flag that indicates whether to fetch only archived payruns or not | [optional] [default to false] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPayrunPageResponse**](../Model/NoFrixionBizBizModelsPagingPayrunPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectPayrun()`

```php
rejectPayrun($id, $no_frixion_money_moov_models_payrun_reject): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrun
```

Rejects a payrun.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanApprovePayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payrun to update.
$no_frixion_money_moov_models_payrun_reject = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunReject(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunReject | The object containing the details of the payrun to reject.

try {
    $result = $apiInstance->rejectPayrun($id, $no_frixion_money_moov_models_payrun_reject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->rejectPayrun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payrun to update. | |
| **no_frixion_money_moov_models_payrun_reject** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunReject**](../Model/NoFrixionMoneyMoovModelsPayrunReject.md)| The object containing the details of the payrun to reject. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrun**](../Model/NoFrixionMoneyMoovModelsPayrun.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestPayrunAuthorisation()`

```php
requestPayrunAuthorisation($id, $no_frixion_money_moov_models_payrun_authorisation)
```

Request authorisation from authorisers for this payrun.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanCreatePayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The payrun id
$no_frixion_money_moov_models_payrun_authorisation = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunAuthorisation(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunAuthorisation | The payrun authorisation request

try {
    $apiInstance->requestPayrunAuthorisation($id, $no_frixion_money_moov_models_payrun_authorisation);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->requestPayrunAuthorisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The payrun id | |
| **no_frixion_money_moov_models_payrun_authorisation** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunAuthorisation**](../Model/NoFrixionMoneyMoovModelsPayrunAuthorisation.md)| The payrun authorisation request | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitPayrun()`

```php
submitPayrun($id, $no_frixion_money_moov_models_payrun_approve)
```

Submits a payrun for processing.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanApprovePayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The payrun id
$no_frixion_money_moov_models_payrun_approve = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunApprove(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunApprove | The object containing some optional values to override the existent payrun

try {
    $apiInstance->submitPayrun($id, $no_frixion_money_moov_models_payrun_approve);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->submitPayrun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The payrun id | |
| **no_frixion_money_moov_models_payrun_approve** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunApprove**](../Model/NoFrixionMoneyMoovModelsPayrunApprove.md)| The object containing some optional values to override the existent payrun | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unarchivePayrun()`

```php
unarchivePayrun($id)
```

Restores an archived pay run, making it retrievable from most actions.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanDeletePayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the pay run to unarchive.

try {
    $apiInstance->unarchivePayrun($id);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->unarchivePayrun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the pay run to unarchive. | |

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

## `updatePayrun()`

```php
updatePayrun($id, $no_frixion_money_moov_models_payrun_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrun
```

Updates a payrun.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanEditPayruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayrunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payrun to update.
$no_frixion_money_moov_models_payrun_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunUpdate | The object containing the details of the payrun to update.

try {
    $result = $apiInstance->updatePayrun($id, $no_frixion_money_moov_models_payrun_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrunsApi->updatePayrun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payrun to update. | |
| **no_frixion_money_moov_models_payrun_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrunUpdate**](../Model/NoFrixionMoneyMoovModelsPayrunUpdate.md)| The object containing the details of the payrun to update. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayrun**](../Model/NoFrixionMoneyMoovModelsPayrun.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

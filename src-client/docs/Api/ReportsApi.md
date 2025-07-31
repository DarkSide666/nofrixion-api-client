# Nofrixion\Client\ReportsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReportResult()**](ReportsApi.md#getReportResult) | **GET** /api/v1/reports/{id}/result/{statementNumber} | Attempts to get the aggregated results of report execution. If the   report is still in progress an accepted response will be returned. |
| [**initiateReport()**](ReportsApi.md#initiateReport) | **PUT** /api/v1/reports/{id}/initiate | Initiates the execution of a merchant report. |


## `getReportResult()`

```php
getReportResult($id, $statement_number): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult
```

Attempts to get the aggregated results of report execution. If the   report is still in progress an accepted response will be returned.

<b>Authorization</b>: End user or Merchant token (IP address whitelisted) is required.  <b>User permissions required</b>: CanViewReports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the merchant report to get the result for.
$statement_number = 56; // int | Optional. If set the result for this statement number               will be returned. If not set the latest report will be returned.

try {
    $result = $apiInstance->getReportResult($id, $statement_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the merchant report to get the result for. | |
| **statement_number** | **int**| Optional. If set the result for this statement number               will be returned. If not set the latest report will be returned. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult**](../Model/NoFrixionMoneyMoovModelsReportResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateReport()`

```php
initiateReport($id)
```

Initiates the execution of a merchant report.

<b>Authorization</b>: End user or Merchant token (IP address whitelisted) is required.  <b>User permissions required</b>: CanCreateReports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the merchant report to execute.

try {
    $apiInstance->initiateReport($id);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->initiateReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the merchant report to execute. | |

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

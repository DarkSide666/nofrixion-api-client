# Nofrixion\Client\TokensApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveToken()**](TokensApi.md#archiveToken) | **DELETE** /api/v1/tokens/{id} | Archives a merchant API token. |
| [**authoriseMerchantToken()**](TokensApi.md#authoriseMerchantToken) | **POST** /api/v1/tokens/authorise/{id} | Authorises a merchant token. |
| [**createMerchantToken()**](TokensApi.md#createMerchantToken) | **POST** /api/v1/tokens | Creates a new merchant API token. |
| [**getToken()**](TokensApi.md#getToken) | **GET** /api/v1/tokens/{id} | Gets the details of a merchant API token. |
| [**updateMerchantToken()**](TokensApi.md#updateMerchantToken) | **PUT** /api/v1/tokens/{id} | Updates an existing merchant token. |


## `archiveToken()`

```php
archiveToken($id)
```

Archives a merchant API token.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanArchiveTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the token to archive.

try {
    $apiInstance->archiveToken($id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->archiveToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the token to archive. | |

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

## `authoriseMerchantToken()`

```php
authoriseMerchantToken($id)
```

Authorises a merchant token.

Authorising a merchant token results it transitioning for disabled to enabled. Until the               token is enabled it will not be able to authorise requests.  <b>Authorization</b>: Strong end user token is required.  <b>User permissions required</b>: CanAuthoriseTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the merchant token to authorise.

try {
    $apiInstance->authoriseMerchantToken($id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->authoriseMerchantToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the merchant token to authorise. | |

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

## `createMerchantToken()`

```php
createMerchantToken($no_frixion_money_moov_models_token_add): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken
```

Creates a new merchant API token.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanCreateTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_token_add = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd | The details of the merchant token to add.

try {
    $result = $apiInstance->createMerchantToken($no_frixion_money_moov_models_token_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->createMerchantToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_token_add** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd**](../Model/NoFrixionMoneyMoovModelsTokenAdd.md)| The details of the merchant token to add. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken**](../Model/NoFrixionMoneyMoovModelsMerchantToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getToken()`

```php
getToken($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken
```

Gets the details of a merchant API token.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanViewTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the merchant token.

try {
    $result = $apiInstance->getToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the merchant token. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken**](../Model/NoFrixionMoneyMoovModelsMerchantToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMerchantToken()`

```php
updateMerchantToken($id, $no_frixion_money_moov_models_token_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken
```

Updates an existing merchant token.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanCreateTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID if the token to update.
$no_frixion_money_moov_models_token_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenUpdate | The model with the updated token fields.

try {
    $result = $apiInstance->updateMerchantToken($id, $no_frixion_money_moov_models_token_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->updateMerchantToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID if the token to update. | |
| **no_frixion_money_moov_models_token_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenUpdate**](../Model/NoFrixionMoneyMoovModelsTokenUpdate.md)| The model with the updated token fields. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken**](../Model/NoFrixionMoneyMoovModelsMerchantToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

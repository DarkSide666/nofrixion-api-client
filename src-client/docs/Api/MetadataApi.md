# Nofrixion\Client\MetadataApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**problem()**](MetadataApi.md#problem) | **GET** /api/v1/metadata/problem | Returns an example problem response. |
| [**problemNotification()**](MetadataApi.md#problemNotification) | **GET** /api/v1/metadata/problemnotification | Triggers a webhook with the problem details in the payload. |
| [**version()**](MetadataApi.md#version) | **GET** /api/v1/metadata/version | Gets the current version of the MoneyMoov API. |
| [**whoAmI()**](MetadataApi.md#whoAmI) | **GET** /api/v1/metadata/whoami | Returns the profile of the requesting user. |
| [**whoAmIMerchant()**](MetadataApi.md#whoAmIMerchant) | **GET** /api/v1/metadata/whoamimerchant | Returns the name of the merchant that authentication token was issued for. |
| [**whoAmIMerchantSigned()**](MetadataApi.md#whoAmIMerchantSigned) | **GET** /api/v1/metadata/whoamimerchantsigned | Returns the name of a merchant that signed merchant token request was authenticated for. |
| [**whoAmIMerchantWhitelist()**](MetadataApi.md#whoAmIMerchantWhitelist) | **GET** /api/v1/metadata/whoamimerchantwhitelist | Returns the name of the merchant that IP address whitelisted merchants token was issued for. |
| [**whoAmITrustedApplication()**](MetadataApi.md#whoAmITrustedApplication) | **GET** /api/v1/metadata/whoamitrustedapp | Returns the name of the trusted third party application user the request was authenticated for. |


## `problem()`

```php
problem()
```

Returns an example problem response.

All problem responses from the API will follow this general format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->problem();
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->problem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `problemNotification()`

```php
problemNotification($url, $id, $secret)
```

Triggers a webhook with the problem details in the payload.

This method can be used to test receiving webhooks from the MoneyMoo API as well as   verifying the HMAC HTTP request authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = 'url_example'; // string | The URL to send the HTTP POST request to with the problem notification.
$id = 'id_example'; // string | Optional. If the id and secret are set the notification request will have the              HMAC HTTP authentication headers added.
$secret = 'secret_example'; // string | Optional. If the id and secret are set the notification request will have the              HMAC HTTP authentication headers added.

try {
    $apiInstance->problemNotification($url, $id, $secret);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->problemNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| The URL to send the HTTP POST request to with the problem notification. | [optional] |
| **id** | **string**| Optional. If the id and secret are set the notification request will have the              HMAC HTTP authentication headers added. | [optional] |
| **secret** | **string**| Optional. If the id and secret are set the notification request will have the              HMAC HTTP authentication headers added. | [optional] |

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

## `version()`

```php
version(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsNoFrixionVersion
```

Gets the current version of the MoneyMoov API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->version();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->version: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsNoFrixionVersion**](../Model/NoFrixionMoneyMoovModelsNoFrixionVersion.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `whoAmI()`

```php
whoAmI(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser
```

Returns the profile of the requesting user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->whoAmI();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->whoAmI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](../Model/NoFrixionMoneyMoovModelsUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `whoAmIMerchant()`

```php
whoAmIMerchant(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant
```

Returns the name of the merchant that authentication token was issued for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->whoAmIMerchant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->whoAmIMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant**](../Model/NoFrixionMoneyMoovModelsMerchant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `whoAmIMerchantSigned()`

```php
whoAmIMerchantSigned(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant
```

Returns the name of a merchant that signed merchant token request was authenticated for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->whoAmIMerchantSigned();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->whoAmIMerchantSigned: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant**](../Model/NoFrixionMoneyMoovModelsMerchant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `whoAmIMerchantWhitelist()`

```php
whoAmIMerchantWhitelist(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant
```

Returns the name of the merchant that IP address whitelisted merchants token was issued for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->whoAmIMerchantWhitelist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->whoAmIMerchantWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant**](../Model/NoFrixionMoneyMoovModelsMerchant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `whoAmITrustedApplication()`

```php
whoAmITrustedApplication(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser
```

Returns the name of the trusted third party application user the request was authenticated for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->whoAmITrustedApplication();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->whoAmITrustedApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](../Model/NoFrixionMoneyMoovModelsUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

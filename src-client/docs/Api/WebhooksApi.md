# Nofrixion\Client\WebhooksApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhook()**](WebhooksApi.md#createWebhook) | **POST** /api/v1/webhooks | Creates a webhook for the given merchant. |
| [**deleteWebhook()**](WebhooksApi.md#deleteWebhook) | **DELETE** /api/v1/webhooks/{id} | Deletes a webhook. |
| [**getWebhooks()**](WebhooksApi.md#getWebhooks) | **GET** /api/v1/webhooks/{merchantID} | Get all configured webhooks for a merchant. |
| [**updateWebhook()**](WebhooksApi.md#updateWebhook) | **PUT** /api/v1/webhooks/{id} | Updates a webhook for the given merchant. |


## `createWebhook()`

```php
createWebhook($no_frixion_money_moov_models_webhook_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhook
```

Creates a webhook for the given merchant.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanCreateWebhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_webhook_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhookCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhookCreate | The WebHookRequest to be created.

try {
    $result = $apiInstance->createWebhook($no_frixion_money_moov_models_webhook_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_webhook_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhookCreate**](../Model/NoFrixionMoneyMoovModelsWebhookCreate.md)| The WebHookRequest to be created. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhook**](../Model/NoFrixionMoneyMoovModelsWebhook.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($id)
```

Deletes a webhook.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanDeleteWebhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the webhook to delete.

try {
    $apiInstance->deleteWebhook($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the webhook to delete. | |

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

## `getWebhooks()`

```php
getWebhooks($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhook[]
```

Get all configured webhooks for a merchant.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanViewWebhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the webhooks for.

try {
    $result = $apiInstance->getWebhooks($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the webhooks for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhook[]**](../Model/NoFrixionMoneyMoovModelsWebhook.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($id, $no_frixion_money_moov_models_webhook_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhook
```

Updates a webhook for the given merchant.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanCreateWebhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the webhook to update.
$no_frixion_money_moov_models_webhook_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhookUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhookUpdate | The WebHookRequest to be updated.

try {
    $result = $apiInstance->updateWebhook($id, $no_frixion_money_moov_models_webhook_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the webhook to update. | |
| **no_frixion_money_moov_models_webhook_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhookUpdate**](../Model/NoFrixionMoneyMoovModelsWebhookUpdate.md)| The WebHookRequest to be updated. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhook**](../Model/NoFrixionMoneyMoovModelsWebhook.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

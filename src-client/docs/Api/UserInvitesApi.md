# Nofrixion\Client\UserInvitesApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUserInvite()**](UserInvitesApi.md#createUserInvite) | **POST** /api/v1/userinvites | Creates a new user invite and optionally sends the invitee an email with the details. |
| [**deleteUserInvite()**](UserInvitesApi.md#deleteUserInvite) | **DELETE** /api/v1/userinvites/{id} | Deletes user invite. |
| [**getUserInvite()**](UserInvitesApi.md#getUserInvite) | **GET** /api/v1/userinvites/{id} | Gets a user invite by ID. |
| [**resendUserInvite()**](UserInvitesApi.md#resendUserInvite) | **PUT** /api/v1/userinvites/{id} | Resend, or request a resend, of a user invite. |


## `createUserInvite()`

```php
createUserInvite($no_frixion_money_moov_models_user_invite_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite
```

Creates a new user invite and optionally sends the invitee an email with the details.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanEditRoles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_user_invite_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInviteCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInviteCreate | The model holding the details of the user invite to create.

try {
    $result = $apiInstance->createUserInvite($no_frixion_money_moov_models_user_invite_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->createUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_user_invite_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInviteCreate**](../Model/NoFrixionMoneyMoovModelsUserInviteCreate.md)| The model holding the details of the user invite to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite**](../Model/NoFrixionMoneyMoovModelsUserInvite.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserInvite()`

```php
deleteUserInvite($id)
```

Deletes user invite.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanEditRoles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | THe ID of the user invite to delete.

try {
    $apiInstance->deleteUserInvite($id);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->deleteUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| THe ID of the user invite to delete. | |

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

## `getUserInvite()`

```php
getUserInvite($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite
```

Gets a user invite by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user invite to retrieve.

try {
    $result = $apiInstance->getUserInvite($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->getUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user invite to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite**](../Model/NoFrixionMoneyMoovModelsUserInvite.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendUserInvite()`

```php
resendUserInvite($id)
```

Resend, or request a resend, of a user invite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user invite to resend.

try {
    $apiInstance->resendUserInvite($id);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->resendUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user invite to resend. | |

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

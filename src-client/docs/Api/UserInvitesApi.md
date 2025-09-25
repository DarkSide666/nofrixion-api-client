# Nofrixion\Client\UserInvitesApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authoriseUserInvite()**](UserInvitesApi.md#authoriseUserInvite) | **POST** /api/v1/userinvites/authorise/{id} | Authorises a user invite. |
| [**createUserInvite()**](UserInvitesApi.md#createUserInvite) | **POST** /api/v1/userinvites | Creates a new user invite and optionally sends the invitee an email with the details. |
| [**createUserInvites()**](UserInvitesApi.md#createUserInvites) | **POST** /api/v1/userinvites/batchcreate | Creates user invites in batch. |
| [**deleteUserInvite()**](UserInvitesApi.md#deleteUserInvite) | **DELETE** /api/v1/userinvites/{id} | Deletes user invite. |
| [**getUserInvite()**](UserInvitesApi.md#getUserInvite) | **GET** /api/v1/userinvites/{id} | Gets a user invite by ID. |
| [**getUserInviteDetails()**](UserInvitesApi.md#getUserInviteDetails) | **GET** /api/v1/userinvites/{id}/details | Gets a user invite detailss by ID. |
| [**resendUserInvite()**](UserInvitesApi.md#resendUserInvite) | **PUT** /api/v1/userinvites/{id} | Resend, or request a resend, of a user invite. |


## `authoriseUserInvite()`

```php
authoriseUserInvite($id)
```

Authorises a user invite.

Once a user invite is fully authorised the email will be sent to the user and the registration              link is activated.  <b>Authorization</b>: Strong end user token is required.  <b>User permissions required</b>: CanEditRoles

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
$id = 'id_example'; // string | The ID of the user invite to authorise.

try {
    $apiInstance->authoriseUserInvite($id);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->authoriseUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user invite to authorise. | |

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

## `createUserInvites()`

```php
createUserInvites($no_frixion_money_moov_models_user_invite_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovApiFeaturesUserInvitesCreateResponse
```

Creates user invites in batch.

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
$no_frixion_money_moov_models_user_invite_create = array(new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInviteCreate()); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInviteCreate[] | A list of objects containing the details of the user invites to create.

try {
    $result = $apiInstance->createUserInvites($no_frixion_money_moov_models_user_invite_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->createUserInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_user_invite_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInviteCreate[]**](../Model/NoFrixionMoneyMoovModelsUserInviteCreate.md)| A list of objects containing the details of the user invites to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovApiFeaturesUserInvitesCreateResponse**](../Model/NoFrixionMoneyMoovApiFeaturesUserInvitesCreateResponse.md)

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

## `getUserInviteDetails()`

```php
getUserInviteDetails($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite
```

Gets a user invite detailss by ID.

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
$id = 'id_example'; // string | The ID of the user invite to retrieve.

try {
    $result = $apiInstance->getUserInviteDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->getUserInviteDetails: ', $e->getMessage(), PHP_EOL;
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

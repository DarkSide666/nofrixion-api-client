# Nofrixion\Client\UserApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUser()**](UserApi.md#getUser) | **GET** /api/v1/user | Get the profile for the authenticated user. |
| [**getUsersPaged()**](UserApi.md#getUsersPaged) | **GET** /api/v1/user/{merchantID}/userspaged | Gets a paged list of users. |
| [**updateUser()**](UserApi.md#updateUser) | **PUT** /api/v1/user/{id} | Updates a user record and optionally accepts an invite to join a merchant. |


## `getUser()`

```php
getUser(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser
```

Get the profile for the authenticated user.

<b>Authorization</b>: End user token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
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

## `getUsersPaged()`

```php
getUsersPaged($merchant_id, $page_number, $page_size, $search, $sort): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserPageResponse
```

Gets a paged list of users.

<b>Authorization</b>: End user token is required.  <b>User permissions required</b>: CanViewUsers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the users for.
$page_number = 1; // int | The page number
$page_size = 20; // int | The page size
$search = 'search_example'; // string | A search filter to apply to the user list. Typically searches against first name, last name and email address.
$sort = 'sort_example'; // string | The sort expression for the result set, e.g., \"FirstName asc\".

try {
    $result = $apiInstance->getUsersPaged($merchant_id, $page_number, $page_size, $search, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsersPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the users for. | |
| **page_number** | **int**| The page number | [optional] [default to 1] |
| **page_size** | **int**| The page size | [optional] [default to 20] |
| **search** | **string**| A search filter to apply to the user list. Typically searches against first name, last name and email address. | [optional] |
| **sort** | **string**| The sort expression for the result set, e.g., \&quot;FirstName asc\&quot;. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserPageResponse**](../Model/NoFrixionMoneyMoovModelsUserPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($id, $no_frixion_money_moov_models_user_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser
```

Updates a user record and optionally accepts an invite to join a merchant.

<b>Authorization</b>: End user token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$no_frixion_money_moov_models_user_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserUpdate

try {
    $result = $apiInstance->updateUser($id, $no_frixion_money_moov_models_user_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **no_frixion_money_moov_models_user_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserUpdate**](../Model/NoFrixionMoneyMoovModelsUserUpdate.md)|  | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](../Model/NoFrixionMoneyMoovModelsUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

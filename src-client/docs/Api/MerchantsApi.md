# Nofrixion\Client\MerchantsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMerchantTag()**](MerchantsApi.md#createMerchantTag) | **POST** /api/v1/merchants/{merchantID}/tags | Adds a tag to a merchant. |
| [**createMerchantUserRole()**](MerchantsApi.md#createMerchantUserRole) | **POST** /api/v1/merchants/userroles | Assigns role to user. |
| [**deleteMerchantTag()**](MerchantsApi.md#deleteMerchantTag) | **DELETE** /api/v1/merchants/{merchantID}/tags/{tagID} | Deletes a tag from a merchant |
| [**deleteMerchantUserRole()**](MerchantsApi.md#deleteMerchantUserRole) | **DELETE** /api/v1/merchants/userroles/{id} | Deletes user role. |
| [**deleteUserFromMerchant()**](MerchantsApi.md#deleteUserFromMerchant) | **DELETE** /api/v1/merchants/{merchantId}/users/{userId} | Deletes all roles for a user in a merchant. |
| [**getAuthorisationSettings()**](MerchantsApi.md#getAuthorisationSettings) | **GET** /api/v1/merchants/{merchantID}/authorisationsettings | Gets a list of merchant authorisation settings for a merchant |
| [**getMerchant()**](MerchantsApi.md#getMerchant) | **GET** /api/v1/merchants/{merchantID} | Get&#39;s a merchant. |
| [**getMerchantAccount()**](MerchantsApi.md#getMerchantAccount) | **GET** /api/v1/merchants/{merchantID}/accounts/{accountID} | Get an account. |
| [**getMerchantAccounts()**](MerchantsApi.md#getMerchantAccounts) | **GET** /api/v1/merchants/{merchantID}/accounts | Get a list of merchant&#39;s payment accounts. |
| [**getMerchantBankSettings()**](MerchantsApi.md#getMerchantBankSettings) | **GET** /api/v1/merchants/{merchantID}/banksettings | Gets a list of the banks configured for a merchant&#39;s pay by bank requests, |
| [**getMerchantBeneficiaries()**](MerchantsApi.md#getMerchantBeneficiaries) | **GET** /api/v1/merchants/{merchantID}/beneficiaries | Gets a list of all beneficiaries. |
| [**getMerchantBeneficiary()**](MerchantsApi.md#getMerchantBeneficiary) | **GET** /api/v1/merchants/{merchantID}/beneficiaries/{id} | Get&#39;s a beneficiary by beneficiary ID. |
| [**getMerchantBeneficiaryGroups()**](MerchantsApi.md#getMerchantBeneficiaryGroups) | **GET** /api/v1/merchants/{merchantID}/beneficiarygroups | Gets a list of all beneficiary groups. |
| [**getMerchantPayoutsPaged()**](MerchantsApi.md#getMerchantPayoutsPaged) | **GET** /api/v1/merchants/{merchantID}/payouts | Gets a list of all payouts for a specific merchant. |
| [**getMerchantTags()**](MerchantsApi.md#getMerchantTags) | **GET** /api/v1/merchants/{merchantID}/tags | Get a list of merchant tags |
| [**getMerchantToken()**](MerchantsApi.md#getMerchantToken) | **GET** /api/v1/merchants/tokens/{id} | Gets the details of a merchant API token. |
| [**getMerchantTokens()**](MerchantsApi.md#getMerchantTokens) | **GET** /api/v1/merchants/{merchantID}/tokens | Gets a list of a merchant&#39;s issued API tokens. |
| [**getMerchantTransactionsPaged()**](MerchantsApi.md#getMerchantTransactionsPaged) | **GET** /api/v1/merchants/{merchantID}/transactions | Gets a list of transactions for all a merchant&#39;s accounts. |
| [**getMerchantUserInvites()**](MerchantsApi.md#getMerchantUserInvites) | **GET** /api/v1/merchants/{merchantID}/userinvites | Gets user invites associated with merchant. |
| [**getMerchantUserRoles()**](MerchantsApi.md#getMerchantUserRoles) | **GET** /api/v1/merchants/{merchantID}/userroles | Gets user roles associated with merchant. |
| [**getMerchantUsers()**](MerchantsApi.md#getMerchantUsers) | **GET** /api/v1/merchants/{merchantID}/users | Gets all users including invitees for a merchant. |
| [**getMerchantWebhooks()**](MerchantsApi.md#getMerchantWebhooks) | **GET** /api/v1/merchants/{merchantID}/webhooks | Get all configured webhooks for a merchant. |
| [**getMerchants()**](MerchantsApi.md#getMerchants) | **GET** /api/v1/merchants | Get&#39;s a list of merchants the caller has access to. |
| [**getMerchantsPaged()**](MerchantsApi.md#getMerchantsPaged) | **GET** /api/v1/merchants/paged | Get a paged list of all the merchants the caller has access to. |
| [**suspendMerchant()**](MerchantsApi.md#suspendMerchant) | **PUT** /api/v1/merchants/{merchantId}/suspend | Suspends a merchant |


## `createMerchantTag()`

```php
createMerchantTag($merchant_id, $no_frixion_money_moov_models_tag): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag
```

Adds a tag to a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$no_frixion_money_moov_models_tag = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag | The tag to add

try {
    $result = $apiInstance->createMerchantTag($merchant_id, $no_frixion_money_moov_models_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->createMerchantTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **no_frixion_money_moov_models_tag** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag**](../Model/NoFrixionMoneyMoovModelsTag.md)| The tag to add | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag**](../Model/NoFrixionMoneyMoovModelsTag.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMerchantUserRole()`

```php
createMerchantUserRole($no_frixion_money_moov_models_user_role_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserRole
```

Assigns role to user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_user_role_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserRoleCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserRoleCreate

try {
    $result = $apiInstance->createMerchantUserRole($no_frixion_money_moov_models_user_role_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->createMerchantUserRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_user_role_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserRoleCreate**](../Model/NoFrixionMoneyMoovModelsUserRoleCreate.md)|  | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserRole**](../Model/NoFrixionMoneyMoovModelsUserRole.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMerchantTag()`

```php
deleteMerchantTag($merchant_id, $tag_id)
```

Deletes a tag from a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$tag_id = 'tag_id_example'; // string | The tag id

try {
    $apiInstance->deleteMerchantTag($merchant_id, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->deleteMerchantTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **tag_id** | **string**| The tag id | |

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

## `deleteMerchantUserRole()`

```php
deleteMerchantUserRole($id)
```

Deletes user role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User Role Id

try {
    $apiInstance->deleteMerchantUserRole($id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->deleteMerchantUserRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User Role Id | |

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

## `deleteUserFromMerchant()`

```php
deleteUserFromMerchant($merchant_id, $user_id)
```

Deletes all roles for a user in a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$user_id = 'user_id_example'; // string | The user id

try {
    $apiInstance->deleteUserFromMerchant($merchant_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->deleteUserFromMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **user_id** | **string**| The user id | |

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

## `getAuthorisationSettings()`

```php
getAuthorisationSettings($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAuthorisationSettingsMerchantAuthorisationSetting[]
```

Gets a list of merchant authorisation settings for a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id

try {
    $result = $apiInstance->getAuthorisationSettings($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getAuthorisationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAuthorisationSettingsMerchantAuthorisationSetting[]**](../Model/NoFrixionMoneyMoovModelsAuthorisationSettingsMerchantAuthorisationSetting.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchant()`

```php
getMerchant($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant
```

Get's a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string

try {
    $result = $apiInstance->getMerchant($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**|  | |

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

## `getMerchantAccount()`

```php
getMerchantAccount($merchant_id, $account_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount
```

Get an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchantID.
$account_id = 'account_id_example'; // string | The accountID of the account to retrieve.

try {
    $result = $apiInstance->getMerchantAccount($merchant_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchantID. | |
| **account_id** | **string**| The accountID of the account to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount**](../Model/NoFrixionMoneyMoovModelsPaymentAccount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantAccounts()`

```php
getMerchantAccounts($merchant_id, $connected_accounts)
```

Get a list of merchant's payment accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the payment accounts for.
$connected_accounts = false; // bool | Optional include connected accounts along with payment accounts.

try {
    $apiInstance->getMerchantAccounts($merchant_id, $connected_accounts);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the payment accounts for. | |
| **connected_accounts** | **bool**| Optional include connected accounts along with payment accounts. | [optional] [default to false] |

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

## `getMerchantBankSettings()`

```php
getMerchantBankSettings($merchant_id, $currency, $country_code): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantPayByBankSettings
```

Gets a list of the banks configured for a merchant's pay by bank requests,

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | ID of the merchant.
$currency = 'currency_example'; // string | Optional. The bank currency.
$country_code = 'country_code_example'; // string | Optional. Country code for country specific banks.

try {
    $result = $apiInstance->getMerchantBankSettings($merchant_id, $currency, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantBankSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| ID of the merchant. | |
| **currency** | **string**| Optional. The bank currency. | [optional] |
| **country_code** | **string**| Optional. Country code for country specific banks. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantPayByBankSettings**](../Model/NoFrixionMoneyMoovModelsMerchantPayByBankSettings.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantBeneficiaries()`

```php
getMerchantBeneficiaries($merchant_id, $page_number, $page_size, $search, $currency, $include_disabled, $sort)
```

Gets a list of all beneficiaries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the beneficiaries for.
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$search = 'search_example'; // string | The text filter used to retrieve the records..
$currency = 'currency_example'; // string | The currency filter used to retrieve the records..
$include_disabled = false; // bool | If set to true will include disabled beneficiaries as well
$sort = 'sort_example'; // string | Optional expression to sort the order of the beneficiaries.

try {
    $apiInstance->getMerchantBeneficiaries($merchant_id, $page_number, $page_size, $search, $currency, $include_disabled, $sort);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantBeneficiaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the beneficiaries for. | |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **search** | **string**| The text filter used to retrieve the records.. | [optional] |
| **currency** | **string**| The currency filter used to retrieve the records.. | [optional] |
| **include_disabled** | **bool**| If set to true will include disabled beneficiaries as well | [optional] [default to false] |
| **sort** | **string**| Optional expression to sort the order of the beneficiaries. | [optional] |

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

## `getMerchantBeneficiary()`

```php
getMerchantBeneficiary($merchant_id, $id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Get's a beneficiary by beneficiary ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the beneficiary for.
$id = 'id_example'; // string | The beneficiaryID of the beneficiary to retrieve.

try {
    $result = $apiInstance->getMerchantBeneficiary($merchant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the beneficiary for. | |
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

## `getMerchantBeneficiaryGroups()`

```php
getMerchantBeneficiaryGroups($merchant_id, $page_number, $page_size): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryGroupPageResponse
```

Gets a list of all beneficiary groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the beneficiary groups for.
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.

try {
    $result = $apiInstance->getMerchantBeneficiaryGroups($merchant_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantBeneficiaryGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the beneficiary groups for. | |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryGroupPageResponse**](../Model/NoFrixionMoneyMoovModelsBeneficiaryGroupPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantPayoutsPaged()`

```php
getMerchantPayoutsPaged($merchant_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort)
```

Gets a list of all payouts for a specific merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Required. The ID of the merchant to get the payouts for.
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$statuses = array('statuses_example'); // string[] | An optional status filter for the payout records.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created up until this date.
$search = 'search_example'; // string | The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information.
$currency = 'currency_example'; // string | The currency filter to apply to retrieve payouts with this currency.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payouts that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payouts that don't exceed this amount.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payouts with at least one of these tags.
$sort = 'sort_example'; // string | Optional expression to sort the order of the payouts.

try {
    $apiInstance->getMerchantPayoutsPaged($merchant_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantPayoutsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Required. The ID of the merchant to get the payouts for. | |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| An optional status filter for the payout records. | [optional] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payouts created after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payouts created up until this date. | [optional] |
| **search** | **string**| The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information. | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve payouts with this currency. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve payouts that exceed this amount. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve payouts that don&#39;t exceed this amount. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| The tag filter to apply to retrieve payouts with at least one of these tags. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the payouts. | [optional] |

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

## `getMerchantTags()`

```php
getMerchantTags($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag[]
```

Get a list of merchant tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id

try {
    $result = $apiInstance->getMerchantTags($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag[]**](../Model/NoFrixionMoneyMoovModelsTag.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantToken()`

```php
getMerchantToken($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken
```

Gets the details of a merchant API token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the merchant token to delete.

try {
    $result = $apiInstance->getMerchantToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the merchant token to delete. | |

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

## `getMerchantTokens()`

```php
getMerchantTokens($merchant_id, $page_number, $page_size): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantTokenPageResponse
```

Gets a list of a merchant's issued API tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the tokens for.
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.

try {
    $result = $apiInstance->getMerchantTokens($merchant_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the tokens for. | |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantTokenPageResponse**](../Model/NoFrixionMoneyMoovModelsMerchantTokenPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantTransactionsPaged()`

```php
getMerchantTransactionsPaged($merchant_id, $page_number, $page_size, $from_date, $to_date): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransactionPageResponse
```

Gets a list of transactions for all a merchant's accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get transactions for.
$page_number = 56; // int | The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned.
$page_size = 56; // int | The number of records to be retrieved from a page.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve transactions added after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve transactions added up until this date.

try {
    $result = $apiInstance->getMerchantTransactionsPaged($merchant_id, $page_number, $page_size, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantTransactionsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get transactions for. | |
| **page_number** | **int**| The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve transactions added after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve transactions added up until this date. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransactionPageResponse**](../Model/NoFrixionMoneyMoovModelsTransactionPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantUserInvites()`

```php
getMerchantUserInvites($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite[]
```

Gets user invites associated with merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the beneficiaries for.

try {
    $result = $apiInstance->getMerchantUserInvites($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantUserInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the beneficiaries for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite[]**](../Model/NoFrixionMoneyMoovModelsUserInvite.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantUserRoles()`

```php
getMerchantUserRoles($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserRole[]
```

Gets user roles associated with merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the user roles for.

try {
    $result = $apiInstance->getMerchantUserRoles($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantUserRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the user roles for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserRole[]**](../Model/NoFrixionMoneyMoovModelsUserRole.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantUsers()`

```php
getMerchantUsers($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser[]
```

Gets all users including invitees for a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the user roles for.

try {
    $result = $apiInstance->getMerchantUsers($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the user roles for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser[]**](../Model/NoFrixionMoneyMoovModelsUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantWebhooks()`

```php
getMerchantWebhooks($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsWebhook[]
```

Get all configured webhooks for a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the webhooks for.

try {
    $result = $apiInstance->getMerchantWebhooks($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantWebhooks: ', $e->getMessage(), PHP_EOL;
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

## `getMerchants()`

```php
getMerchants(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant[]
```

Get's a list of merchants the caller has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMerchants();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant[]**](../Model/NoFrixionMoneyMoovModelsMerchant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantsPaged()`

```php
getMerchantsPaged($page_number, $page_size, $search, $sort): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantPageResponse
```

Get a paged list of all the merchants the caller has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 1; // int | Optional. The page number to retrieve.
$page_size = 10; // int | Optional. The number of merchants per page.
$search = 'search_example'; // string | The text filter to apply to retrieve merchants with a similar name, ID etc.
$sort = 'sort_example'; // string | Optional expression to sort the order of the merchants. Example \"Name desc,Inserted asc\".

try {
    $result = $apiInstance->getMerchantsPaged($page_number, $page_size, $search, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_number** | **int**| Optional. The page number to retrieve. | [optional] [default to 1] |
| **page_size** | **int**| Optional. The number of merchants per page. | [optional] [default to 10] |
| **search** | **string**| The text filter to apply to retrieve merchants with a similar name, ID etc. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the merchants. Example \&quot;Name desc,Inserted asc\&quot;. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantPageResponse**](../Model/NoFrixionMoneyMoovModelsMerchantPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suspendMerchant()`

```php
suspendMerchant($merchant_id, $no_frixion_money_moov_models_merchant_suspend)
```

Suspends a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$no_frixion_money_moov_models_merchant_suspend = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantSuspend(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantSuspend | The suspension details

try {
    $apiInstance->suspendMerchant($merchant_id, $no_frixion_money_moov_models_merchant_suspend);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->suspendMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **no_frixion_money_moov_models_merchant_suspend** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantSuspend**](../Model/NoFrixionMoneyMoovModelsMerchantSuspend.md)| The suspension details | [optional] |

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

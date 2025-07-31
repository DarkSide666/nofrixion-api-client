# Nofrixion\Client\OpenBankingApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConsent()**](OpenBankingApi.md#createConsent) | **POST** /api/v1/openbanking/consents | Creates a consent thats used to initiate an authorisation to a financial institution. |
| [**deleteAllConsents()**](OpenBankingApi.md#deleteAllConsents) | **DELETE** /api/v1/openbanking/consents/{merchantID}/{email} | Delete all the open banking consents for a single user. |
| [**deleteConnectedAccount()**](OpenBankingApi.md#deleteConnectedAccount) | **DELETE** /api/v1/openbanking/account/{accountID} | Deletes the specified connected account and all associated transactions. |
| [**deleteConsent()**](OpenBankingApi.md#deleteConsent) | **DELETE** /api/v1/openbanking/consents/{id} | Deletes a single open banking consent. |
| [**getConnectedAccountTransactions()**](OpenBankingApi.md#getConnectedAccountTransactions) | **GET** /api/v1/openbanking/transactions/{id}/{accountID} | Retrieves transactions from financial institution. |
| [**getConnectedAccounts()**](OpenBankingApi.md#getConnectedAccounts) | **GET** /api/v1/openbanking/accounts/{id} | Retrieves list of accounts from financial institution. |
| [**getConsent()**](OpenBankingApi.md#getConsent) | **GET** /api/v1/openbanking/consents/{id} | Retrieve a single open banking consent. |
| [**getConsents()**](OpenBankingApi.md#getConsents) | **GET** /api/v1/openbanking/consents/{merchantID}/{email} | Retrieve all the open banking consents for a single user. |
| [**reauthoriseConsent()**](OpenBankingApi.md#reauthoriseConsent) | **PATCH** /api/v1/openbanking/consents/{id} | Creates a new authorisation to a financial institution based on a consent that has   already been authorised. |
| [**synchroniseConnectedAccount()**](OpenBankingApi.md#synchroniseConnectedAccount) | **POST** /api/v1/openbanking/account/{accountID}/synchronise | Attempts to synchronise the balance and transactions of a connected account. |


## `createConsent()`

```php
createConsent($no_frixion_money_moov_models_open_banking_consent_request): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentResponse
```

Creates a consent thats used to initiate an authorisation to a financial institution.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanConnectAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_open_banking_consent_request = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentRequest(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentRequest | The fields required to request a new consent. The email address must belong              to the user who will be authorising the consent.

try {
    $result = $apiInstance->createConsent($no_frixion_money_moov_models_open_banking_consent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->createConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_open_banking_consent_request** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentRequest**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsentRequest.md)| The fields required to request a new consent. The email address must belong              to the user who will be authorising the consent. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentResponse**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllConsents()`

```php
deleteAllConsents($merchant_id, $email)
```

Delete all the open banking consents for a single user.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanConnectAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to delete the consents for.
$email = 'email_example'; // string | The email address of the end user to delete the consents for.

try {
    $apiInstance->deleteAllConsents($merchant_id, $email);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->deleteAllConsents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to delete the consents for. | |
| **email** | **string**| The email address of the end user to delete the consents for. | |

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

## `deleteConnectedAccount()`

```php
deleteConnectedAccount($account_id)
```

Deletes the specified connected account and all associated transactions.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the connected account.

try {
    $apiInstance->deleteConnectedAccount($account_id);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->deleteConnectedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the connected account. | |

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

## `deleteConsent()`

```php
deleteConsent($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent
```

Deletes a single open banking consent.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanConnectAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the consent to delete.

try {
    $result = $apiInstance->deleteConsent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->deleteConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the consent to delete. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsent.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectedAccountTransactions()`

```php
getConnectedAccountTransactions($id, $account_id, $offset, $limit, $transaction_from, $transaction_to, $sort_inserted_ascending): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingTransaction[]
```

Retrieves transactions from financial institution.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanConnectAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ConsentTokenID is the reference id to the token.
$account_id = 'account_id_example'; // string | The id of the account where transactions are retrieved.
$offset = 56; // int | Optional, offset the transactions by offset number.
$limit = 56; // int | Optional, limit per amount of transactions.
$transaction_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, the date filter to apply to retrieve transactions created after this date.
$transaction_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, the date filter to apply to retrieve transactions created up until this date.
$sort_inserted_ascending = True; // bool | Default sort order is inserted descending (latest first). Set to true to sort by               inserted ascending (earliest first).

try {
    $result = $apiInstance->getConnectedAccountTransactions($id, $account_id, $offset, $limit, $transaction_from, $transaction_to, $sort_inserted_ascending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->getConnectedAccountTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ConsentTokenID is the reference id to the token. | |
| **account_id** | **string**| The id of the account where transactions are retrieved. | |
| **offset** | **int**| Optional, offset the transactions by offset number. | [optional] |
| **limit** | **int**| Optional, limit per amount of transactions. | [optional] |
| **transaction_from** | **\DateTime**| Optional, the date filter to apply to retrieve transactions created after this date. | [optional] |
| **transaction_to** | **\DateTime**| Optional, the date filter to apply to retrieve transactions created up until this date. | [optional] |
| **sort_inserted_ascending** | **bool**| Default sort order is inserted descending (latest first). Set to true to sort by               inserted ascending (earliest first). | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingTransaction[]**](../Model/NoFrixionMoneyMoovModelsOpenBankingTransaction.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectedAccounts()`

```php
getConnectedAccounts($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAccount[]
```

Retrieves list of accounts from financial institution.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanConnectAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ConsentTokenID is the reference id to the token.

try {
    $result = $apiInstance->getConnectedAccounts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->getConnectedAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ConsentTokenID is the reference id to the token. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAccount[]**](../Model/NoFrixionMoneyMoovModelsOpenBankingAccount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsent()`

```php
getConsent($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent
```

Retrieve a single open banking consent.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanConnectAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the consent to retrieve.

try {
    $result = $apiInstance->getConsent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->getConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the consent to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsent.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsents()`

```php
getConsents($merchant_id, $email): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent[]
```

Retrieve all the open banking consents for a single user.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanConnectAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the consents for.
$email = 'email_example'; // string | The email address of the end user to get the consents for.

try {
    $result = $apiInstance->getConsents($merchant_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->getConsents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the consents for. | |
| **email** | **string**| The email address of the end user to get the consents for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent[]**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsent.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reauthoriseConsent()`

```php
reauthoriseConsent($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentResponse
```

Creates a new authorisation to a financial institution based on a consent that has   already been authorised.

<b>Authorization</b>: End user or Merchant token is required.  <b>User permissions required</b>: CanConnectAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the consent to base the new authorisation on.

try {
    $result = $apiInstance->reauthoriseConsent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->reauthoriseConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the consent to base the new authorisation on. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentResponse**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `synchroniseConnectedAccount()`

```php
synchroniseConnectedAccount($account_id)
```

Attempts to synchronise the balance and transactions of a connected account.

<b>Authorization</b>: End user or Merchant token is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the connected account.

try {
    $apiInstance->synchroniseConnectedAccount($account_id);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->synchroniseConnectedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the connected account. | |

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

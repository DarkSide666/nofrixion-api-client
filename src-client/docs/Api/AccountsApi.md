# Nofrixion\Client\AccountsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveAccount()**](AccountsApi.md#archiveAccount) | **DELETE** /api/v1/accounts/archive/{id} | Sets the specified account as archived. |
| [**clearAccountStatements()**](AccountsApi.md#clearAccountStatements) | **DELETE** /api/v1/accounts/statements | Clears the cached user statements for a user. |
| [**createAccount()**](AccountsApi.md#createAccount) | **POST** /api/v1/accounts | Creates a new merchant payment account. |
| [**generateAccountStatement()**](AccountsApi.md#generateAccountStatement) | **POST** /api/v1/accounts/{accountID}/statements | Sends a message to the transaction statement queue to generate a statement with the supplied parameters. |
| [**getAccount()**](AccountsApi.md#getAccount) | **GET** /api/v1/accounts/{accountID} | Get an account. |
| [**getAccountPayouts()**](AccountsApi.md#getAccountPayouts) | **GET** /api/v1/accounts/{accountID}/payouts | Gets a list of all payouts for a specific account. |
| [**getAccountStatement()**](AccountsApi.md#getAccountStatement) | **GET** /api/v1/accounts/{accountID}/statements/{id} | Gets the specified statement from the user&#39;s cache. |
| [**getAccountTransactionsPaged()**](AccountsApi.md#getAccountTransactionsPaged) | **GET** /api/v1/accounts/{accountID}/transactions | Get a list of the transactions for a single payment account. |
| [**getAccounts()**](AccountsApi.md#getAccounts) | **GET** /api/v1/accounts | Get a list of all payment accounts the user has access to. |
| [**getAccountsPaged()**](AccountsApi.md#getAccountsPaged) | **GET** /api/v1/accounts/paged | Get a paged list of all payment accounts the user has access to for a specific merchant. |
| [**getAllAccountStatements()**](AccountsApi.md#getAllAccountStatements) | **GET** /api/v1/accounts/statements | Gets all active statement generation requests for the user. |
| [**getTransactionForAccount()**](AccountsApi.md#getTransactionForAccount) | **GET** /api/v1/accounts/{accountID}/transactions/{id} | Get a transaction. |
| [**topupAccount()**](AccountsApi.md#topupAccount) | **PUT** /api/v1/accounts/{accountID}/topup/{amount} | SANDBOX ONLY. Top-ups a payment account with the amount provided. |
| [**unarchiveAccount()**](AccountsApi.md#unarchiveAccount) | **PUT** /api/v1/accounts/unarchive/{id} | Sets the specified account as unarchived / active. |
| [**updateAccount()**](AccountsApi.md#updateAccount) | **PUT** /api/v1/accounts/{id} | Updates an account record. |


## `archiveAccount()`

```php
archiveAccount($id)
```

Sets the specified account as archived.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the account to archive.

try {
    $apiInstance->archiveAccount($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->archiveAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the account to archive. | |

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

## `clearAccountStatements()`

```php
clearAccountStatements()
```

Clears the cached user statements for a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->clearAccountStatements();
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->clearAccountStatements: ', $e->getMessage(), PHP_EOL;
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

## `createAccount()`

```php
createAccount($no_frixion_money_moov_models_payment_account_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount
```

Creates a new merchant payment account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_payment_account_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccountCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccountCreate | The details of the payment account to create.

try {
    $result = $apiInstance->createAccount($no_frixion_money_moov_models_payment_account_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_payment_account_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccountCreate**](../Model/NoFrixionMoneyMoovModelsPaymentAccountCreate.md)| The details of the payment account to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount**](../Model/NoFrixionMoneyMoovModelsPaymentAccount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateAccountStatement()`

```php
generateAccountStatement($account_id, $no_frixion_money_moov_models_generate_statement_request)
```

Sends a message to the transaction statement queue to generate a statement with the supplied parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account id
$no_frixion_money_moov_models_generate_statement_request = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsGenerateStatementRequest(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsGenerateStatementRequest | Request object containing the parameters for the statement generation.

try {
    $apiInstance->generateAccountStatement($account_id, $no_frixion_money_moov_models_generate_statement_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->generateAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account id | |
| **no_frixion_money_moov_models_generate_statement_request** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsGenerateStatementRequest**](../Model/NoFrixionMoneyMoovModelsGenerateStatementRequest.md)| Request object containing the parameters for the statement generation. | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($account_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount
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


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The accountID of the account to retrieve.

try {
    $result = $apiInstance->getAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getAccountPayouts()`

```php
getAccountPayouts($account_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort): \Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPayoutPageResponse
```

Gets a list of all payouts for a specific account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Required. The ID of the account to get the payouts for.
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
    $result = $apiInstance->getAccountPayouts($account_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountPayouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Required. The ID of the account to get the payouts for. | |
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

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPayoutPageResponse**](../Model/NoFrixionBizBizModelsPagingPayoutPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountStatement()`

```php
getAccountStatement($account_id, $id)
```

Gets the specified statement from the user's cache.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account id
$id = 'id_example'; // string | ID of the requested statement.

try {
    $apiInstance->getAccountStatement($account_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account id | |
| **id** | **string**| ID of the requested statement. | |

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

## `getAccountTransactionsPaged()`

```php
getAccountTransactionsPaged($account_id, $from_date, $page_number, $page_size, $to_date, $credit_type, $search, $sort): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransactionPageResponse
```

Get a list of the transactions for a single payment account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the account to retrieve transactions for.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to retrieve transactions from.
$page_number = 56; // int | The page number to retrieve.
$page_size = 20; // int | The number of transactions per page.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to retrieve transactions from.
$credit_type = 'credit_type_example'; // string | The type of transactions to retrieve from.
$search = 'search_example'; // string | The text filter to apply to retrieve transactions with a similar title, description, merchant name.
$sort = 'sort_example'; // string | Optional expression to sort the order of the transactions. Example \"Amount desc,Inserted asc\".

try {
    $result = $apiInstance->getAccountTransactionsPaged($account_id, $from_date, $page_number, $page_size, $to_date, $credit_type, $search, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountTransactionsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the account to retrieve transactions for. | |
| **from_date** | **\DateTime**| The start date to retrieve transactions from. | [optional] |
| **page_number** | **int**| The page number to retrieve. | [optional] |
| **page_size** | **int**| The number of transactions per page. | [optional] [default to 20] |
| **to_date** | **\DateTime**| The end date to retrieve transactions from. | [optional] |
| **credit_type** | **string**| The type of transactions to retrieve from. | [optional] |
| **search** | **string**| The text filter to apply to retrieve transactions with a similar title, description, merchant name. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the transactions. Example \&quot;Amount desc,Inserted asc\&quot;. | [optional] |

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

## `getAccounts()`

```php
getAccounts($merchant_id, $connected_accounts, $only_connect_accounts): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount[]
```

Get a list of all payment accounts the user has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchantID of the accounts to retrieve.
$connected_accounts = false; // bool | Optional include connected accounts along with payment accounts.
$only_connect_accounts = false; // bool | Only return connected accounts

try {
    $result = $apiInstance->getAccounts($merchant_id, $connected_accounts, $only_connect_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchantID of the accounts to retrieve. | [optional] |
| **connected_accounts** | **bool**| Optional include connected accounts along with payment accounts. | [optional] [default to false] |
| **only_connect_accounts** | **bool**| Only return connected accounts | [optional] [default to false] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount[]**](../Model/NoFrixionMoneyMoovModelsPaymentAccount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountsPaged()`

```php
getAccountsPaged($merchant_id, $connected_accounts, $page_number, $page_size, $currency, $search, $sort, $only_connect_accounts, $only_archived): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccountPageResponse
```

Get a paged list of all payment accounts the user has access to for a specific merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchantID of the accounts to retrieve.
$connected_accounts = false; // bool | Optional include connected accounts along with payment accounts.
$page_number = 56; // int | Optional. The page number to retrieve.
$page_size = 56; // int | Optional. The number of accounts per page.
$currency = 'currency_example'; // string | Optional. If specified will only return accounts for this currency.
$search = 'search_example'; // string | The text filter to apply to retrieve accounts with a similar account name, IBAN etc.
$sort = 'sort_example'; // string | Optional expression to sort the order of the accounts. Example \"AvailableBalance desc,Inserted asc\".
$only_connect_accounts = false; // bool | Only return connected accounts
$only_archived = false; // bool | Flag that indicates whether to fetch only archived accounts or not.

try {
    $result = $apiInstance->getAccountsPaged($merchant_id, $connected_accounts, $page_number, $page_size, $currency, $search, $sort, $only_connect_accounts, $only_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchantID of the accounts to retrieve. | [optional] |
| **connected_accounts** | **bool**| Optional include connected accounts along with payment accounts. | [optional] [default to false] |
| **page_number** | **int**| Optional. The page number to retrieve. | [optional] |
| **page_size** | **int**| Optional. The number of accounts per page. | [optional] |
| **currency** | **string**| Optional. If specified will only return accounts for this currency. | [optional] |
| **search** | **string**| The text filter to apply to retrieve accounts with a similar account name, IBAN etc. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the accounts. Example \&quot;AvailableBalance desc,Inserted asc\&quot;. | [optional] |
| **only_connect_accounts** | **bool**| Only return connected accounts | [optional] [default to false] |
| **only_archived** | **bool**| Flag that indicates whether to fetch only archived accounts or not. | [optional] [default to false] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccountPageResponse**](../Model/NoFrixionMoneyMoovModelsPaymentAccountPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountStatements()`

```php
getAllAccountStatements()
```

Gets all active statement generation requests for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getAllAccountStatements();
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAllAccountStatements: ', $e->getMessage(), PHP_EOL;
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

## `getTransactionForAccount()`

```php
getTransactionForAccount($account_id, $id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransaction
```

Get a transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the account to retrieve transactions for.
$id = 'id_example'; // string | The transaction ID

try {
    $result = $apiInstance->getTransactionForAccount($account_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getTransactionForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the account to retrieve transactions for. | |
| **id** | **string**| The transaction ID | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransaction**](../Model/NoFrixionMoneyMoovModelsTransaction.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topupAccount()`

```php
topupAccount($account_id, $amount)
```

SANDBOX ONLY. Top-ups a payment account with the amount provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the payment account.
$amount = 3.4; // float | The amount to top-up on the payment account.

try {
    $apiInstance->topupAccount($account_id, $amount);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->topupAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the payment account. | |
| **amount** | **float**| The amount to top-up on the payment account. | |

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

## `unarchiveAccount()`

```php
unarchiveAccount($id)
```

Sets the specified account as unarchived / active.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the account to unarchive.

try {
    $apiInstance->unarchiveAccount($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->unarchiveAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the account to unarchive. | |

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

## `updateAccount()`

```php
updateAccount($id, $no_frixion_money_moov_models_account_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount
```

Updates an account record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the account to update.
$no_frixion_money_moov_models_account_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAccountUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAccountUpdate | The object containing the details of account to update (only name is editable).

try {
    $result = $apiInstance->updateAccount($id, $no_frixion_money_moov_models_account_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the account to update. | |
| **no_frixion_money_moov_models_account_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAccountUpdate**](../Model/NoFrixionMoneyMoovModelsAccountUpdate.md)| The object containing the details of account to update (only name is editable). | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount**](../Model/NoFrixionMoneyMoovModelsPaymentAccount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

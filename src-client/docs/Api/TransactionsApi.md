# Nofrixion\Client\TransactionsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTags()**](TransactionsApi.md#addTags) | **POST** /api/v1/transactions/{transactionID}/tags | Adds merchant tags to a transaction. |
| [**getTransactionProof()**](TransactionsApi.md#getTransactionProof) | **GET** /api/v1/transactions/{id}/proof | Generates a proof of payment PDF document with the details of a transaction. |
| [**getTransactionsForAccountPaged()**](TransactionsApi.md#getTransactionsForAccountPaged) | **GET** /api/v1/transactions/{accountID} | Get a list of the transactions for a single payment account. |
| [**getTransactionsPaged()**](TransactionsApi.md#getTransactionsPaged) | **GET** /api/v1/transactions | Get a list of the transactions for all payment accounts a user has access to. |
| [**removeTag()**](TransactionsApi.md#removeTag) | **DELETE** /api/v1/transactions/{transactionID}/tag | Removes a tag from the transaction using the tag ID. |


## `addTags()`

```php
addTags($transaction_id, $request_body)
```

Adds merchant tags to a transaction.

Merchant tokens can only use this endpoint if an IP address whitelist is set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 'transaction_id_example'; // string | The ID of the transaction to add tags.
$request_body = array('request_body_example'); // string[] | The tags to add to the transaction.

try {
    $apiInstance->addTags($transaction_id, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->addTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| The ID of the transaction to add tags. | |
| **request_body** | [**string[]**](../Model/string.md)| The tags to add to the transaction. | [optional] |

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

## `getTransactionProof()`

```php
getTransactionProof($id)
```

Generates a proof of payment PDF document with the details of a transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the transaction.

try {
    $apiInstance->getTransactionProof($id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionProof: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the transaction. | |

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

## `getTransactionsForAccountPaged()`

```php
getTransactionsForAccountPaged($account_id, $from_date, $page_number, $page_size, $to_date, $credit_type, $search, $sort, $min_amount, $max_amount)
```

Get a list of the transactions for a single payment account.

Merchant tokens can only use this endpoint if an IP address whitelist is set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TransactionsApi(
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
$credit_type = 'credit_type_example'; // string | A credit filter to apply to the transactions to retrieve.
$search = 'search_example'; // string | The text filter to apply to retrieve transactions with a similar account name, description, their reference, your reference, etc.
$sort = 'sort_example'; // string | Optional expression to sort the order of the transactions. Example \"Amount desc,Inserted asc\".
$min_amount = 3.4; // float | The amount filter to apply to retrieve transactions that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve transactions that don't exceed this amount.

try {
    $apiInstance->getTransactionsForAccountPaged($account_id, $from_date, $page_number, $page_size, $to_date, $credit_type, $search, $sort, $min_amount, $max_amount);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsForAccountPaged: ', $e->getMessage(), PHP_EOL;
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
| **credit_type** | **string**| A credit filter to apply to the transactions to retrieve. | [optional] |
| **search** | **string**| The text filter to apply to retrieve transactions with a similar account name, description, their reference, your reference, etc. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the transactions. Example \&quot;Amount desc,Inserted asc\&quot;. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve transactions that exceed this amount. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve transactions that don&#39;t exceed this amount. | [optional] |

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

## `getTransactionsPaged()`

```php
getTransactionsPaged($from_date, $page_number, $page_size, $to_date, $credit_type): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransactionPageResponse
```

Get a list of the transactions for all payment accounts a user has access to.

Merchant tokens can only use this endpoint if an IP address whitelist is set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to retrieve transactions from.
$page_number = 56; // int | The page number to retrieve.
$page_size = 20; // int | The number of transactions per page.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to retrieve transactions from.
$credit_type = 'credit_type_example'; // string | A credit filter to apply to the transactions to retrieve.

try {
    $result = $apiInstance->getTransactionsPaged($from_date, $page_number, $page_size, $to_date, $credit_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsPaged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**| The start date to retrieve transactions from. | [optional] |
| **page_number** | **int**| The page number to retrieve. | [optional] |
| **page_size** | **int**| The number of transactions per page. | [optional] [default to 20] |
| **to_date** | **\DateTime**| The end date to retrieve transactions from. | [optional] |
| **credit_type** | **string**| A credit filter to apply to the transactions to retrieve. | [optional] |

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

## `removeTag()`

```php
removeTag($transaction_id, $tag_id)
```

Removes a tag from the transaction using the tag ID.

Merchant tokens can only use this endpoint if an IP address whitelist is set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 'transaction_id_example'; // string | The ID of the transaction to remove tag.
$tag_id = 'tag_id_example'; // string | The ID of the tag to remove.

try {
    $apiInstance->removeTag($transaction_id, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->removeTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| The ID of the transaction to remove tag. | |
| **tag_id** | **string**| The ID of the tag to remove. | [optional] |

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

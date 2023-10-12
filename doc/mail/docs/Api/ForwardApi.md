# OpenAPI\Client\ForwardApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAddressForwarding()**](ForwardApi.md#createAddressForwarding) | **POST** /api/v1/mails/{mailServerID}/accounts/{accountID}/forwards | add address endpoint to forwarding mails |
| [**deleteExtraEndpoint()**](ForwardApi.md#deleteExtraEndpoint) | **DELETE** /api/v1/mails/{mailServerID}/accounts/{accountID}/forwards/{addressID} | delete extra endpoint address |
| [**getListAddressForwarding()**](ForwardApi.md#getListAddressForwarding) | **GET** /api/v1/mails/{mailServerID}/accounts/{accountID}/forwards | get all extra address to forwarding mails |


## `createAddressForwarding()`

```php
createAddressForwarding($mail_server_id, $account_id, $body): \OpenAPI\Client\Model\PostMails201Response
```

add address endpoint to forwarding mails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ForwardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$account_id = 'account_id_example'; // string
$body = new \OpenAPI\Client\Model\Model6(); // \OpenAPI\Client\Model\Model6

try {
    $result = $apiInstance->createAddressForwarding($mail_server_id, $account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForwardApi->createAddressForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **account_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\Model6**](../Model/Model6.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostMails201Response**](../Model/PostMails201Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExtraEndpoint()`

```php
deleteExtraEndpoint($mail_server_id, $account_id, $address_id)
```

delete extra endpoint address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ForwardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$account_id = 'account_id_example'; // string
$address_id = 'address_id_example'; // string

try {
    $apiInstance->deleteExtraEndpoint($mail_server_id, $account_id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling ForwardApi->deleteExtraEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **account_id** | **string**|  | |
| **address_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListAddressForwarding()`

```php
getListAddressForwarding($mail_server_id, $account_id): \OpenAPI\Client\Model\MailForwards
```

get all extra address to forwarding mails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ForwardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getListAddressForwarding($mail_server_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForwardApi->getListAddressForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MailForwards**](../Model/MailForwards.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

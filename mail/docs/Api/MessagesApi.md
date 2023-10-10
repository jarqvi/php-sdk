# OpenAPI\Client\MessagesApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateTemporary()**](MessagesApi.md#generateTemporary) | **POST** /api/v1/mails/{mailServerID}/messages/{messageID}/temporary-access | generate temporary access to email html |
| [**getAllMails()**](MessagesApi.md#getAllMails) | **GET** /api/v1/mails/{mailServerID}/messages | get all mails |
| [**getSingleMail()**](MessagesApi.md#getSingleMail) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID} | get single mail |
| [**getSingleMailHtml()**](MessagesApi.md#getSingleMailHtml) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID}/render | get single mail html |
| [**sendMail()**](MessagesApi.md#sendMail) | **POST** /api/v1/mails/{mailServerID}/messages | send a mail |


## `generateTemporary()`

```php
generateTemporary($mail_server_id, $message_id, $expiration): \OpenAPI\Client\Model\TmpAccess
```

generate temporary access to email html

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$message_id = 'message_id_example'; // string
$expiration = 1; // float | Specifying hourly expiration schedule options

try {
    $result = $apiInstance->generateTemporary($mail_server_id, $message_id, $expiration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->generateTemporary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **message_id** | **string**|  | |
| **expiration** | **float**| Specifying hourly expiration schedule options | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\TmpAccess**](../Model/TmpAccess.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllMails()`

```php
getAllMails($mail_server_id, $direction, $page, $count, $state, $subject, $from, $to): \OpenAPI\Client\Model\MailMessages
```

get all mails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$direction = 'direction_example'; // string
$page = 1; // float
$count = 15; // float
$state = 'state_example'; // string
$subject = 'subject_example'; // string
$from = 'from_example'; // string
$to = 'to_example'; // string

try {
    $result = $apiInstance->getAllMails($mail_server_id, $direction, $page, $count, $state, $subject, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getAllMails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **direction** | **string**|  | |
| **page** | **float**|  | [optional] [default to 1] |
| **count** | **float**|  | [optional] [default to 15] |
| **state** | **string**|  | [optional] |
| **subject** | **string**|  | [optional] |
| **from** | **string**|  | [optional] |
| **to** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MailMessages**](../Model/MailMessages.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleMail()`

```php
getSingleMail($mail_server_id, $message_id): \OpenAPI\Client\Model\GetSingleMail200Response
```

get single mail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$message_id = 'message_id_example'; // string

try {
    $result = $apiInstance->getSingleMail($mail_server_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getSingleMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **message_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetSingleMail200Response**](../Model/GetSingleMail200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleMailHtml()`

```php
getSingleMailHtml($mail_server_id, $message_id, $token)
```

get single mail html

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$message_id = 'message_id_example'; // string
$token = 'token_example'; // string

try {
    $apiInstance->getSingleMailHtml($mail_server_id, $message_id, $token);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getSingleMailHtml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **message_id** | **string**|  | |
| **token** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMail()`

```php
sendMail($mail_server_id, $body): \OpenAPI\Client\Model\PostMails201Response
```

send a mail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$body = new \OpenAPI\Client\Model\Model3(); // \OpenAPI\Client\Model\Model3

try {
    $result = $apiInstance->sendMail($mail_server_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\Model3**](../Model/Model3.md)|  | [optional] |

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

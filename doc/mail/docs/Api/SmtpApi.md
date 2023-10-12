# OpenAPI\Client\SmtpApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSmtpCredential()**](SmtpApi.md#deleteSmtpCredential) | **DELETE** /api/v1/mails/{mailServerID}/smtp-credentials/{username} | delete smtp credential |
| [**generateCredentials()**](SmtpApi.md#generateCredentials) | **POST** /api/v1/mails/{mailServerID}/smtp-credentials | generate credentials to connet mail server with SMTP |
| [**getCredential()**](SmtpApi.md#getCredential) | **GET** /api/v1/mails/{mailServerID}/smtp-credentials | get credential to connect to mail server with SMTP |
| [**revokeCredentials()**](SmtpApi.md#revokeCredentials) | **PATCH** /api/v1/mails/{mailServerID}/smtp-credentials | revoke credentials to connect mail server with SMTP |


## `deleteSmtpCredential()`

```php
deleteSmtpCredential($mail_server_id, $username)
```

delete smtp credential

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SmtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$username = 'username_example'; // string

try {
    $apiInstance->deleteSmtpCredential($mail_server_id, $username);
} catch (Exception $e) {
    echo 'Exception when calling SmtpApi->deleteSmtpCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **username** | **string**|  | |

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

## `generateCredentials()`

```php
generateCredentials($mail_server_id, $body): \OpenAPI\Client\Model\CreateSMTP
```

generate credentials to connet mail server with SMTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SmtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$body = new \OpenAPI\Client\Model\Model4(); // \OpenAPI\Client\Model\Model4

try {
    $result = $apiInstance->generateCredentials($mail_server_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmtpApi->generateCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\Model4**](../Model/Model4.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateSMTP**](../Model/CreateSMTP.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredential()`

```php
getCredential($mail_server_id): \OpenAPI\Client\Model\SMTP
```

get credential to connect to mail server with SMTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SmtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string

try {
    $result = $apiInstance->getCredential($mail_server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmtpApi->getCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SMTP**](../Model/SMTP.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeCredentials()`

```php
revokeCredentials($mail_server_id, $body): \OpenAPI\Client\Model\CreateSMTP
```

revoke credentials to connect mail server with SMTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SmtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$body = new \OpenAPI\Client\Model\Model9(); // \OpenAPI\Client\Model\Model9

try {
    $result = $apiInstance->revokeCredentials($mail_server_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmtpApi->revokeCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\Model9**](../Model/Model9.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateSMTP**](../Model/CreateSMTP.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# OpenAPI\Client\SmtpApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSmtpCredential()**](SmtpApi.md#deleteSmtpCredential) | **DELETE** /api/v1/mails/{mailServerID}/smtp-credentials/{username} | delete smtp credential |
| [**generateCredentials()**](SmtpApi.md#generateCredentials) | **POST** /api/v1/mails/{mailServerID}/smtp-credentials | generate credentials to connet mail server with SMTP |
| [**getCredential()**](SmtpApi.md#getCredential) | **GET** /api/v1/mails/{mailServerID}/smtp-credentials | get credential to connect to mail server with SMTP |
| [**revokeCredentials()**](SmtpApi.md#revokeCredentials) | **PATCH** /api/v1/mails/{mailServerID}/smtp-credentials | revoke credentials to connect mail server with SMTP |


## `deleteSmtpCredential()`



delete smtp credential

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->SmtpApi->deleteSmtpCredential('example-id', 'username-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



generate credentials to connet mail server with SMTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\Model4();
    $body->setDescription('example-description');
    $result = $instance->SmtpApi->generateCredentials('example-id', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



get credential to connect to mail server with SMTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->SmtpApi->getCredential('example-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



revoke credentials to connect mail server with SMTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\Model9();
    $body->setUsername('example-username');
    $result = $instance->SmtpApi->revokeCredentials('example-id', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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

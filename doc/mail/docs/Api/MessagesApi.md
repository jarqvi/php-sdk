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



generate temporary access to email html

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MessagesApi->generateTemporary('example-id', 'message-id', 1);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



get all mails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MessagesApi->getAllMails('example-id', 1, 15, 'incoming', 'state', 'subject', 'from', 'to');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



get single mail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MessagesApi->getSingleMail('example-id', 'message-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



get single mail html

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MessagesApi->getSingleMailHtml('example-id', 'message-id', 'token');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



send a mail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\Model3();

    $body->setHtml('example-html');
    $body->setFrom('example-from');
    $body->setTo('example-to');
    $body->setSubject('example-subject');
    $body->setText('example-text');
    $body->setReplyto('example-replyto');
    $body->setAttachments([
        [
            'name' => 'example-name',
            'content_type' => 'example-content_type',
            'data' => 'example-data'
        ]
    ]);

    $result = $instance->MessagesApi->sendMail('example-id', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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

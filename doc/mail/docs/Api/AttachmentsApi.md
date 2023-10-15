# OpenAPI\Client\AttachmentsApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadAttachments()**](AttachmentsApi.md#downloadAttachments) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID}/attachments/{attachmentID} | download attachment |
| [**getAllAttachments()**](AttachmentsApi.md#getAllAttachments) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID}/attachments | get all attachments for message |


## `downloadAttachments()`



download attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->AttachmentsApi->downloadAttachments('example-id', 'message-id', 'attachment-id');

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
| **attachment_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DownloadAttachments200Response**](../Model/DownloadAttachments200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAttachments()`



get all attachments for message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->AttachmentsApi->getAllAttachments('example-id', 'message-id');

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

[**\OpenAPI\Client\Model\MailAttachments**](../Model/MailAttachments.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

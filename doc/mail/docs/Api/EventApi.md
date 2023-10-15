# OpenAPI\Client\EventApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllEvents()**](EventApi.md#getAllEvents) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID}/events | get all events for message |


## `getAllEvents()`



get all events for message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->EventApi->getAllEvents('example-id', 'message-id', 1, 15);

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
| **page** | **float**|  | [optional] [default to 1] |
| **count** | **float**|  | [optional] [default to 15] |

### Return type

[**\OpenAPI\Client\Model\MailEvents**](../Model/MailEvents.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

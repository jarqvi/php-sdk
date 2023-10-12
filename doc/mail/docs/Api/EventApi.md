# OpenAPI\Client\EventApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllEvents()**](EventApi.md#getAllEvents) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID}/events | get all events for message |


## `getAllEvents()`

```php
getAllEvents($mail_server_id, $message_id, $page, $count): \OpenAPI\Client\Model\MailEvents
```

get all events for message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$message_id = 'message_id_example'; // string
$page = 1; // float
$count = 15; // float

try {
    $result = $apiInstance->getAllEvents($mail_server_id, $message_id, $page, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAllEvents: ', $e->getMessage(), PHP_EOL;
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

# OpenAPI\Client\InboundrulesApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addInboundRule()**](InboundrulesApi.md#addInboundRule) | **POST** /api/v1/mails/{mailServerID}/inboundrules | add inbound rule. |
| [**deleteInboundRule()**](InboundrulesApi.md#deleteInboundRule) | **DELETE** /api/v1/mail/{mailServerID}/inboundrules/{inboundruleID} | delete inbound rule. |
| [**getAllInboundRules()**](InboundrulesApi.md#getAllInboundRules) | **GET** /api/v1/mails/{mailServerID}/inboundrules | get all inbound rules. |


## `addInboundRule()`

```php
addInboundRule($mail_server_id, $model11): \OpenAPI\Client\Model\PostMails201Response
```

add inbound rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InboundrulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$model11 = new \OpenAPI\Client\Model\Model11(); // \OpenAPI\Client\Model\Model11

try {
    $result = $apiInstance->addInboundRule($mail_server_id, $model11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundrulesApi->addInboundRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **model11** | [**\OpenAPI\Client\Model\Model11**](../Model/Model11.md)|  | [optional] |

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

## `deleteInboundRule()`

```php
deleteInboundRule($mail_server_id, $inboundrule_id)
```

delete inbound rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InboundrulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$inboundrule_id = 'inboundrule_id_example'; // string

try {
    $apiInstance->deleteInboundRule($mail_server_id, $inboundrule_id);
} catch (Exception $e) {
    echo 'Exception when calling InboundrulesApi->deleteInboundRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **inboundrule_id** | **string**|  | |

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

## `getAllInboundRules()`

```php
getAllInboundRules($mail_server_id): \OpenAPI\Client\Model\MailInboundRules
```

get all inbound rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InboundrulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string

try {
    $result = $apiInstance->getAllInboundRules($mail_server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundrulesApi->getAllInboundRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MailInboundRules**](../Model/MailInboundRules.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

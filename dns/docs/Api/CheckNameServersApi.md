# OpenAPI\Client\CheckNameServersApi

All URIs are relative to https://dns-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkNameServer()**](CheckNameServersApi.md#checkNameServer) | **PUT** /api/v1/zones/{zone}/check | check nameserver |


## `checkNameServer()`

```php
checkNameServer($zone): \OpenAPI\Client\Model\Submitted
```

check nameserver

check nameserver of zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckNameServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone = 'zone_example'; // string | The name of the zone to check status

try {
    $result = $apiInstance->checkNameServer($zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckNameServersApi->checkNameServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone** | **string**| The name of the zone to check status | |

### Return type

[**\OpenAPI\Client\Model\Submitted**](../Model/Submitted.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

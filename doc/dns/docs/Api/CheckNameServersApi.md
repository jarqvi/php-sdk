# OpenAPI\Client\CheckNameServersApi

All URIs are relative to https://dns-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkNameServer()**](CheckNameServersApi.md#checkNameServer) | **PUT** /api/v1/zones/{zone}/check | check nameserver |


## `checkNameServer()`



check nameserver

check nameserver of zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $result = $instance->CheckNameServersApi->checkNameServer('example.com', 'text/plain');
    
    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
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

# OpenAPI\Client\ReportsApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAppCpuReports()**](ReportsApi.md#getAppCpuReports) | **GET** /v1/projects/{name}/metrics/cpu | Get cpu reports of app |
| [**getAppMemoryReports()**](ReportsApi.md#getAppMemoryReports) | **GET** /v1/projects/{name}/metrics/memory | Get memory reports of app |
| [**getAppNetworkReceiveReports()**](ReportsApi.md#getAppNetworkReceiveReports) | **GET** /v1/projects/{name}/metrics/network-receive | Get network-receive reports of app |
| [**getAppSummaryReports()**](ReportsApi.md#getAppSummaryReports) | **GET** /v1/projects/{name}/metrics/summary | Get summary reports of app |
| [**getNetworkTransmitReports()**](ReportsApi.md#getNetworkTransmitReports) | **GET** /v1/projects/{name}/metrics/network-transmit | Get network-transmit reports of app |


## `getAppCpuReports()`

```php
getAppCpuReports($name, $since): \OpenAPI\Client\Model\Reports
```

Get cpu reports of app

get cpu reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app
$since = 3.4; // float | The since of your cpu reports

try {
    $result = $apiInstance->getAppCpuReports($name, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getAppCpuReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **since** | **float**| The since of your cpu reports | |

### Return type

[**\OpenAPI\Client\Model\Reports**](../Model/Reports.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppMemoryReports()`

```php
getAppMemoryReports($name, $since): \OpenAPI\Client\Model\Reports
```

Get memory reports of app

get memory reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app
$since = 3.4; // float | The since of your memory reports

try {
    $result = $apiInstance->getAppMemoryReports($name, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getAppMemoryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **since** | **float**| The since of your memory reports | |

### Return type

[**\OpenAPI\Client\Model\Reports**](../Model/Reports.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppNetworkReceiveReports()`

```php
getAppNetworkReceiveReports($name, $since): \OpenAPI\Client\Model\Reports
```

Get network-receive reports of app

get network-receive reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app
$since = 3.4; // float | The since of your network-receive reports

try {
    $result = $apiInstance->getAppNetworkReceiveReports($name, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getAppNetworkReceiveReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **since** | **float**| The since of your network-receive reports | |

### Return type

[**\OpenAPI\Client\Model\Reports**](../Model/Reports.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppSummaryReports()`

```php
getAppSummaryReports($name): \OpenAPI\Client\Model\GetAppSummaryReports200Response
```

Get summary reports of app

get summary reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app

try {
    $result = $apiInstance->getAppSummaryReports($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getAppSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |

### Return type

[**\OpenAPI\Client\Model\GetAppSummaryReports200Response**](../Model/GetAppSummaryReports200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkTransmitReports()`

```php
getNetworkTransmitReports($name, $since): \OpenAPI\Client\Model\Reports
```

Get network-transmit reports of app

get network-transmit reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app
$since = 3.4; // float | The since of your network-transmit reports

try {
    $result = $apiInstance->getNetworkTransmitReports($name, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getNetworkTransmitReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **since** | **float**| The since of your network-transmit reports | |

### Return type

[**\OpenAPI\Client\Model\Reports**](../Model/Reports.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

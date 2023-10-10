# OpenAPI\Client\ReportsApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDatabaseCpuReports()**](ReportsApi.md#getDatabaseCpuReports) | **GET** /v1/databases/{id}/metrics/cpu | Get cpu reports of database |
| [**getDatabaseMemoryReports()**](ReportsApi.md#getDatabaseMemoryReports) | **GET** /v1/databases/{id}/metrics/memory | Get memory reports of database |
| [**getDatabaseNetworkReceiveReports()**](ReportsApi.md#getDatabaseNetworkReceiveReports) | **GET** /v1/databases/{id}/metrics/network-receive | Get network-receive reports of database |
| [**getDatabaseNetworkTransmitReports()**](ReportsApi.md#getDatabaseNetworkTransmitReports) | **GET** /v1/databases/{id}/metrics/network-transmit | Get network-transmit reports of database |
| [**getDatabaseSummaryReports()**](ReportsApi.md#getDatabaseSummaryReports) | **GET** /v1/databases/{id}/metrics/summary | Get summary reports of database |


## `getDatabaseCpuReports()`

```php
getDatabaseCpuReports($id, $since): \OpenAPI\Client\Model\Reports
```

Get cpu reports of database

get cpu reports of database that user owns

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
$id = 'id_example'; // string | The name of your database
$since = 3.4; // float | The since of your cpu reports

try {
    $result = $apiInstance->getDatabaseCpuReports($id, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getDatabaseCpuReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The name of your database | |
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

## `getDatabaseMemoryReports()`

```php
getDatabaseMemoryReports($id, $since): \OpenAPI\Client\Model\Reports
```

Get memory reports of database

get memory reports of database that user owns

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
$id = 'id_example'; // string | The name of your database
$since = 3.4; // float | The since of your memory reports

try {
    $result = $apiInstance->getDatabaseMemoryReports($id, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getDatabaseMemoryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The name of your database | |
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

## `getDatabaseNetworkReceiveReports()`

```php
getDatabaseNetworkReceiveReports($id, $since): \OpenAPI\Client\Model\Reports
```

Get network-receive reports of database

get network-receive reports of database that user owns

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
$id = 'id_example'; // string | The name of your database
$since = 3.4; // float | The since of your network-receive reports

try {
    $result = $apiInstance->getDatabaseNetworkReceiveReports($id, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getDatabaseNetworkReceiveReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The name of your database | |
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

## `getDatabaseNetworkTransmitReports()`

```php
getDatabaseNetworkTransmitReports($id, $since): \OpenAPI\Client\Model\Reports
```

Get network-transmit reports of database

get network-transmit reports of database that user owns

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
$id = 'id_example'; // string | The name of your database
$since = 3.4; // float | The since of your network-transmit reports

try {
    $result = $apiInstance->getDatabaseNetworkTransmitReports($id, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getDatabaseNetworkTransmitReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The name of your database | |
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

## `getDatabaseSummaryReports()`

```php
getDatabaseSummaryReports($id): \OpenAPI\Client\Model\GetDatabaseSummaryReports200Response
```

Get summary reports of database

get summary reports of database that user owns

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
$id = 'id_example'; // string | The name of your database

try {
    $result = $apiInstance->getDatabaseSummaryReports($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getDatabaseSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The name of your database | |

### Return type

[**\OpenAPI\Client\Model\GetDatabaseSummaryReports200Response**](../Model/GetDatabaseSummaryReports200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

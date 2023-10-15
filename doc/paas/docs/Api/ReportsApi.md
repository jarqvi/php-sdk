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



Get cpu reports of app

get cpu reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getAppCpuReports('example-name', 1697279296);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get memory reports of app

get memory reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getAppMemoryReports('example-name', 1697279296);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get network-receive reports of app

get network-receive reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getAppNetworkReceiveReports('example-name', 1697279296);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get summary reports of app

get summary reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getAppSummaryReports('example-name');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get network-transmit reports of app

get network-transmit reports of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getNetworkTransmitReports('example-name', 1697279296);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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

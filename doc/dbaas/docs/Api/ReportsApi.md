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



Get cpu reports of database

get cpu reports of database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getDatabaseCpuReports('id-example', 1697279296);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get memory reports of database

get memory reports of database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getDatabaseMemoryReports('id-example', 1697279296);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get network-receive reports of database

get network-receive reports of database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getDatabaseNetworkReceiveReports('id-example', 1697279296);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get network-transmit reports of database

get network-transmit reports of database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getDatabaseNetworkTransmitReports('id-example', 1697279296);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get summary reports of database

get summary reports of database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->ReportsApi->getDatabaseSummaryReports('id-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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

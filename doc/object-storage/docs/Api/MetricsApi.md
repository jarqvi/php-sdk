# OpenAPI\Client\MetricsApi

All URIs are relative to https://storage-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getHisotricalMetrics()**](MetricsApi.md#getHisotricalMetrics) | **GET** /api/v1/buckets/{bucket}/metrics/historical | hisotrical metrics |
| [**getMetricsSummary()**](MetricsApi.md#getMetricsSummary) | **GET** /api/v1/buckets/{bucket}/metrics/summary | metrics summary |


## `getHisotricalMetrics()`



hisotrical metrics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->MetricsApi->getHisotricalMetrics('key-example', 1697279296);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **since** | **string**| unix time | |

### Return type

[**\OpenAPI\Client\Model\GetHisotricalMetrics200Response**](../Model/GetHisotricalMetrics200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetricsSummary()`



metrics summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->MetricsApi->getMetricsSummary('key-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetMetricsSummary200Response**](../Model/GetMetricsSummary200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

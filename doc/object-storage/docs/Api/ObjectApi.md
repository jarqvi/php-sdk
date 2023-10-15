# OpenAPI\Client\ObjectApi

All URIs are relative to https://storage-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteObject()**](ObjectApi.md#deleteObject) | **DELETE** /api/v1/buckets/{bucket}/objects/{prefix} | Delete Object |
| [**downloadObject()**](ObjectApi.md#downloadObject) | **GET** /api/v1/buckets/{bucket}/download/${object} | Download Object |
| [**getListObjects()**](ObjectApi.md#getListObjects) | **GET** /api/v1/buckets/{bucket}/objects/{prefix} | List Objects |
| [**getStatObject()**](ObjectApi.md#getStatObject) | **GET** /api/v1/buckets/{bucket}/objects/statistics/{object} | Get Stat Object |
| [**uploadObject()**](ObjectApi.md#uploadObject) | **GET** /api/v1/buckets/{bucket}/upload/{object} | Upload Object |


## `deleteObject()`



Delete Object

Delete an object from storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->ObjectApi->deleteObject('bucket-example', 'prefix-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **prefix** | **string**|  | |

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

## `downloadObject()`



Download Object

Return presigned url for download object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->ObjectApi->downloadObject('bucket-example', 'object-example', '2 days 7 hours 45 minutes');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **object** | **string**| specify object path | |
| **expiry** | **string**| example: 2 days 7 hours 45 minutes | [optional] |

### Return type

[**\OpenAPI\Client\Model\DownloadObject200Response**](../Model/DownloadObject200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListObjects()`



List Objects

Return list of objects ( max:50, min:1 )

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->ObjectApi->getListObjects('bucket-example', 'prefix-example', 10, 1);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **prefix** | **string**|  | |
| **number** | **string**| specify number of object ( max: 50, min: 1 ) | [optional] |
| **page** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Objects**](../Model/Objects.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatObject()`



Get Stat Object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->ObjectApi->getStatObject('bucket-example', 'object-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **object** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Stat**](../Model/Stat.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadObject()`



Upload Object

Return presigned url for download object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->ObjectApi->uploadObject('bucket-example', 'object-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **object** | **string**| specify object path | |

### Return type

[**\OpenAPI\Client\Model\DownloadObject200Response**](../Model/DownloadObject200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

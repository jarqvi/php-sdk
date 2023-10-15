# OpenAPI\Client\KeyApi

All URIs are relative to https://storage-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createKey()**](KeyApi.md#createKey) | **POST** /api/v1/keys | Create Keys |
| [**deleteKey()**](KeyApi.md#deleteKey) | **DELETE** /api/v1/keys/{key} | Delete Key |
| [**getKey()**](KeyApi.md#getKey) | **GET** /api/v1/keys/{key} | Get Key |
| [**getListKeys()**](KeyApi.md#getListKeys) | **GET** /api/v1/keys | Get List of Keys |
| [**revokeSecretKey()**](KeyApi.md#revokeSecretKey) | **PATCH** /api/v1/keys/{key}/revoke | Revoke secret key |
| [**updateKey()**](KeyApi.md#updateKey) | **PATCH** /api/v1/keys/{key} | Update key |


## `createKey()`



Create Keys

Create access and secret key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\CreateKey();
    $body->setDescription('example-description');
    $body->setBuckets([
        'example-bucket-1',
        'example-bucket-2',
    ]);
    $result = $instance->KeyApi->createKey($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CreateKey**](../Model/CreateKey.md)| Declare Buckets for access key | |

### Return type

[**\OpenAPI\Client\Model\CreateKey201Response**](../Model/CreateKey201Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteKey()`



Delete Key

Delete access key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->KeyApi->deleteKey('key-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |

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

## `getKey()`



Get Key

Get a key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->KeyApi->getKey('key-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |

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

## `getListKeys()`



Get List of Keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->KeyApi->getListKeys();

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Keys**](../Model/Keys.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeSecretKey()`



Revoke secret key

Revoke secret key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->KeyApi->revokeSecretKey('key-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\RevokeSecretKey200Response**](../Model/RevokeSecretKey200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateKey()`



Update key

Update buckets of key ( redefine )

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\CreateKey();
    $body->setDescription('example-description');
    $body->setBuckets([
        'example-bucket-1',
        'example-bucket-2',
    ]);
    $result = $instance->KeyApi->updateKey('key-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\CreateKey**](../Model/CreateKey.md)| Declare Buckets for access key | |

### Return type

[**\OpenAPI\Client\Model\CreateBucket201Response**](../Model/CreateBucket201Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

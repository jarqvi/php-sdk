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

```php
deleteObject($bucket, $prefix)
```

Delete Object

Delete an object from storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string
$prefix = 'prefix_example'; // string

try {
    $apiInstance->deleteObject($bucket, $prefix);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->deleteObject: ', $e->getMessage(), PHP_EOL;
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

```php
downloadObject($bucket, $object, $expiry): \OpenAPI\Client\Model\DownloadObject200Response
```

Download Object

Return presigned url for download object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string
$object = 'object_example'; // string | specify object path
$expiry = 'expiry_example'; // string | example: 2 days 7 hours 45 minutes

try {
    $result = $apiInstance->downloadObject($bucket, $object, $expiry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->downloadObject: ', $e->getMessage(), PHP_EOL;
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

```php
getListObjects($bucket, $prefix, $number, $page): \OpenAPI\Client\Model\Objects
```

List Objects

Return list of objects ( max:50, min:1 )

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string
$prefix = 'prefix_example'; // string
$number = 'number_example'; // string | specify number of object ( max: 50, min: 1 )
$page = 'page_example'; // string

try {
    $result = $apiInstance->getListObjects($bucket, $prefix, $number, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->getListObjects: ', $e->getMessage(), PHP_EOL;
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

```php
getStatObject($bucket, $object): \OpenAPI\Client\Model\Stat
```

Get Stat Object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string
$object = 'object_example'; // string

try {
    $result = $apiInstance->getStatObject($bucket, $object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->getStatObject: ', $e->getMessage(), PHP_EOL;
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

```php
uploadObject($bucket, $object): \OpenAPI\Client\Model\DownloadObject200Response
```

Upload Object

Return presigned url for download object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string
$object = 'object_example'; // string | specify object path

try {
    $result = $apiInstance->uploadObject($bucket, $object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->uploadObject: ', $e->getMessage(), PHP_EOL;
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

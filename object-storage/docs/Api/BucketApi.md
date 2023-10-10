# OpenAPI\Client\BucketApi

All URIs are relative to https://storage-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeBucketAccess()**](BucketApi.md#changeBucketAccess) | **PATCH** /api/v1/buckets/{bucket}/type/{permission} | change Bucket Access Policy |
| [**checkBucket()**](BucketApi.md#checkBucket) | **GET** /api/v1/buckets/{bucket}/check-availability | Check Bucket availability |
| [**createBucket()**](BucketApi.md#createBucket) | **POST** /api/v1/buckets | Create Bucket |
| [**destroyBucket()**](BucketApi.md#destroyBucket) | **DELETE** /api/v1/buckets/{bucket} | Destroy Bucket |
| [**getBuckets()**](BucketApi.md#getBuckets) | **GET** /api/v1/buckets | List all Buckets |
| [**getListPreviousBuckets()**](BucketApi.md#getListPreviousBuckets) | **GET** /api/v1/buckets/migration/from | List storage service buckets |
| [**getMigrations()**](BucketApi.md#getMigrations) | **GET** /api/v1/buckets/migrations | list migration operation |
| [**getSingleBuckets()**](BucketApi.md#getSingleBuckets) | **GET** /api/v1/buckets/{bucket} | Get Single Buckets |
| [**migratingBuckets()**](BucketApi.md#migratingBuckets) | **POST** /api/v1/buckets/migrates | Migrating buckets |
| [**upgradeBucket()**](BucketApi.md#upgradeBucket) | **PATCH** /api/v1/buckets/{bucket}/upgrade/{plan} | Upgrade Bucket |


## `changeBucketAccess()`

```php
changeBucketAccess($bucket, $permission): \OpenAPI\Client\Model\ChangeBucketAccess200Response
```

change Bucket Access Policy

Change Bucket Access policy on an object storage ( public / private )

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string
$permission = 'permission_example'; // string

try {
    $result = $apiInstance->changeBucketAccess($bucket, $permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->changeBucketAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **permission** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ChangeBucketAccess200Response**](../Model/ChangeBucketAccess200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkBucket()`

```php
checkBucket($bucket): \OpenAPI\Client\Model\CreateBucket201Response
```

Check Bucket availability

Check if you can create Bucket with specified Name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string

try {
    $result = $apiInstance->checkBucket($bucket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->checkBucket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CreateBucket201Response**](../Model/CreateBucket201Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBucket()`

```php
createBucket($body): \OpenAPI\Client\Model\CreateBucket201Response
```

Create Bucket

creates a new bucket on an object storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CreateBucket(); // \OpenAPI\Client\Model\CreateBucket | create bucket. Acceptable values for permission: ( private / public ) and for plan: ( 20g, 40g, 80g, 160g )

try {
    $result = $apiInstance->createBucket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->createBucket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CreateBucket**](../Model/CreateBucket.md)| create bucket. Acceptable values for permission: ( private / public ) and for plan: ( 20g, 40g, 80g, 160g ) | |

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

## `destroyBucket()`

```php
destroyBucket($bucket)
```

Destroy Bucket

Delete Bucket on an object storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string

try {
    $apiInstance->destroyBucket($bucket);
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->destroyBucket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |

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

## `getBuckets()`

```php
getBuckets(): \OpenAPI\Client\Model\ListBucket
```

List all Buckets

List all Bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBuckets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->getBuckets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ListBucket**](../Model/ListBucket.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListPreviousBuckets()`

```php
getListPreviousBuckets()
```

List storage service buckets

List previous buckets of storage service in liara.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getListPreviousBuckets();
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->getListPreviousBuckets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getMigrations()`

```php
getMigrations(): \OpenAPI\Client\Model\GetMigrations200Response
```

list migration operation

list migration operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMigrations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->getMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetMigrations200Response**](../Model/GetMigrations200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleBuckets()`

```php
getSingleBuckets($bucket): \OpenAPI\Client\Model\GetSingleBuckets200Response
```

Get Single Buckets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string

try {
    $result = $apiInstance->getSingleBuckets($bucket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->getSingleBuckets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetSingleBuckets200Response**](../Model/GetSingleBuckets200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `migratingBuckets()`

```php
migratingBuckets($body)
```

Migrating buckets

Move data from one bucket to another

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MigrateBucket(); // \OpenAPI\Client\Model\MigrateBucket | Migrate buckets

try {
    $apiInstance->migratingBuckets($body);
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->migratingBuckets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\MigrateBucket**](../Model/MigrateBucket.md)| Migrate buckets | |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upgradeBucket()`

```php
upgradeBucket($bucket, $plan): \OpenAPI\Client\Model\UpgradeBucket200Response
```

Upgrade Bucket

Upgrade Bucket plan ( just make space bigger )

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string
$plan = 'plan_example'; // string

try {
    $result = $apiInstance->upgradeBucket($bucket, $plan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketApi->upgradeBucket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **plan** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\UpgradeBucket200Response**](../Model/UpgradeBucket200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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



change Bucket Access Policy

Change Bucket Access policy on an object storage ( public / private )

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->BucketApi->changeBucketAccess('bucket-example', 'private'); // or public

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Check Bucket availability

Check if you can create Bucket with specified Name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->BucketApi->checkBucket('bucket-example');

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



Create Bucket

creates a new bucket on an object storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\CreateBucket();
    $body->setName('bucket-example');
    $body->setPlan('plan-example');
    $body->setPermission('permission-example');
    $result = $instance->BucketApi->createBucket($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Destroy Bucket

Delete Bucket on an object storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->BucketApi->destroyBucket('bucket-example');

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



List all Buckets

List all Bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->BucketApi->getBuckets();

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
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



List storage service buckets

List previous buckets of storage service in liara.

### Example

```php
?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->BucketApi->getListPreviousBuckets();

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



list migration operation

list migration operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->BucketApi->getMigrations();

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get Single Buckets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->BucketApi->getSingleBuckets('bucket-example');

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



Migrating buckets

Move data from one bucket to another

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\MigrateBucket();
    $body->setFrom('from-example');
    $body->setTo('to-example');
    $body->setPath('path-example');
    $result = $instance->BucketApi->migratingBuckets($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Upgrade Bucket

Upgrade Bucket plan ( just make space bigger )

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->BucketApi->upgradeBucket('bucket-example', 'plan-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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

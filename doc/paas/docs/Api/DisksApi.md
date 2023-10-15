# OpenAPI\Client\DisksApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBackup()**](DisksApi.md#createBackup) | **POST** /v1/projects/{id}/disks/{name}/backups | Create backup disk |
| [**createDisk()**](DisksApi.md#createDisk) | **POST** /v1/projects/{name}/disks | Create a disk |
| [**createFtp()**](DisksApi.md#createFtp) | **POST** /v1/projects/{name}/disks/{dname}/ftp | Create ftp |
| [**deleteDisk()**](DisksApi.md#deleteDisk) | **DELETE** /v1/projects/{id}/disks/{name} | Delete a disk |
| [**deleteFtp()**](DisksApi.md#deleteFtp) | **DELETE** /v1/ftp/{fname} | Delete a ftp |
| [**downloadBackup()**](DisksApi.md#downloadBackup) | **POST** /v1/projects/{id}/disks/{dname}/backups/manual/{bname}/download | Download backup disk |
| [**getBackups()**](DisksApi.md#getBackups) | **GET** /v1/projects/{id}/disks/{name}/backups | Get backups disk |
| [**getDisks()**](DisksApi.md#getDisks) | **GET** /v1/projects/{id}/disks | Get disks |
| [**getFtps()**](DisksApi.md#getFtps) | **GET** /v1/projects/{name}/disks/{dname}/ftp | Get ftps |
| [**resizeDisk()**](DisksApi.md#resizeDisk) | **POST** /v1/projects/{name}/disks/{dname}/resize | Resize disk |


## `createBackup()`



Create backup disk

create backup disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DisksApi->createBackup('id-example', 'name-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your app | |
| **name** | **string**| The name of your disk | |

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

## `createDisk()`



Create a disk

create a disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\CreateDiskRequest();
    $body->setName('name-example');
    $body->setSize('size-example');
    $result = $instance->DisksApi->createDisk('id-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **disk** | [**\OpenAPI\Client\Model\CreateDiskRequest**](../Model/CreateDiskRequest.md)| The disk of your app | |

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

## `createFtp()`



Create ftp

create ftp that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\CreateFtpRequest();
    $body->setUsername('name-example');
    $body->setReadOnly(true);
    $result = $instance->DisksApi->createFtp('name-example', 'dname-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **dname** | **string**| The name of your disk | |
| **create_ftp** | [**\OpenAPI\Client\Model\CreateFtpRequest**](../Model/CreateFtpRequest.md)| The plan of your app | |

### Return type

[**\OpenAPI\Client\Model\CreateFtp200Response**](../Model/CreateFtp200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDisk()`



Delete a disk

delete a disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DisksApi->deleteDisk('id-example', 'name-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your app | |
| **name** | **string**| The name of your disk of app | |

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

## `deleteFtp()`



Delete a ftp

delete a ftp that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DisksApi->deleteFtp('fname-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fname** | **string**| The name of your ftp | |

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

## `downloadBackup()`



Download backup disk

download backup disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DisksApi->downloadBackup('id-example', 'dname-example', 'bname-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your app | |
| **dname** | **string**| The name of your disk | |
| **bname** | **string**| The name of your backup | |

### Return type

[**\OpenAPI\Client\Model\DownloadBackup200Response**](../Model/DownloadBackup200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackups()`



Get backups disk

get backups disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DisksApi->getBackups('id-example', 'dname-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your app | |
| **name** | **string**| The name of your disk | |

### Return type

[**\OpenAPI\Client\Model\GetDiskBackup**](../Model/GetDiskBackup.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDisks()`



Get disks

get disks that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DisksApi->getDisks('id-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your app | |

### Return type

[**\OpenAPI\Client\Model\GetDisks**](../Model/GetDisks.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFtps()`



Get ftps

get ftps that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DisksApi->getFtps('name-example', 'dname-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **dname** | **string**| The name of your disk | |

### Return type

[**\OpenAPI\Client\Model\GetFtps200Response**](../Model/GetFtps200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resizeDisk()`



Resize disk

resize disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\ResizeDiskRequest();
    $body->setSize(10);
    $result = $instance->DisksApi->resizeDisk('name-example', 'dname-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **dname** | **string**| The name of your disk | |
| **resize_disk** | [**\OpenAPI\Client\Model\ResizeDiskRequest**](../Model/ResizeDiskRequest.md)| The size of your disk | |

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

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

```php
createBackup($id, $name)
```

Create backup disk

create backup disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of your app
$name = 'name_example'; // string | The name of your disk

try {
    $apiInstance->createBackup($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->createBackup: ', $e->getMessage(), PHP_EOL;
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

```php
createDisk($name, $disk)
```

Create a disk

create a disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app
$disk = new \OpenAPI\Client\Model\CreateDiskRequest(); // \OpenAPI\Client\Model\CreateDiskRequest | The disk of your app

try {
    $apiInstance->createDisk($name, $disk);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->createDisk: ', $e->getMessage(), PHP_EOL;
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

```php
createFtp($name, $dname, $create_ftp): \OpenAPI\Client\Model\CreateFtp200Response
```

Create ftp

create ftp that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app
$dname = 'dname_example'; // string | The name of your disk
$create_ftp = new \OpenAPI\Client\Model\CreateFtpRequest(); // \OpenAPI\Client\Model\CreateFtpRequest | The plan of your app

try {
    $result = $apiInstance->createFtp($name, $dname, $create_ftp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->createFtp: ', $e->getMessage(), PHP_EOL;
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

```php
deleteDisk($id, $name)
```

Delete a disk

delete a disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of your app
$name = 'name_example'; // string | The name of your disk of app

try {
    $apiInstance->deleteDisk($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->deleteDisk: ', $e->getMessage(), PHP_EOL;
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

```php
deleteFtp($fname)
```

Delete a ftp

delete a ftp that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fname = 'fname_example'; // string | The name of your ftp

try {
    $apiInstance->deleteFtp($fname);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->deleteFtp: ', $e->getMessage(), PHP_EOL;
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

```php
downloadBackup($id, $dname, $bname): \OpenAPI\Client\Model\DownloadBackup200Response
```

Download backup disk

download backup disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of your app
$dname = 'dname_example'; // string | The name of your disk
$bname = 'bname_example'; // string | The name of your backup

try {
    $result = $apiInstance->downloadBackup($id, $dname, $bname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->downloadBackup: ', $e->getMessage(), PHP_EOL;
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

```php
getBackups($id, $name): \OpenAPI\Client\Model\GetDiskBackup
```

Get backups disk

get backups disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of your app
$name = 'name_example'; // string | The name of your disk

try {
    $result = $apiInstance->getBackups($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->getBackups: ', $e->getMessage(), PHP_EOL;
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

```php
getDisks($id): \OpenAPI\Client\Model\GetDisks
```

Get disks

get disks that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of your app

try {
    $result = $apiInstance->getDisks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->getDisks: ', $e->getMessage(), PHP_EOL;
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

```php
getFtps($name, $dname): \OpenAPI\Client\Model\GetFtps200Response
```

Get ftps

get ftps that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app
$dname = 'dname_example'; // string | The name of your disk

try {
    $result = $apiInstance->getFtps($name, $dname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->getFtps: ', $e->getMessage(), PHP_EOL;
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

```php
resizeDisk($name, $dname, $resize_disk)
```

Resize disk

resize disk that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app
$dname = 'dname_example'; // string | The name of your disk
$resize_disk = new \OpenAPI\Client\Model\ResizeDiskRequest(); // \OpenAPI\Client\Model\ResizeDiskRequest | The size of your disk

try {
    $apiInstance->resizeDisk($name, $dname, $resize_disk);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->resizeDisk: ', $e->getMessage(), PHP_EOL;
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

# OpenAPI\Client\BackupsApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBackup()**](BackupsApi.md#createBackup) | **POST** /v1/databases/{id}/backups | Backup a database |
| [**downloadBackup()**](BackupsApi.md#downloadBackup) | **POST** /v1/databases/{id}/backups/{name}/download | Download a backup |
| [**getListBackups()**](BackupsApi.md#getListBackups) | **GET** /v1/databases/{id}/backups | Get all backups |


## `createBackup()`



Backup a database

backup a database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->BackupsApi->createBackup('id-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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



Download a backup

download a backup that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->BackupsApi->downloadBackup('id-example', 'name-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your database | |
| **name** | **string**| The name of your backup | |

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

## `getListBackups()`



Get all backups

get all backups that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->BackupsApi->getListBackups('id-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetListBackups200Response**](../Model/GetListBackups200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

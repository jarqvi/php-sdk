# OpenAPI\Client\FolderApi

All URIs are relative to https://storage-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFolder()**](FolderApi.md#createFolder) | **POST** /api/v1/buckets/{bucket}/folders | Create Folder |
| [**deleteFolder()**](FolderApi.md#deleteFolder) | **DELETE** /api/v1/buckets/{bucket}/folders | Delete Folder |


## `createFolder()`



Create Folder

Create Folder in Bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\CreateFolder();
    $body->setPath('/example');
    $result = $instance->FolderApi->createFolder('bucket-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\CreateFolder**](../Model/CreateFolder.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateFolder201Response**](../Model/CreateFolder201Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFolder()`



Delete Folder

Delete Folder in Bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->FolderApi->deleteFolder('bucket-example', '/example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | **string**|  | |
| **path** | **string**|  | |

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

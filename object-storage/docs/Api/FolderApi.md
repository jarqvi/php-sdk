# OpenAPI\Client\FolderApi

All URIs are relative to https://storage-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFolder()**](FolderApi.md#createFolder) | **POST** /api/v1/buckets/{bucket}/folders | Create Folder |
| [**deleteFolder()**](FolderApi.md#deleteFolder) | **DELETE** /api/v1/buckets/{bucket}/folders | Delete Folder |


## `createFolder()`

```php
createFolder($bucket, $body): \OpenAPI\Client\Model\CreateFolder201Response
```

Create Folder

Create Folder in Bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string
$body = new \OpenAPI\Client\Model\CreateFolder(); // \OpenAPI\Client\Model\CreateFolder

try {
    $result = $apiInstance->createFolder($bucket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->createFolder: ', $e->getMessage(), PHP_EOL;
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

```php
deleteFolder($bucket, $path)
```

Delete Folder

Delete Folder in Bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = 'bucket_example'; // string
$path = 'path_example'; // string

try {
    $apiInstance->deleteFolder($bucket, $path);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
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

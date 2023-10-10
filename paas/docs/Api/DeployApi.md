# OpenAPI\Client\DeployApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**releasesDeploy()**](DeployApi.md#releasesDeploy) | **POST** /v2/projects/{name}/releases | Deploy releases |
| [**sourcesDeploy()**](DeployApi.md#sourcesDeploy) | **POST** /v2/projects/{name}/sources | Deploy sources code |


## `releasesDeploy()`

```php
releasesDeploy($name, $deploy_releases): \OpenAPI\Client\Model\ReleasesDeploy200Response
```

Deploy releases

deploy releases that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeployApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app for deploy
$deploy_releases = new \OpenAPI\Client\Model\DeployReleases(); // \OpenAPI\Client\Model\DeployReleases

try {
    $result = $apiInstance->releasesDeploy($name, $deploy_releases);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeployApi->releasesDeploy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app for deploy | |
| **deploy_releases** | [**\OpenAPI\Client\Model\DeployReleases**](../Model/DeployReleases.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReleasesDeploy200Response**](../Model/ReleasesDeploy200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sourcesDeploy()`

```php
sourcesDeploy($name, $file): \OpenAPI\Client\Model\SourcesDeploy200Response
```

Deploy sources code

deploy sources code that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeployApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of your app for deploy
$file = "/path/to/file.txt"; // \SplFileObject | The .gz file to deploy

try {
    $result = $apiInstance->sourcesDeploy($name, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeployApi->sourcesDeploy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app for deploy | |
| **file** | **\SplFileObject****\SplFileObject**| The .gz file to deploy | |

### Return type

[**\OpenAPI\Client\Model\SourcesDeploy200Response**](../Model/SourcesDeploy200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

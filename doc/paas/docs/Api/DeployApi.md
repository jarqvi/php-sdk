# OpenAPI\Client\DeployApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**releasesDeploy()**](DeployApi.md#releasesDeploy) | **POST** /v2/projects/{name}/releases | Deploy releases |
| [**sourcesDeploy()**](DeployApi.md#sourcesDeploy) | **POST** /v2/projects/{name}/sources | Deploy sources code |


## `releasesDeploy()`



Deploy releases

deploy releases that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\DeployReleases();
    $body->setSourceId('source-id-example');
    $result = $instance->DeployApi->releasesDeploy('name-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Deploy sources code

deploy sources code that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DeployApi->sourcesDeploy('name-example', './app.tar.xz');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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

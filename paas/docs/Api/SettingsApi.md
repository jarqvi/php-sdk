# OpenAPI\Client\SettingsApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**defaultSubdomain()**](SettingsApi.md#defaultSubdomain) | **POST** /v1/projects/{id}/default-subdomain/{status} | Default subdomain |
| [**ipStatic()**](SettingsApi.md#ipStatic) | **POST** /v1/projects/{id}/fixed-ip/{status} | IP static |
| [**updateEnvs()**](SettingsApi.md#updateEnvs) | **POST** /v1/projects/update-envs | Update envs |
| [**zeroDowntime()**](SettingsApi.md#zeroDowntime) | **POST** /v1/projects/{id}/zero-downtime/{status} | Zero downtime |


## `defaultSubdomain()`

```php
defaultSubdomain($id, $status)
```

Default subdomain

default subdomain that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$status = 'status_example'; // string | disable or enable

try {
    $apiInstance->defaultSubdomain($id, $status);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->defaultSubdomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **status** | **string**| disable or enable | |

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

## `ipStatic()`

```php
ipStatic($id, $status): \OpenAPI\Client\Model\IpStatic200Response
```

IP static

ip static that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$status = 'status_example'; // string | disable or enable

try {
    $result = $apiInstance->ipStatic($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->ipStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **status** | **string**| disable or enable | |

### Return type

[**\OpenAPI\Client\Model\IpStatic200Response**](../Model/IpStatic200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvs()`

```php
updateEnvs($update_envs): \OpenAPI\Client\Model\UpdateEnvs200Response
```

Update envs

update envs that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_envs = new \OpenAPI\Client\Model\UpdateEnvs(); // \OpenAPI\Client\Model\UpdateEnvs

try {
    $result = $apiInstance->updateEnvs($update_envs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateEnvs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_envs** | [**\OpenAPI\Client\Model\UpdateEnvs**](../Model/UpdateEnvs.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateEnvs200Response**](../Model/UpdateEnvs200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zeroDowntime()`

```php
zeroDowntime($id, $status)
```

Zero downtime

zero downtime that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$status = 'status_example'; // string | disable or enable

try {
    $apiInstance->zeroDowntime($id, $status);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->zeroDowntime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **status** | **string**| disable or enable | |

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

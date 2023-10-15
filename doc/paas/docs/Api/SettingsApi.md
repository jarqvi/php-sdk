# OpenAPI\Client\SettingsApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**defaultSubdomain()**](SettingsApi.md#defaultSubdomain) | **POST** /v1/projects/{id}/default-subdomain/{status} | Default subdomain |
| [**ipStatic()**](SettingsApi.md#ipStatic) | **POST** /v1/projects/{id}/fixed-ip/{status} | IP static |
| [**updateEnvs()**](SettingsApi.md#updateEnvs) | **POST** /v1/projects/update-envs | Update envs |
| [**zeroDowntime()**](SettingsApi.md#zeroDowntime) | **POST** /v1/projects/{id}/zero-downtime/{status} | Zero downtime |


## `defaultSubdomain()`



Default subdomain

default subdomain that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->SettingsApi->defaultSubdomain('id-name', 'status-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



IP static

ip static that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->SettingsApi->ipStatic('id-name', 'status-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Update envs

update envs that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\UpdateEnvs();
    $body->setProject('project-example');
    $body->setVariables([
        [
            'key' => 'key-example',
            'value' => 'value-example'
        ]
    ]);
    $result = $instance->SettingsApi->updateEnvs($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Zero downtime

zero downtime that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->SettingsApi->zeroDowntime('id-example', 'status-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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

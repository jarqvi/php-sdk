# OpenAPI\Client\AppsApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changePlan()**](AppsApi.md#changePlan) | **POST** /v1/projects/{name}/resize | Change plan |
| [**createApp()**](AppsApi.md#createApp) | **POST** /v1/projects | Create a app |
| [**deleteAppByName()**](AppsApi.md#deleteAppByName) | **DELETE** /v1/projects/{name} | Delete a app |
| [**getAppApplets()**](AppsApi.md#getAppApplets) | **GET** /v1/projects/{name}/applets | Get applets of app |
| [**getAppByName()**](AppsApi.md#getAppByName) | **GET** /v1/projects/{name} | Get details of a project |
| [**getAppLogs()**](AppsApi.md#getAppLogs) | **GET** /v1/projects/{name}/logs | Get logs of app |
| [**getAppReleases()**](AppsApi.md#getAppReleases) | **GET** /v1/projects/{name}/releases | Get releases of app |
| [**getApps()**](AppsApi.md#getApps) | **GET** /v1/projects | Get details of all projects |
| [**restartApp()**](AppsApi.md#restartApp) | **POST** /v1/projects/{name}/actions/restart | To restart a app |
| [**turnApp()**](AppsApi.md#turnApp) | **POST** /v1/projects/{name}/actions/scale | Turn on or off a app |


## `changePlan()`



Change plan

create app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\ChangePlanRequest();
    $body->setPlanId('example-plan-id');
    $result = $instance->AppsApi->changePlan('name-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **plan** | [**\OpenAPI\Client\Model\ChangePlanRequest**](../Model/ChangePlanRequest.md)| The plan of your app | |

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

## `createApp()`



Create a app

create app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\CreateApp();
    $body->setPlanId('example-plan-id');
    $body->setName('example-name');
    $body->setPlatform('example-platform');
    $result = $instance->AppsApi->createApp($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_app** | [**\OpenAPI\Client\Model\CreateApp**](../Model/CreateApp.md)|  | |

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

## `deleteAppByName()`



Delete a app

delete app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->AppsApi->deleteAppByName('name-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the app to delete | |

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

## `getAppApplets()`



Get applets of app

get applets of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->AppsApi->getAppApplets('name-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |

### Return type

[**\OpenAPI\Client\Model\Applets**](../Model/Applets.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppByName()`



Get details of a project

get all details of all project that user owns

### Example

```php
null
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |

### Return type

[**\OpenAPI\Client\Model\ProjectAllDetails**](../Model/ProjectAllDetails.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppLogs()`



Get logs of app

get logs of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->AppsApi->getAppByName('name-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **since** | **string**| Show logs since timestamp | |

### Return type

[**\OpenAPI\Client\Model\LogsInner[]**](../Model/LogsInner.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppReleases()`



Get releases of app

get releases of app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->AppsApi->getAppReleases('name-example', 1, 15);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of your app | |
| **page** | **float**| The page of your releases | [default to 1.0] |
| **count** | **float**| The count of your releases | [default to 10.0] |

### Return type

[**\OpenAPI\Client\Model\Releases**](../Model/Releases.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApps()`



Get details of all projects

get all details of all projects that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->AppsApi->getApps();
    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Projects**](../Model/Projects.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restartApp()`



To restart a app

to restart app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->AppsApi->restartApp('name-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the app to restart | |

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

## `turnApp()`



Turn on or off a app

turn on or off a app that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new OpenAPI\Client\Model\TurnAppRequest();
    $body->setScale(0);
    $result = $instance->AppsApi->turnApp('name-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the app to turn on or off | |
| **scale** | [**\OpenAPI\Client\Model\TurnAppRequest**](../Model/TurnAppRequest.md)| Return 1 to turn on or 0 to turn off | |

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

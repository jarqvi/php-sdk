# OpenAPI\Client\DatabasesApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeControlPanel()**](DatabasesApi.md#changeControlPanel) | **POST** /v1/databases/{id}/control-panel/{status} | Change control-panel status |
| [**changePublicNetwork()**](DatabasesApi.md#changePublicNetwork) | **PATCH** /v1/databases/{id}/public-network/{status} | Change public network status |
| [**createDatabase()**](DatabasesApi.md#createDatabase) | **POST** /v1/databases | Create a database |
| [**deleteDatabase()**](DatabasesApi.md#deleteDatabase) | **DELETE** /v1/databases/{id} | Delete a database |
| [**getDatabase()**](DatabasesApi.md#getDatabase) | **GET** /v1/databases/{id} | Get a database |
| [**getListDatabases()**](DatabasesApi.md#getListDatabases) | **GET** /v1/databases | Get all databases |
| [**resizeDatabase()**](DatabasesApi.md#resizeDatabase) | **POST** /v1/databases/{id}/resize | Resize a database |
| [**turnDatabase()**](DatabasesApi.md#turnDatabase) | **POST** /v1/databases/{id}/actions/scale | Power on or power off a database |


## `changeControlPanel()`



Change control-panel status

change control-panel status that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->DatabasesApi->changeControlPanel('id-example', 'status-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **status** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ChangeControlPanel200Response**](../Model/ChangeControlPanel200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changePublicNetwork()`



Change public network status

change public network status that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->DatabasesApi->changePublicNetwork('id-example', 'status-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **status** | **string**|  | |

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

## `createDatabase()`



Create a database

create a database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');

    $body = new \OpenAPI\Client\Model\CreateDatabases();
    $body->setHostname('hostname-example');
    $body->setOptions([
        'standaloneReplicaSet' => true
    ]);
    $body->setPublicNetwork(true);
    $body->setType('type-example');
    $body->setPlanId('planID-example');
    $body->setVersion('version-example');

    $result = $instance->DatabasesApi->createDatabase($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_databases** | [**\OpenAPI\Client\Model\CreateDatabases**](../Model/CreateDatabases.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateDatabase200Response**](../Model/CreateDatabase200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDatabase()`



Delete a database

delete a database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->DatabasesApi->deleteDatabase('id-example');

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

## `getDatabase()`



Get a database

get a database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->DatabasesApi->getDatabase('id-example');

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

[**\OpenAPI\Client\Model\DBDetails**](../Model/DBDetails.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListDatabases()`



Get all databases

get all databases that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $result = $instance->DatabasesApi->getListDatabases();

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DBsDetails**](../Model/DBsDetails.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resizeDatabase()`



Resize a database

resize a database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\ResizeDatabaseRequest();
    $body->setDisk(true);
    $body->setPlanId('plan-id-example');
    $result = $instance->DatabasesApi->resizeDatabase('id-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **resize** | [**\OpenAPI\Client\Model\ResizeDatabaseRequest**](../Model/ResizeDatabaseRequest.md)|  | |

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

## `turnDatabase()`



Power on or power off a database

power on or power off a database that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dbaas;

try {
    $instance = new Dbaas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\TurnDatabaseRequest();
    $body->setScale(1);
    $result = $instance->DatabasesApi->turnDatabase('id-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **scale** | [**\OpenAPI\Client\Model\TurnDatabaseRequest**](../Model/TurnDatabaseRequest.md)| 1 for power on or 0 for power off | |

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

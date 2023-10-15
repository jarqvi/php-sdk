# OpenAPI\Client\ZoneApi

All URIs are relative to https://dns-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createZone()**](ZoneApi.md#createZone) | **POST** /api/v1/zones | Create Zone |
| [**deleteZone()**](ZoneApi.md#deleteZone) | **DELETE** /api/v1/zones/{zone} | Delete Zone |
| [**getListZones()**](ZoneApi.md#getListZones) | **GET** /api/v1/zones | List all zones |
| [**getZone()**](ZoneApi.md#getZone) | **GET** /api/v1/zones/{zone} | Get Zone |


## `createZone()`



Create Zone

creates a new zone on dns server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\CreateZoneRequest();
    $body->setName('example.com');
    $result = $instance->ZoneApi->createZone($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_struct** | [**\OpenAPI\Client\Model\CreateZoneRequest**](../Model/CreateZoneRequest.md)| The zone to create | |

### Return type

[**\OpenAPI\Client\Model\CreateZone**](../Model/CreateZone.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteZone()`



Delete Zone

Deletes this zone, all dns records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $result = $instance->ZoneApi->deleteZone('example.com');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone** | **string**| The name of the zone to delete | |

### Return type

[**\OpenAPI\Client\Model\Submitted**](../Model/Submitted.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListZones()`



List all zones

list all zones that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $result = $instance->ZoneApi->getListZones();

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Zones**](../Model/Zones.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZone()`



Get Zone

Get this zone, all dns records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $result = $instance->ZoneApi->getZone('example.com');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone** | **string**| The name of the zone | |

### Return type

[**\OpenAPI\Client\Model\CreateZone**](../Model/CreateZone.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

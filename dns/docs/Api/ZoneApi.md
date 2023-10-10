# OpenAPI\Client\ZoneApi

All URIs are relative to https://dns-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createZone()**](ZoneApi.md#createZone) | **POST** /api/v1/zones | Create Zone |
| [**deleteZone()**](ZoneApi.md#deleteZone) | **DELETE** /api/v1/zones/{zone} | Delete Zone |
| [**getListZones()**](ZoneApi.md#getListZones) | **GET** /api/v1/zones | List all zones |
| [**getZone()**](ZoneApi.md#getZone) | **GET** /api/v1/zones/{zone} | Get Zone |


## `createZone()`

```php
createZone($zone_struct): \OpenAPI\Client\Model\CreateZone
```

Create Zone

creates a new zone on dns server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_struct = new \OpenAPI\Client\Model\CreateZoneRequest(); // \OpenAPI\Client\Model\CreateZoneRequest | The zone to create

try {
    $result = $apiInstance->createZone($zone_struct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->createZone: ', $e->getMessage(), PHP_EOL;
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

```php
deleteZone($zone): \OpenAPI\Client\Model\Submitted
```

Delete Zone

Deletes this zone, all dns records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone = 'zone_example'; // string | The name of the zone to delete

try {
    $result = $apiInstance->deleteZone($zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->deleteZone: ', $e->getMessage(), PHP_EOL;
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

```php
getListZones(): \OpenAPI\Client\Model\Zones
```

List all zones

list all zones that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListZones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getListZones: ', $e->getMessage(), PHP_EOL;
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

```php
getZone($zone): \OpenAPI\Client\Model\CreateZone
```

Get Zone

Get this zone, all dns records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone = 'zone_example'; // string | The name of the zone

try {
    $result = $apiInstance->getZone($zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getZone: ', $e->getMessage(), PHP_EOL;
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

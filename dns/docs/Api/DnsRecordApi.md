# OpenAPI\Client\DnsRecordApi

All URIs are relative to https://dns-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDnsRecord()**](DnsRecordApi.md#createDnsRecord) | **POST** /api/v1/zones/{zone}/dns-records | Create dns record |
| [**deleteDnsRecord()**](DnsRecordApi.md#deleteDnsRecord) | **DELETE** /api/v1/zones/{zone}/dns-records/{id} | delete dns record |
| [**editDnsRecord()**](DnsRecordApi.md#editDnsRecord) | **PUT** /api/v1/zones/{zone}/dns-records/{id} | edit dns record |
| [**getDnsRecord()**](DnsRecordApi.md#getDnsRecord) | **GET** /api/v1/zones/{zone}/dns-records/{id} | Get dns record |
| [**getListDnsRecords()**](DnsRecordApi.md#getListDnsRecords) | **GET** /api/v1/zones/{zone}/dns-records | Get all dns record |


## `createDnsRecord()`

```php
createDnsRecord($zone, $dns_record): \OpenAPI\Client\Model\DnsRecordResponse
```

Create dns record

Creates a new dns record, returns the dns record on creation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DnsRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone = 'zone_example'; // string | The name of the zone to delete
$dns_record = new \OpenAPI\Client\Model\DnsRecord(); // \OpenAPI\Client\Model\DnsRecord

try {
    $result = $apiInstance->createDnsRecord($zone, $dns_record);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone** | **string**| The name of the zone to delete | |
| **dns_record** | [**\OpenAPI\Client\Model\DnsRecord**](../Model/DnsRecord.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DnsRecordResponse**](../Model/DnsRecordResponse.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDnsRecord()`

```php
deleteDnsRecord($zone, $id)
```

delete dns record

Delete dns record from this zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DnsRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone = 'zone_example'; // string | The name of the zone to delete dns record
$id = 'id_example'; // string | The id of dns record to delete its data

try {
    $apiInstance->deleteDnsRecord($zone, $id);
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->deleteDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone** | **string**| The name of the zone to delete dns record | |
| **id** | **string**| The id of dns record to delete its data | |

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

## `editDnsRecord()`

```php
editDnsRecord($zone, $id, $dns_record): \OpenAPI\Client\Model\DnsRecordResponse
```

edit dns record

you can not edit type of dns record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DnsRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone = 'zone_example'; // string | The name of the zone to edit dns record
$id = 'id_example'; // string | The id of dns record to edit its data
$dns_record = new \OpenAPI\Client\Model\DnsRecord(); // \OpenAPI\Client\Model\DnsRecord

try {
    $result = $apiInstance->editDnsRecord($zone, $id, $dns_record);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->editDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone** | **string**| The name of the zone to edit dns record | |
| **id** | **string**| The id of dns record to edit its data | |
| **dns_record** | [**\OpenAPI\Client\Model\DnsRecord**](../Model/DnsRecord.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DnsRecordResponse**](../Model/DnsRecordResponse.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDnsRecord()`

```php
getDnsRecord($zone, $id): \OpenAPI\Client\Model\DnsRecordResponse
```

Get dns record

Get Dns Record data on this zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DnsRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone = 'zone_example'; // string | The name of the zone to see dns record
$id = 'id_example'; // string | The id of dns record to see its data

try {
    $result = $apiInstance->getDnsRecord($zone, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->getDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone** | **string**| The name of the zone to see dns record | |
| **id** | **string**| The id of dns record to see its data | |

### Return type

[**\OpenAPI\Client\Model\DnsRecordResponse**](../Model/DnsRecordResponse.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListDnsRecords()`

```php
getListDnsRecords($zone): \OpenAPI\Client\Model\AllDnsRecordResponse
```

Get all dns record

Get all Dns Records on this zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DnsRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone = 'zone_example'; // string | The name of the zone to see all dns records

try {
    $result = $apiInstance->getListDnsRecords($zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->getListDnsRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone** | **string**| The name of the zone to see all dns records | |

### Return type

[**\OpenAPI\Client\Model\AllDnsRecordResponse**](../Model/AllDnsRecordResponse.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

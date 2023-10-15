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



Create dns record

Creates a new dns record, returns the dns record on creation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\DnsRecord();
    $body->setName('example-record');
    $body->setType('A');
    $body->setTtl('7200');
    $body->setContents([
        [
            "ip" => "1.2.3.4"
        ]
    ]);
    $result = $instance->DnsRecordApi->createDnsRecord('example.com', $body);

    print_r("$result \n");
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



delete dns record

Delete dns record from this zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $result = $instance->DnsRecordApi->deleteDnsRecord('example.com', 'id-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



edit dns record

you can not edit type of dns record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\DnsRecord();
    $body->setName('example-record');
    $body->setType('A');
    $body->setTtl('7200');
    $body->setContents([
        [
            "ip" => "1.2.3.4"
        ]
    ]);
    $result = $instance->DnsRecordApi->editDnsRecord('example.com', 'id-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get dns record

Get Dns Record data on this zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $result = $instance->DnsRecordApi->getDnsRecord('example.com', 'id-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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



Get all dns record

Get all Dns Records on this zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Dns;

try {
    $instance = new Dns('YOUR-API-TOKEN');
    $result = $instance->DnsRecordApi->getListDnsRecords('example.com');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
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

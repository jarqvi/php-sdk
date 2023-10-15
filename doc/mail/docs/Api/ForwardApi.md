# OpenAPI\Client\ForwardApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAddressForwarding()**](ForwardApi.md#createAddressForwarding) | **POST** /api/v1/mails/{mailServerID}/accounts/{accountID}/forwards | add address endpoint to forwarding mails |
| [**deleteExtraEndpoint()**](ForwardApi.md#deleteExtraEndpoint) | **DELETE** /api/v1/mails/{mailServerID}/accounts/{accountID}/forwards/{addressID} | delete extra endpoint address |
| [**getListAddressForwarding()**](ForwardApi.md#getListAddressForwarding) | **GET** /api/v1/mails/{mailServerID}/accounts/{accountID}/forwards | get all extra address to forwarding mails |


## `createAddressForwarding()`



add address endpoint to forwarding mails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\Model6();
    $body->setAddress('example-address');
    $result = $instance->ForwardApi->createAddressForwarding('example-id', 'account-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **account_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\Model6**](../Model/Model6.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostMails201Response**](../Model/PostMails201Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExtraEndpoint()`



delete extra endpoint address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->ForwardApi->deleteExtraEndpoint('example-id', 'account-id', 'address-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **account_id** | **string**|  | |
| **address_id** | **string**|  | |

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

## `getListAddressForwarding()`



get all extra address to forwarding mails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->ForwardApi->getListAddressForwarding('example-id', 'account-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MailForwards**](../Model/MailForwards.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

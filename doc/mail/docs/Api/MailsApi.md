# OpenAPI\Client\MailsApi

All URIs are relative to https://mail-service.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeMailServerPlan()**](MailsApi.md#changeMailServerPlan) | **PUT** /api/v1/mails/{mailServerID}/plans | change mail server plan |
| [**checkDomainAvailable()**](MailsApi.md#checkDomainAvailable) | **GET** /api/v1/mails/{domain}/check-availability | check if domain name is available |
| [**checkMailServerDnsStatus()**](MailsApi.md#checkMailServerDnsStatus) | **GET** /api/v1/mails/{mailServerID}/dns-check | mail server check dns status |
| [**deleteMailServer()**](MailsApi.md#deleteMailServer) | **DELETE** /api/v1/mails/{mailServerID} | delete mail server |
| [**editMailServer()**](MailsApi.md#editMailServer) | **PATCH** /api/v1/mails/{mailServerID} | edit mail server |
| [**getCountFreeMails()**](MailsApi.md#getCountFreeMails) | **GET** /api/v1/mails/{mailServerID}/remaining-free-emails | count number of free mails every month |
| [**getCountMails()**](MailsApi.md#getCountMails) | **GET** /api/v1/mails/{mailServerID}/counts | count number of sent mails every day |
| [**getMails()**](MailsApi.md#getMails) | **GET** /api/v1/mails | get all mail servers |
| [**getSingleMailServer()**](MailsApi.md#getSingleMailServer) | **GET** /api/v1/mails/{mailServerID} | get single mail server |
| [**postMails()**](MailsApi.md#postMails) | **POST** /api/v1/mails | create mail server |


## `changeMailServerPlan()`



change mail server plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\Model10();
    $body->setPlan('example-plan');
    $result = $instance->MailsApi->changeMailServerPlan('example-id',);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\Model10**](../Model/Model10.md)|  | [optional] |

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

## `checkDomainAvailable()`



check if domain name is available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MailsApi->checkDomainAvailable('example.com');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PostMails201Response**](../Model/PostMails201Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkMailServerDnsStatus()`



mail server check dns status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MailsApi->checkMailServerDnsStatus('example-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CheckDNS**](../Model/CheckDNS.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMailServer()`



delete mail server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MailsApi->deleteMailServer('example-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |

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

## `editMailServer()`



edit mail server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\Model8();
    $body->setMode('DEV');
    $body->setInboundSpamThreshold(0);
    $result = $instance->MailsApi->editMailServer($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\Model8**](../Model/Model8.md)|  | [optional] |

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

## `getCountFreeMails()`



count number of free mails every month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MailsApi->getCountFreeMails('example-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\RemainingFreeMails**](../Model/RemainingFreeMails.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCountMails()`



count number of sent mails every day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MailsApi->getCountMails('example-id', 30);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |
| **last_n_days** | **float**|  | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\CountMailPerDay**](../Model/CountMailPerDay.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMails()`



get all mail servers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MailsApi->getMails();

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MailServers**](../Model/MailServers.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleMailServer()`



get single mail server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $result = $instance->MailsApi->getSingleMailServer('example-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mail_server_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MailServer**](../Model/MailServer.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMails()`



create mail server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Mail;

try {
    $instance = new Mail('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\Model1();
    $body->setDomain('example.com');
    $body->setPlan('example-plan');
    $body->setMode('DEV');
    $result = $instance->MailsApi->postMails($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\Model1**](../Model/Model1.md)|  | [optional] |

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

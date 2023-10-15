# OpenAPI\Client\DomainsApi

All URIs are relative to https://api.iran.liara.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkDomain()**](DomainsApi.md#checkDomain) | **GET** /v1/domains/{id}/check | Check a domain |
| [**createAppDomain()**](DomainsApi.md#createAppDomain) | **POST** /v1/domains | Create a domain |
| [**deleteDomain()**](DomainsApi.md#deleteDomain) | **DELETE** /v1/domains/{id} | Delete a domain |
| [**disableSsl()**](DomainsApi.md#disableSsl) | **POST** /v1/domains/{id}/ssl/disable | Disable ssl |
| [**enableSsl()**](DomainsApi.md#enableSsl) | **POST** /v1/domains/provision-ssl-certs | Enable ssl |
| [**getAppDomains()**](DomainsApi.md#getAppDomains) | **GET** /v1/domains | Get all domains |
| [**redirectDomain()**](DomainsApi.md#redirectDomain) | **POST** /v1/domains/{id}/set-redirect | Redirect a domain |
| [**setAppDomain()**](DomainsApi.md#setAppDomain) | **POST** /v1/domains/set-project | Set a domain for project |


## `checkDomain()`



Check a domain

check a domain that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DomainsApi->checkDomain('example.com');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your domain | |

### Return type

[**\OpenAPI\Client\Model\CheckDomain**](../Model/CheckDomain.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppDomain()`



Create a domain

create a domain that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\CreateAppDomainRequest();
    $body->setName('example.com');
    $body->setProject('project-name');
    $body->setType('PROJECT');

    $result = $instance->DomainsApi->createAppDomain('example.com');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | [**\OpenAPI\Client\Model\CreateAppDomainRequest**](../Model/CreateAppDomainRequest.md)| The domain of your app | |

### Return type

[**\OpenAPI\Client\Model\CreateAppDomain201Response**](../Model/CreateAppDomain201Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDomain()`



Delete a domain

delete a domain that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DomainsApi->deleteDomain('example-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your domain | |

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

## `disableSsl()`



Disable ssl

disable ssl that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DomainsApi->disableSsl('example-id');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your domain | |

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

## `enableSsl()`



Enable ssl

enable ssl that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\EnableSslRequest();
    $body->setDomain('domain-example');
    $result = $instance->DomainsApi->enableSsl($body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | [**\OpenAPI\Client\Model\EnableSslRequest**](../Model/EnableSslRequest.md)| The domain of your app | |

### Return type

[**\OpenAPI\Client\Model\EnableSsl200Response**](../Model/EnableSsl200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppDomains()`



Get all domains

get all domains that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $result = $instance->DomainsApi->getAppDomains('project-example');

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project** | **string**| The name of your app | |

### Return type

[**\OpenAPI\Client\Model\Domains**](../Model/Domains.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redirectDomain()`



Redirect a domain

redirect a domain that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\RedirectDomainRequest();
    $body->setRedirectTo('example.com');
    $body->setRedirectStatus(301); // or 302
    $result = $instance->DomainsApi->redirectDomain('id-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of your domain | |
| **domain** | [**\OpenAPI\Client\Model\RedirectDomainRequest**](../Model/RedirectDomainRequest.md)| The domain of your app | |

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

## `setAppDomain()`



Set a domain for project

set a domain for project that user owns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('YOUR-API-TOKEN');
    $body = new \OpenAPI\Client\Model\SetAppDomainRequest();
    $body->setDomainID('domain-example');
    $body->setProjectID('project-example');
    $result = $instance->DomainsApi->setAppDomain('id-example', $body);

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling DnsRecordApi->createDnsRecord: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | [**\OpenAPI\Client\Model\SetAppDomainRequest**](../Model/SetAppDomainRequest.md)| The domain of your app | |

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

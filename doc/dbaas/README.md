# OpenAPIClient-php

Manage your databases using our API


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.iran.liara.ir*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BackupsApi* | [**createBackup**](docs/Api/BackupsApi.md#createbackup) | **POST** /v1/databases/{id}/backups | Backup a database
*BackupsApi* | [**downloadBackup**](docs/Api/BackupsApi.md#downloadbackup) | **POST** /v1/databases/{id}/backups/{name}/download | Download a backup
*BackupsApi* | [**getListBackups**](docs/Api/BackupsApi.md#getlistbackups) | **GET** /v1/databases/{id}/backups | Get all backups
*DatabasesApi* | [**changeControlPanel**](docs/Api/DatabasesApi.md#changecontrolpanel) | **POST** /v1/databases/{id}/control-panel/{status} | Change control-panel status
*DatabasesApi* | [**changePublicNetwork**](docs/Api/DatabasesApi.md#changepublicnetwork) | **PATCH** /v1/databases/{id}/public-network/{status} | Change public network status
*DatabasesApi* | [**createDatabase**](docs/Api/DatabasesApi.md#createdatabase) | **POST** /v1/databases | Create a database
*DatabasesApi* | [**deleteDatabase**](docs/Api/DatabasesApi.md#deletedatabase) | **DELETE** /v1/databases/{id} | Delete a database
*DatabasesApi* | [**getDatabase**](docs/Api/DatabasesApi.md#getdatabase) | **GET** /v1/databases/{id} | Get a database
*DatabasesApi* | [**getListDatabases**](docs/Api/DatabasesApi.md#getlistdatabases) | **GET** /v1/databases | Get all databases
*DatabasesApi* | [**resizeDatabase**](docs/Api/DatabasesApi.md#resizedatabase) | **POST** /v1/databases/{id}/resize | Resize a database
*DatabasesApi* | [**turnDatabase**](docs/Api/DatabasesApi.md#turndatabase) | **POST** /v1/databases/{id}/actions/scale | Power on or power off a database
*ReportsApi* | [**getDatabaseCpuReports**](docs/Api/ReportsApi.md#getdatabasecpureports) | **GET** /v1/databases/{id}/metrics/cpu | Get cpu reports of database
*ReportsApi* | [**getDatabaseMemoryReports**](docs/Api/ReportsApi.md#getdatabasememoryreports) | **GET** /v1/databases/{id}/metrics/memory | Get memory reports of database
*ReportsApi* | [**getDatabaseNetworkReceiveReports**](docs/Api/ReportsApi.md#getdatabasenetworkreceivereports) | **GET** /v1/databases/{id}/metrics/network-receive | Get network-receive reports of database
*ReportsApi* | [**getDatabaseNetworkTransmitReports**](docs/Api/ReportsApi.md#getdatabasenetworktransmitreports) | **GET** /v1/databases/{id}/metrics/network-transmit | Get network-transmit reports of database
*ReportsApi* | [**getDatabaseSummaryReports**](docs/Api/ReportsApi.md#getdatabasesummaryreports) | **GET** /v1/databases/{id}/metrics/summary | Get summary reports of database

## Models

- [ChangeControlPanel200Response](docs/Model/ChangeControlPanel200Response.md)
- [CreateDatabase200Response](docs/Model/CreateDatabase200Response.md)
- [CreateDatabases](docs/Model/CreateDatabases.md)
- [CreateDatabasesOptions](docs/Model/CreateDatabasesOptions.md)
- [DBDetails](docs/Model/DBDetails.md)
- [DBDetailsDatabase](docs/Model/DBDetailsDatabase.md)
- [DBDetailsDatabaseMetaData](docs/Model/DBDetailsDatabaseMetaData.md)
- [DBDetailsDatabaseNode](docs/Model/DBDetailsDatabaseNode.md)
- [DBsDetails](docs/Model/DBsDetails.md)
- [DBsDetailsDatabasesInner](docs/Model/DBsDetailsDatabasesInner.md)
- [DownloadBackup200Response](docs/Model/DownloadBackup200Response.md)
- [GetDatabaseSummaryReports200Response](docs/Model/GetDatabaseSummaryReports200Response.md)
- [GetDatabaseSummaryReports200ResponseCpuUsageInner](docs/Model/GetDatabaseSummaryReports200ResponseCpuUsageInner.md)
- [GetDatabaseSummaryReports200ResponseCpuUsageInnerValueInner](docs/Model/GetDatabaseSummaryReports200ResponseCpuUsageInnerValueInner.md)
- [GetDatabaseSummaryReports200ResponseDisksUsageInner](docs/Model/GetDatabaseSummaryReports200ResponseDisksUsageInner.md)
- [GetListBackups200Response](docs/Model/GetListBackups200Response.md)
- [GetListBackups200ResponseBackupsInner](docs/Model/GetListBackups200ResponseBackupsInner.md)
- [Reports](docs/Model/Reports.md)
- [ReportsResultInner](docs/Model/ReportsResultInner.md)
- [ResizeDatabaseRequest](docs/Model/ResizeDatabaseRequest.md)
- [TurnDatabaseRequest](docs/Model/TurnDatabaseRequest.md)

## Authorization

Authentication schemes defined for the API:
### jwt

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@liara.ir

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

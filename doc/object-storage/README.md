# OpenAPIClient-php

A scalable, reliable, and cost effective Object Storage solution to support your application from liara-cloud

For more information, please visit [https://liara.ir](https://liara.ir).

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

use OpenAPI\Client\ObjectStorage;

try {
    $instance = new ObjectStorage('YOUR-API-TOKEN');
    $result = $instance->BucketApi->getBuckets();

    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://storage-service.iran.liara.ir*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BucketApi* | [**changeBucketAccess**](docs/Api/BucketApi.md#changebucketaccess) | **PATCH** /api/v1/buckets/{bucket}/type/{permission} | change Bucket Access Policy
*BucketApi* | [**checkBucket**](docs/Api/BucketApi.md#checkbucket) | **GET** /api/v1/buckets/{bucket}/check-availability | Check Bucket availability
*BucketApi* | [**createBucket**](docs/Api/BucketApi.md#createbucket) | **POST** /api/v1/buckets | Create Bucket
*BucketApi* | [**destroyBucket**](docs/Api/BucketApi.md#destroybucket) | **DELETE** /api/v1/buckets/{bucket} | Destroy Bucket
*BucketApi* | [**getBuckets**](docs/Api/BucketApi.md#getbuckets) | **GET** /api/v1/buckets | List all Buckets
*BucketApi* | [**getListPreviousBuckets**](docs/Api/BucketApi.md#getlistpreviousbuckets) | **GET** /api/v1/buckets/migration/from | List storage service buckets
*BucketApi* | [**getMigrations**](docs/Api/BucketApi.md#getmigrations) | **GET** /api/v1/buckets/migrations | list migration operation
*BucketApi* | [**getSingleBuckets**](docs/Api/BucketApi.md#getsinglebuckets) | **GET** /api/v1/buckets/{bucket} | Get Single Buckets
*BucketApi* | [**migratingBuckets**](docs/Api/BucketApi.md#migratingbuckets) | **POST** /api/v1/buckets/migrates | Migrating buckets
*BucketApi* | [**upgradeBucket**](docs/Api/BucketApi.md#upgradebucket) | **PATCH** /api/v1/buckets/{bucket}/upgrade/{plan} | Upgrade Bucket
*FolderApi* | [**createFolder**](docs/Api/FolderApi.md#createfolder) | **POST** /api/v1/buckets/{bucket}/folders | Create Folder
*FolderApi* | [**deleteFolder**](docs/Api/FolderApi.md#deletefolder) | **DELETE** /api/v1/buckets/{bucket}/folders | Delete Folder
*KeyApi* | [**createKey**](docs/Api/KeyApi.md#createkey) | **POST** /api/v1/keys | Create Keys
*KeyApi* | [**deleteKey**](docs/Api/KeyApi.md#deletekey) | **DELETE** /api/v1/keys/{key} | Delete Key
*KeyApi* | [**getKey**](docs/Api/KeyApi.md#getkey) | **GET** /api/v1/keys/{key} | Get Key
*KeyApi* | [**getListKeys**](docs/Api/KeyApi.md#getlistkeys) | **GET** /api/v1/keys | Get List of Keys
*KeyApi* | [**revokeSecretKey**](docs/Api/KeyApi.md#revokesecretkey) | **PATCH** /api/v1/keys/{key}/revoke | Revoke secret key
*KeyApi* | [**updateKey**](docs/Api/KeyApi.md#updatekey) | **PATCH** /api/v1/keys/{key} | Update key
*MetricsApi* | [**getHisotricalMetrics**](docs/Api/MetricsApi.md#gethisotricalmetrics) | **GET** /api/v1/buckets/{bucket}/metrics/historical | hisotrical metrics
*MetricsApi* | [**getMetricsSummary**](docs/Api/MetricsApi.md#getmetricssummary) | **GET** /api/v1/buckets/{bucket}/metrics/summary | metrics summary
*ObjectApi* | [**deleteObject**](docs/Api/ObjectApi.md#deleteobject) | **DELETE** /api/v1/buckets/{bucket}/objects/{prefix} | Delete Object
*ObjectApi* | [**downloadObject**](docs/Api/ObjectApi.md#downloadobject) | **GET** /api/v1/buckets/{bucket}/download/${object} | Download Object
*ObjectApi* | [**getListObjects**](docs/Api/ObjectApi.md#getlistobjects) | **GET** /api/v1/buckets/{bucket}/objects/{prefix} | List Objects
*ObjectApi* | [**getStatObject**](docs/Api/ObjectApi.md#getstatobject) | **GET** /api/v1/buckets/{bucket}/objects/statistics/{object} | Get Stat Object
*ObjectApi* | [**uploadObject**](docs/Api/ObjectApi.md#uploadobject) | **GET** /api/v1/buckets/{bucket}/upload/{object} | Upload Object

## Models

- [Bucket](docs/Model/Bucket.md)
- [ChangeBucketAccess200Response](docs/Model/ChangeBucketAccess200Response.md)
- [CreateBucket](docs/Model/CreateBucket.md)
- [CreateBucket201Response](docs/Model/CreateBucket201Response.md)
- [CreateFolder](docs/Model/CreateFolder.md)
- [CreateFolder201Response](docs/Model/CreateFolder201Response.md)
- [CreateFolder201ResponseData](docs/Model/CreateFolder201ResponseData.md)
- [CreateKey](docs/Model/CreateKey.md)
- [CreateKey201Response](docs/Model/CreateKey201Response.md)
- [CreateKey201ResponseData](docs/Model/CreateKey201ResponseData.md)
- [DownloadObject200Response](docs/Model/DownloadObject200Response.md)
- [DownloadObject200ResponseData](docs/Model/DownloadObject200ResponseData.md)
- [GetHisotricalMetrics200Response](docs/Model/GetHisotricalMetrics200Response.md)
- [GetHisotricalMetrics200ResponseData](docs/Model/GetHisotricalMetrics200ResponseData.md)
- [GetHisotricalMetrics200ResponseDataMetrics](docs/Model/GetHisotricalMetrics200ResponseDataMetrics.md)
- [GetMetricsSummary200Response](docs/Model/GetMetricsSummary200Response.md)
- [GetMetricsSummary200ResponseData](docs/Model/GetMetricsSummary200ResponseData.md)
- [GetMetricsSummary200ResponseDataMetrics](docs/Model/GetMetricsSummary200ResponseDataMetrics.md)
- [GetMetricsSummary200ResponseDataMetricsTotolObjectsInner](docs/Model/GetMetricsSummary200ResponseDataMetricsTotolObjectsInner.md)
- [GetMigrations200Response](docs/Model/GetMigrations200Response.md)
- [GetSingleBuckets200Response](docs/Model/GetSingleBuckets200Response.md)
- [Key](docs/Model/Key.md)
- [KeyBucketsInner](docs/Model/KeyBucketsInner.md)
- [Keys](docs/Model/Keys.md)
- [ListBucket](docs/Model/ListBucket.md)
- [MigrateBucket](docs/Model/MigrateBucket.md)
- [Objects](docs/Model/Objects.md)
- [ObjectsData](docs/Model/ObjectsData.md)
- [ObjectsDataObjects](docs/Model/ObjectsDataObjects.md)
- [ObjectsDataObjectsCommonPrefixesInner](docs/Model/ObjectsDataObjectsCommonPrefixesInner.md)
- [ObjectsDataObjectsContentsInner](docs/Model/ObjectsDataObjectsContentsInner.md)
- [RevokeSecretKey200Response](docs/Model/RevokeSecretKey200Response.md)
- [Stat](docs/Model/Stat.md)
- [StatData](docs/Model/StatData.md)
- [StatDataObject](docs/Model/StatDataObject.md)
- [StatDataObjectMetaData](docs/Model/StatDataObjectMetaData.md)
- [UpgradeBucket200Response](docs/Model/UpgradeBucket200Response.md)

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

support@liara.ir

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
